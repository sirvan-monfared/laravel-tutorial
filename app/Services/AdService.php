<?php

namespace App\Services;

use App\Exceptions\CreateAdException;
use App\Models\Ad;
use Illuminate\Support\Str;

class AdService
{
    /**
     * @throws CreateAdException
     */
    public static function create(array $data)
    {
        try {
            $data['slug'] = Str::slug($data['title']);

            Ad::create($data);
        } catch (\Exception) {
            throw new CreateAdException();
        }

    }
}
