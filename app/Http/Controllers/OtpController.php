<?php

namespace App\Http\Controllers;

use App\Enums\OtpStatus;
use App\Exceptions\CanNotResendOtpException;
use App\Exceptions\InvalidOtpCodeException;
use App\Http\Requests\OtpRequest;
use App\Models\Otp;
use App\Models\User;
use App\Services\OtpService;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class OtpController extends Controller
{
    public function edit()
    {
        return view('auth.verify-otp');
    }

    public function verify(OtpRequest $request, OtpService $otpService)
    {
        try {
            $phone = $otpService->verify($request->otp);

            $user = UserService::findOrCreateByPhone($phone);

            auth()->login($user, remember: true);

            return redirect()->route('dashboard.ad.index');

        }catch(InvalidOtpCodeException $e) {
            throw ValidationException::withMessages([
                'otp' => $e->getMessage()
            ]);
        }
    }

    public function resend(OtpService $otpService)
    {
        try {
            $phone = $otpService->fetchPhoneFromSession();

             $otpService->resend($phone);

            return back()->with('success', "کد تایید به شماره {$phone} ارسال شد");

        } catch (CanNotResendOtpException $e) {
            return back()->with(['fail' => $e->getMessage()]);
        }
    }
}
