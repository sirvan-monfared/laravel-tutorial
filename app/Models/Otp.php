<?php

namespace App\Models;

use App\Enums\OtpStatus;
use Illuminate\Database\Eloquent\Model;

class Otp extends Model
{
    protected $fillable = ['code', 'phone', 'status'];

    protected function casts(): array
    {
        return [
            'status' => OtpStatus::class
        ];
    }

    public function setAsVerified(): void
    {
        $this->status = OtpStatus::VERIFIED;
        $this->save();
    }
}
