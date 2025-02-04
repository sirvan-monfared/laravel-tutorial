<?php

namespace App\Http\Controllers\Auth;

use App\Enums\OtpStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Otp;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    public function store(LoginRequest $request)
    {
        $user = User::where('phone', $request->phone)->first();

        // send otp code
//        $code = OtpService::sendFor($request->phone);
        $otpCode = rand(1000, 9999);
        Otp::create([
            'code' => $otpCode,
            'phone' => $request->phone,
            'status' => OtpStatus::PENDING
        ]);

        session()->put('temp_phone', $request->phone);

        return redirect()->route('otp.edit');
        // send Sms
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
