<?php

namespace App\Enums;

enum OtpStatus: int
{
    case PENDING = 1;
    case VERIFIED = 2;
}
