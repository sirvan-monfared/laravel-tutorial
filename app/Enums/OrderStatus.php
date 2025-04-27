<?php

namespace App\Enums;

enum OrderStatus: int
{
    case PENDING = 1;
    case PAID = 2;
    case CANCELED = 3;

    public function name()
    {
        return match($this) {
            self::PENDING => 'در انتظار پرداخت',
            self::PAID => 'پرداخت شده',
            self::CANCELED => 'پرداخت ناموفق',
        };
    }

    public function cssClass()
    {
        return match($this) {
            self::PENDING => 'bg-amber-500',
            self::PAID => 'bg-teal-500',
            self::CANCELED => 'bg-rose-500',
        };
    }
}
