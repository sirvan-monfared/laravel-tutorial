<?php

if (!function_exists('priceFormat'))
{
    function priceFormat($amount): string
    {
        return number_format($amount) . " تومان ";
    }
}

