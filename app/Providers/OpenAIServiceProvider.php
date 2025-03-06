<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use OpenAI\Client;
use GuzzleHttp\Client as GuzzleClient;

class OpenAIServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(Client::class, function ($app) {
            return \OpenAI::client(config('openai.api_key'), [
                'timeout' => config('openai.request_timeout', 120),
                'verify' => env('CURL_SSL_VERIFY', true),
                'http_client' => new GuzzleClient([
                    'verify' => env('CURL_SSL_VERIFY', true),
                    'timeout' => config('openai.request_timeout', 120)
                ])
            ]);
        });
    }

    public function boot()
    {
        //
    }
} 