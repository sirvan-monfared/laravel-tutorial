<?php

namespace App\Services;

use App\Enums\OtpStatus;
use App\Exceptions\CanNotResendOtpException;
use App\Exceptions\InvalidOtpCodeException;
use App\Jobs\SendOTPSms;
use App\Models\Otp;

class OtpService
{
    const EXPIRATION_MINUTES = 2;

    public function sendTo(string $phone): string
    {
        $otpCode = $this->generateFor($phone);

        $this->savePhoneToSession($phone);

        dispatch(new SendOTPSms($phone, $otpCode));

        return $otpCode;
    }


    /**
     * @throws InvalidOtpCodeException
     */
    public function verify(string $otpCode): string
    {
        $record = $this->findRecordByCode($otpCode);

        if (! $record || $record->phone !== $this->fetchPhoneFromSession()) {
            throw new InvalidOtpCodeException('کد وارد شده معتبر نیست و یا منقضی شده است');
        }

        $record->setAsVerified();

        return $record->phone;
    }

    /**
     * @throws CanNotResendOtpException
     */
    public function resend(string $phone): void
    {
        $record = $this->findRecordByPhone($phone);

        if ($record) {
            $time = intval(abs($record->created_at->diffInSeconds(now()->subMinutes(2))));
            throw new CanNotResendOtpException("برای ارسال مجدد کد تایید باید {$time} ثانیه صبر کنید");
        }

        $this->sendTo($phone);
    }


    private function generateFor(string $phone): int
    {
        $otpCode = rand(1000, 9999);

        Otp::create([
            'code' => $otpCode,
            'phone' => $phone,
            'status' => OtpStatus::PENDING
        ]);

        return $otpCode;
    }

    public function fetchPhoneFromSession(): ?string
    {
        return session($this->sessionName());
    }


    public function findRecordByCode(string $otpCode): ?Otp
    {
        return Otp::where('code', $otpCode)->where('status', OtpStatus::PENDING)->where('created_at', '>=', now()->subMinutes(self::EXPIRATION_MINUTES))->latest()->first();
    }

    public function findRecordByPhone(string $phone): ?Otp
    {
        return Otp::where('phone', $phone)->where('status', OtpStatus::PENDING)->where('created_at', '>=', now()->subMinutes(self::EXPIRATION_MINUTES))->latest()->first();
    }

    private function savePhoneToSession(string $phone): void
    {
        session()->put($this->sessionName(), $phone);
    }

    public function deletePhoneFromSession()
    {
        session()->remove($this->sessionName());
    }


    private function sessionName(): string
    {
        return 'temp_phone';
    }
}
