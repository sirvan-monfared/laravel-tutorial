<?php

namespace App\Http\Controllers\Auth;

use App\Enums\OtpStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Jobs\SendOTPSms;
use App\Models\Otp;
use App\Models\User;
use App\Services\OtpService;
use App\Services\SmsService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('front.auth-new.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request, OtpService $otpService)
    {

        $otpService->sendTo($request->phone);

        return redirect()->route('otp.edit');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
