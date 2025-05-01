<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chat extends Model
{
    public $fillable = ['id', 'ad_id', 'host', 'guest'];

    public function ad(): BelongsTo
    {
        return $this->belongsTo(Ad::class);
    }

    public function host(): BelongsTo
    {
        return $this->belongsTo(User::class, 'host_id', 'id');
    }

    public function guest(): BelongsTo
    {
        return $this->belongsTo(User::class, 'guest_id', 'id');
    }
}
