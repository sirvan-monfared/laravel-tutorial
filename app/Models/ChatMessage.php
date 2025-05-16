<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChatMessage extends Model
{
    public $fillable = ['chat_id', 'sender_id', 'message'];

    protected function casts(): array
    {
        return [
            'is_read' => 'boolean'
        ];
    }
}
