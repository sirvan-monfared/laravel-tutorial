<?php

namespace App\Models;

use http\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Chat extends Model
{
    protected $keyType = 'string';
    public $incrementing = false;

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

    public function messages(): HasMany
    {
        return$this->hasMany(ChatMessage::class, 'chat_id', 'id');
    }
}
