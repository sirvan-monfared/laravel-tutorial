<?php

namespace App\Services;

use App\Enums\AdStatus;
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

            $ad = auth()->user()->ads()->create($data);

            $ad->status = AdStatus::PENDING;
            $ad->save();
        } catch (\Exception) {
            throw new CreateAdException();
        }

    }
}
