<?php

namespace App\Models;

use Database\Factories\CategoryFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    /** @use HasFactory<CategoryFactory> */
    use HasFactory;

    protected $fillable = ['title', 'slug'];


    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }


    public static function bySlug($slug): ?Category
    {
        return static::where('slug', $slug)->first();
    }

    public function viewLink(): string
    {
        return route('front.category.show', $this->slug);
    }
}
