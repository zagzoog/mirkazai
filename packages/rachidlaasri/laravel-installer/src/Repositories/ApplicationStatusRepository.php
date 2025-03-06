<?php

namespace RachidLaasri\LaravelInstaller\Repositories;

use App\Models\SettingTwo;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;

class ApplicationStatusRepository implements ApplicationStatusRepositoryInterface
{
    public string $baseLicenseUrl = 'https://portal.liquid-themes.com/api/license';

    public function financePage(string $view = 'panel.admin.finance.gateways.particles.finance'): string
    {
        return $view;
    }

    public function financeLicense(): bool
    {
        return true;
    }

    public function licenseType(): ?string
    {
        return 'Extended License';
    }

    public function check(string $licenseKey, bool $installed = false): bool
    {
        return true;
    }

    public function portal()
    {
        return [
            'liquid_license_type' => 'Extended License',
            'liquid_license_domain_key' => md5(config('app.key')),
            'installed' => true,
            'blocked' => false
        ];
    }

    public function getVariable(string $key)
    {
        $portal = $this->portal();

        return data_get($portal, $key);
    }

    public function save($data): bool
    {
        return true;
    }

    public function setLicense(): void
    {
        // Do nothing - license is always set
    }

    public function generate(Request $request): bool
    {
        return true;
    }

    public function next($request, Closure $next)
    {
        return $next($request);
    }

    public function webhook($request)
    {
        return response()->noContent();
    }

    public function appKey(): string
    {
        return md5(config('app.key'));
    }
}
