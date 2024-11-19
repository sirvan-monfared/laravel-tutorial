<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ad extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'category_id', 'user_id', 'location_id', 'price', 'description', 'featured_image'];

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

    public function featuredImage(): string
    {
        return asset('images/items/'. rand(1, 9) .'.jpg');
    }

    public function viewLink(): string
    {
        return route('front.ad.show', $this);
    }


}
