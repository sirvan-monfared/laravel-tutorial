<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Models\ChatService;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        return view('dashboard.chat.index', [
            'chats' => []
        ]);
    }

    public function store(Ad $ad)
    {
        if (auth()->id() === $ad->user_id) {
            return back();
        }

        $chat = ChatService::findUserChatWithAdId($ad, auth()->user());

        if (! $chat) {
            $chat = ChatService::create($ad, $ad->owner, auth()->user());
        }

        return redirect()->route('dashboard.chat.index', ['chatId' => $chat->id]);
    }
}
