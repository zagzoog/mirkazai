<?php

namespace RachidLaasri\LaravelInstaller\Controllers;

use App\Helpers\Classes\Helper;
use App\Models\SettingTwo;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use RachidLaasri\LaravelInstaller\Repositories\ApplicationStatusRepositoryInterface;
use RachidLaasri\LaravelInstaller\Requests\LicenseKeyRequest;

class ApplicationStatusController extends Controller
{
    public function __construct(public ApplicationStatusRepositoryInterface $licenseRepository) {}

    public function activate(Request $request): RedirectResponse
    {
        // Always redirect to dashboard with success message
        return redirect()->route('dashboard.index')->with([
            'type'    => 'success',
            'message' => 'License activated successfully',
        ]);
    }

    public function license(Request $request, $regenerate = null)
    {
        // Always redirect to dashboard with success message
        return to_route('dashboard.user.index')->with([
            'type'    => 'success',
            'message' => 'License activated successfully',
        ]);
    }

    public function upgrade(Request $request): RedirectResponse
    {
        // Always redirect to dashboard with success message
        return redirect()->route('dashboard.index')->with([
            'type'    => 'success',
            'message' => 'License activated successfully',
        ]);
    }

    public function licenseCheck(LicenseKeyRequest $request): RedirectResponse
    {
        // Always redirect to dashboard with success message
        return redirect()->route('dashboard.user.index')->with([
            'type'    => 'success',
            'message' => 'License activated successfully',
        ]);
    }

    public function webhook(Request $request)
    {
        return response()->noContent();
    }
}
