<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    protected $fillable = ['ad_id', 'url'];

    public function url(): string
    {
         return Storage::disk('upload')->url($this->url);
    }
}
