<?php

namespace App\Models;

use Str;

class ChatService
{
    public static function find(string $id)
    {
        return Chat::findOrFail($id);
    }

    public static function create(Ad $ad, User $host, User $guest): ?Chat
    {
        return Chat::create([
            'id' => Str::uuid(),
            'ad_id' => $ad->id,
            'host_id' => $host->id,
            'guest_id' => $guest->id
        ]);
    }

    public static function forUser(User $user)
    {
        return Chat::where('host_id', $user->id)->orWhere('guest_id', $user->id)->get();
    }
}
