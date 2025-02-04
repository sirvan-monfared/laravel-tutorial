<?php

namespace App\Http\Controllers;

use App\Enums\OtpStatus;
use App\Http\Requests\OtpRequest;
use App\Models\Otp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class OtpController extends Controller
{
    public function edit()
    {
        return view('auth.verify-otp');
    }

    public function verify(OtpRequest $request)
    {
        $record = Otp::where('code', $request->otp)->where('status', OtpStatus::PENDING)->where('created_at', '>=', now()->subMinutes(2))->latest()->first();

        if (! $record || $record->phone !== session('temp_phone')) {
            throw ValidationException::withMessages([
                'otp' => 'کد وارد شده معتبر نیست و یا منقضی شده است'
            ]);
        }

        $record->status = OtpStatus::VERIFIED;
        $record->save();

        $user = User::where('phone', $record->phone)->first();

        if (! $user) {
            // register
            $user = User::create([
                'phone' => $record->phone,
            ]);
            $user->phone_verified_at = now();
            $user->save();
        }

        auth()->login($user, remember: true);
        return redirect()->route('dashboard.ad.index');
    }

    public function resend()
    {
        $phone = session('temp_phone');
        $record = Otp::where('phone', $phone)->where('status', OtpStatus::PENDING)->where('created_at', '>=', now()->subMinutes(2))->latest()->first();

        if ($record) {
            $time = intval(abs($record->created_at->diffInSeconds(now()->subMinutes(2))));
            return back()->with('fail', "برای ارسال مجدد کد تایید باید {$time} ثانیه صبر کنید");
        }

        $otpCode = rand(1000, 9999);
        Otp::create([
            'code' => $otpCode,
            'phone' => $phone,
            'status' => OtpStatus::PENDING
        ]);

        return back()->with('success', "کد تایید به شماره {$phone} ارسال شد");
    }
}
