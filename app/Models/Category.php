<?php

namespace App\Models;

use Database\Factories\CategoryFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['title', 'slug', 'parent_id', 'icon'];

    public function scopeRoot(Builder $query): Builder
    {
        return $query->whereNull('parent_id');
    }

    public function scopeHasParent(Builder $query): Builder
    {
        return $query->whereNotNull('parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function ads(): HasMany
    {
        return $this->hasMany(Ad::class);
    }

    public function tree(): string
    {
        return $this->parent->title. "، " .$this->title;
    }

    public function viewLink(): string
    {
        return route('front.category.show', $this);
    }


    public function editLink(): string
    {
        return route('admin.category.edit', $this);
    }

    public function deleteLink(): string
    {
        return route('admin.category.destroy', $this);
    }
}
