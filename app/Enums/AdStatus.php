<?php

namespace App\Enums;

enum AdStatus: int
{
    case PENDING = 1;
    case ACTIVE = 2;
    case REJECTED = 3;


}
