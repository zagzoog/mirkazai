<?php

namespace RachidLaasri\LaravelInstaller\Middleware;

use Closure;

class ApplicationStatus
{
    public function handle($request, Closure $next)
    {
        return $next($request); // Always allow access
    }
}
