<?php

namespace App\Enums;

enum OrderStatus: int
{
    case PENDING = 1;
    case PAID = 2;
    case CANCELED = 3;
}
