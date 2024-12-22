<?php

namespace App\Models;

use App\Enums\AdStatus;
use App\Models\Scopes\AdActiveScope;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

#[ScopedBy(AdActiveScope::class)]
class Ad extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['title', 'slug', 'category_id', 'user_id', 'location_id', 'price', 'description', 'featured_image'];

    protected function casts(): array
    {
        return [
            'status' => AdStatus::class
        ];
    }


    public function scopeEagerList(Builder $query): Builder
    {
        return $query->with(['category.parent', 'location.parent']);
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }

    public function featuredImage(): HasOne
    {
        return $this->hasOne(Image::class)->orderBy('id', 'ASC');
    }

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }

    public function showPrice(): string
    {
        return priceFormat($this->price);
    }

    public function viewLink(): string
    {
        return route('front.ad.show', $this);
    }

    public function featuredImageUrl(): string
    {
        if (!$this->featuredImage || ! Storage::disk('upload')->exists($this->featuredImage->url)) {
            return Storage::disk('upload')->url('default.jpg');
        }

        return Storage::disk('upload')->url($this->featuredImage?->url);
    }

    public function imagesWithDefault()
    {
        return $this->images->count() > 0 ? $this->images : collect([new Image(['url' => 'default.jpg'])]);
    }
}
