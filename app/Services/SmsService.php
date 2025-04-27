<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class SmsService
{
    private string $apiKey;
    private string $baseUrl;

    public function __construct(public string $to)
    {
        $this->apiKey = config('sms.api_key');
        $this->baseUrl = "https://api.kavenegar.com/v1/{$this->apiKey}/";
    }

    public function sendOTP(string $otpCode)
    {
        $url = $this->baseUrl . 'verify/lookup.json';

        return Http::withoutVerifying()->asForm()->post($url, [
            'receptor' => $this->to,
            'template' => config('sms.templates.login'),
            'token' => $otpCode
        ])->json();
    }
}

