<?php

namespace App\Domains\Marketplace\Repositories;

use App\Domains\Marketplace\Repositories\Contracts\ExtensionRepositoryInterface;
use App\Helpers\Classes\Helper;
use App\Models\Extension;
use App\Models\SettingTwo;
use Closure;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RachidLaasri\LaravelInstaller\Repositories\ApplicationStatusRepository;

class ExtensionRepository implements ExtensionRepositoryInterface
{
    public const APP_VERSION = 7.2;

    public const API_URL = '/api/marketplace/';

    public function licensed(array $data): array
    {
        return collect($data)->filter(function ($extension) {
            return true; // Always return true to bypass license checks
        })->toArray();
    }

    public function paidExtensions(): array
    {
        return collect($this->themes())
            ->sortBy('id')
            ->merge($this->extensions())
            ->where('price', '>', 0)->toArray();
    }

    public function extensions(): array
    {
        return $this->all();
    }

    public function themes(): array
    {
        return $this->all(true);
    }

    public function all(bool $isTheme = false): array
    {
        $appVersion = $this->appVersion();

        $response = $this->request('get', 'extension', [
            'is_theme'    => $isTheme,
            'is_beta'     => false,
            'app_version' => $appVersion ?: 6.5,
        ]);

        if ($response->ok()) {

            $data = $response->json('data');

            $this->updateExtensionsTable($data);

            return $this->mergedInstalled($data);
        }

        return [];
    }

    public function findId(int $id)
    {
        return collect($this->extensions())->where('id', $id)->first();
    }

    public function find(string $slug): array
    {
        $response = $this->request('get', "extension/{$slug}");

        if ($response->ok()) {

            $data = $response->json('data');

            $extension = Extension::query()->firstWhere('slug', $slug);

            return array_merge($data, [
                'only_show'  => Str::contains($extension['slug'], ['only-show']),
                'db_version' => $extension?->version,
                'installed'  => (bool) $extension?->installed,
                'upgradable' => $extension?->version !== $data['version'],
            ]);
        }

        return [];
    }

    public function install(string $slug, string $version)
    {
        return $this->request('post', "extension/{$slug}/install/{$version}");
    }

    private function getMockResponse(string $route)
    {
        $mockResponses = [
            'extension' => [
                'data' => [
                    [
                        'id' => 1,
                        'slug' => 'default-theme',
                        'version' => '1.0.0',
                        'is_theme' => true,
                        'price' => 0,
                        'installed' => true,
                        'enabled' => true
                    ]
                ]
            ],
            'subscription' => [
                'status' => 'success',
                'data' => [
                    'active' => true,
                    'plan' => 'Extended License',
                    'expires_at' => '2099-12-31'
                ],
                'payment' => 'extended'
            ],
            'cart' => [
                'status' => 'success',
                'data' => []
            ]
        ];

        return Http::fake([
            '*' => Http::response($mockResponses[$route] ?? ['status' => 'success', 'data' => []], 200)
        ])->get('fake-url');
    }

    public function request(string $method, string $route, array $body = [], $fullUrl = null)
    {
        // If marketplace bypass is enabled, return mock successful responses
        if (env('BYPASS_MARKETPLACE', true)) {
            return $this->getMockResponse($route);
        }

        // Original code for when bypass is not enabled
        $baseUrl = config('marketplace.api_base_url', 'https://portal.liquid-themes.com');
        $fullUrl = $fullUrl ?? rtrim($baseUrl, '/') . self::API_URL . $route;

        return Http::withHeaders([
            'Accept'         => 'application/json',
            'Content-Type'   => 'application/json',
            'x-domain'       => request()->getHost(),
            'x-app-version'  => (string) $this->appVersion(),
        ])->when($method === 'post', function ($http) use ($fullUrl, $body) {
            return $http->post($fullUrl, $body);
        }, function ($http) use ($fullUrl, $body) {
            return $http->get($fullUrl, $body);
        });
    }

    public function check($request, Closure $next)
    {
        // Always allow access
        return $next($request);
    }

    public function mergedInstalled(array $data): array
    {
        $extensions = Extension::query()->get();

        return collect($data)->map(function ($extension) use ($extensions) {
            $value = $extensions->firstWhere('slug', $extension['slug']);

            return array_merge($extension, [
                'only_show'  => Str::contains($extension['slug'], ['only-show']),
                'db_version' => $value?->version,
                'installed'  => (bool) $value?->installed,
                'upgradable' => $value?->version !== $extension['version'],
            ]);
        })->toArray();
    }

    private function updateExtensionsTable(array $data): void
    {
        foreach ($data as $extension) {
            Extension::query()->firstOrCreate([
                'slug'     => $extension['slug'],
                'is_theme' => $extension['is_theme'],
            ], [
                'version' => $extension['version'],
            ]);
        }
    }

    private function dbExtensionCount(bool $isTheme = false): int
    {
        return Extension::query()
            ->where('is_theme', $isTheme)
            ->count();
    }

    public function appKey()
    {
        return md5(config('app.key'));
    }

    public function licenseType()
    {
        return 'extended'; // Always return extended license
    }

    public function domainKey()
    {
        return md5(config('app.key')); // Generate a stable key based on app key
    }

    public function subscription()
    {
        return $this->request('get', 'subscription');
    }

    public function subscriptionPayment()
    {
        return cache()->remember('subscription_payment', 60 * 60 * 24, function () {

            if ($this->subscription()->json('payment')) {
                return $this->subscription()->json('payment');
            }

            return '';
        });
    }

    public function appVersion(): bool|string|int
    {
        $file = base_path('version.txt');

        if (file_exists($file)) {
            return trim(file_get_contents($file));
        }

        return self::APP_VERSION;
    }

    public function cart(): ?array
    {
        $response = $this->request('get', 'cart' . DIRECTORY_SEPARATOR . $this->domainKey());

        if ($response->successful()) {

            return $response->json();
        }

        return [];
    }

    public function findBySlugInDb(string $slug): Model|Builder|null
    {
        return Extension::query()->where('slug', $slug)->firstOrFail();
    }

    public function blacklist(): bool
    {
        return $this
            ->request('post', 'blacklist')
            ->json('blacklist');
    }
}
