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
        return Chat::with('lastMessage')->where('host_id', $user->id)->orWhere('guest_id', $user->id)->latest('created_at')->get();
    }

    public static function findUserChatWithAdId(Ad $ad, User $user): ?Chat
    {
        return Chat::where('ad_id', $ad->id)->where('guest_id', $user->id)->first();
    }

}
