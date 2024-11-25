<?php

namespace App\Enums;

enum AdStatus: int
{
    case PENDING = 1;
    case ACTIVE = 2;
    case REJECTED = 3;

    public function name()
    {
        return match($this) {
            self::PENDING => 'در انتظار بررسی',
            self::ACTIVE => 'تایید شده',
            self::REJECTED => 'رد شده'
        };
    }

    public function cssClass()
    {
        return match($this) {
            self::PENDING => 'bg-amber-500',
            self::ACTIVE => 'bg-teal-500',
            self::REJECTED => 'bg-rose-500'
        };
    }
}
