<?php

namespace App\Services;

use App\Enums\AdStatus;
use App\Exceptions\CreateAdException;
use App\Models\Ad;
use App\Models\Scopes\AdActiveScope;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Str;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class AdService
{
    public static function findOrFail($ad_id): Ad
    {
        return Ad::withoutGlobalScopes()->findOrFail($ad_id);
    }

    public static function filter(): LengthAwarePaginator
    {
        return QueryBuilder::for(Ad::class)
            ->withoutGlobalScopes()
            ->allowedFilters([
                'title',
                AllowedFilter::exact('category_id'),
                AllowedFilter::exact('status')
            ])
            ->allowedSorts(['id', 'title', 'category_id', 'status'])
            ->defaultSort('-id')
            ->eagerList()
            ->paginate();
    }


    /**
     * @throws CreateAdException
     */
    public static function create(array $data, ?AdStatus $status = AdStatus::PENDING): Ad
    {
        try {
            $data['slug'] = Str::slug($data['title']);

            $ad = auth()->user()->ads()->create($data);

            $ad->status = $status;
            $ad->save();

            return $ad;
        } catch (\Exception) {
            throw new CreateAdException();
        }
    }

    /**
     * @throws CreateAdException
     */
    public static function update(Ad $ad, array $data, ?AdStatus $status = AdStatus::PENDING)
    {
        try {
            $ad->update($data);

            $ad->status = $status;
            $ad->save();
        } catch (\Exception) {
            throw new CreateAdException();
        }
    }

    public static function delete(Ad $ad): void
    {
        $ad->forceDelete();
    }
}
