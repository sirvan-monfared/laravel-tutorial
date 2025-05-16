<?php

namespace App\Models;

use http\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Chat extends Model
{
    protected $keyType = 'string';
    public $incrementing = false;

    public $fillable = ['id', 'ad_id', 'host_id', 'guest_id'];

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
        return $this->hasMany(ChatMessage::class);
    }

    public function lastMessage(): HasOne
    {
        return $this->hasOne(ChatMessage::class)->latest('id');
    }

    public function otherUser(): User
    {
        return auth()->id() === $this->host_id ? $this->guest : $this->host;
    }
}
