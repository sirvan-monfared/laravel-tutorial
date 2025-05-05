<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChatMessage extends Model
{
    protected function casts(): array
    {
        return [
            'is_read' => 'boolean'
        ];
    }
}
