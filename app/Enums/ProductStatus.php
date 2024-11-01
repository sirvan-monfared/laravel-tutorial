<?php

namespace App\Enums;

enum ProductStatus: int
{
    case DISABLED = 1;
    case ACTIVE = 2;

    public function name()
    {
        return match($this) {
            self::DISABLED => "<span class='alert alert-danger'>غیرفعال</span>",
            self::ACTIVE => "<span class='alert alert-success'>فعال</span>",
        };
    }
}
