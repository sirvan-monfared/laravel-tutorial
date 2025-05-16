<?php

namespace App\Services;

use App\Models\Chat;
use App\Models\ChatMessage;
use App\Models\User;

class ChatMessageService
{
    public static function addMessageToChat(Chat $chat, User $user, string $message): ChatMessage
    {
        return $chat->messages()->create([
            'sender_id' => $user->id,
            'message' => $message,
            'is_read' => false
        ]);
    }

    public static function markUnreadMessagesAsRead(Chat $chat, User $user): void
    {
        $chat->messages()
            ->where('sender_id', '!=', $user->id)
            ->where('is_read', false)
            ->update(['is_read' => true]);
    }
}
