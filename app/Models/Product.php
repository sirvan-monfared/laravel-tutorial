<?php

namespace App\Models;

use App\Enums\ProductStatus;
use App\Models\Scopes\NewestScope;
use Database\Factories\ProductFactory;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

#[ScopedBy(NewestScope::class)]
class Product extends Model
{
    /** @use HasFactory<ProductFactory> */
    use HasFactory;

    protected $guarded = [];

    public function casts(): array
    {
        return [
            'status' => ProductStatus::class
        ];
    }

    public function scopeActive(Builder $q)
    {
        return $q->where('status', ProductStatus::ACTIVE);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function colors(): BelongsToMany
    {
        return $this->belongsToMany(Color::class)->withTimestamps();
    }

    public function image(): HasOne
    {
        return $this->hasOne(Image::class)->orderBy('id', 'DESC');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }

    public function featuredImage()
    {

        return $this->image?->url() ?? asset('assets/images/default.jpg');
    }

    public function showPrice(): string
    {
        return '$' . number_format($this->price);
    }

    public static function bySlug(string $slug): ?Product
    {
        return static::where('slug', $slug)->first();
    }

    public static function createNew(array $data)
    {
        return Product::create([
            'title' => $data['title'],
            'slug' => $data['slug'],
            'category_id' => $data['category_id'],
            'price' => $data['price'],
            'short_description' => $data['short_description'],
            'qty' => $data['qty'],
            'sku' => $data['sku'],
            'description' => $data['description']
        ]);
    }

    public function revise(array $data): bool
    {
        return $this->update([
            'title' => $data['title'],
            'slug' => $data['slug'],
            'category_id' => $data['category_id'],
            'price' => $data['price'],
            'short_description' => $data['short_description'],
            'qty' => $data['qty'],
            'sku' => $data['sku'],
            'description' => $data['description']
        ]);
    }


}
