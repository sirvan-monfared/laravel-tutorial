<?php

namespace App\Models;

use Database\Factories\LocationFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Location extends Model
{
    /** @use HasFactory<LocationFactory> */
    use HasFactory;

    protected $fillable = ['title', 'slug', 'parent_id'];

    public $timestamps = false;

    public function scopeRoot(Builder $query): Builder
    {
        return $query->whereNull('parent_id');
    }

    public function scopeHasParent(Builder $query)
    {
        return $query->whereNotNull('parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(Location::class, 'parent_id');
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Location::class, 'parent_id');
    }

    public function tree(): string
    {
        return $this->parent->title . "، " .$this->title;
    }

    public function viewLink(): string
    {
        return '';
//        return route('front.location.show', $this);
    }


    public function editLink(): string
    {
        return route('admin.location.edit', $this);
    }

    public function deleteLink(): string
    {
        return route('admin.location.destroy', $this);
    }
}
