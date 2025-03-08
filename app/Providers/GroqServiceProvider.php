<?php

namespace App\Providers;

use App\Services\Ai\GroqService;
use Illuminate\Support\ServiceProvider;

class GroqServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(GroqService::class, function ($app) {
            return new GroqService();
        });
    }

    public function boot()
    {
        //
    }
} 