<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Mobile implements ValidationRule
{

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $pattern = "/^09[012349]\d{8}$/";

        if (! preg_match($pattern, $value)) {
            $fail("شماره موبایل وارد شده معتبر نیست");
        }
    }
}
