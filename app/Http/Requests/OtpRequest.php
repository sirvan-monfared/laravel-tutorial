<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OtpRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'otp' => ['required', 'size:4']
        ];
    }
}
