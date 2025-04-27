<?php

namespace App\Jobs;

use App\Services\SmsService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class SendOTPSms implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(public string $phone, public string $otpCode)
    {

    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        (new SmsService($this->phone))->sendOTP($this->otpCode);
    }
}
