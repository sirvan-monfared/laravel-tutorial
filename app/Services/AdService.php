<?php

namespace App\Services;

use App\Enums\AdStatus;
use App\Exceptions\CreateAdException;
use App\Models\Ad;
use Illuminate\Support\Str;

class AdService
{
    public static function findOrFail($ad_id): Ad
    {
        return Ad::withoutGlobalScopes()->findOrFail($ad_id);
    }


    /**
     * @throws CreateAdException
     */
    public static function create(array $data): Ad
    {
        try {
            $data['slug'] = Str::slug($data['title']);

            $ad = auth()->user()->ads()->create($data);

            $ad->status = AdStatus::PENDING;
            $ad->save();

            return $ad;
        } catch (\Exception) {
            throw new CreateAdException();
        }
    }

    /**
     * @throws CreateAdException
     */
    public static function update(Ad $ad, array $data)
    {
        try {
            $ad->update($data);

            $ad->status = AdStatus::PENDING;
            $ad->save();
        } catch (\Exception) {
            throw new CreateAdException();
        }
    }
}
