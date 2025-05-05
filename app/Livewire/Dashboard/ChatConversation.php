<?php

namespace App\Livewire\Dashboard;

use App\Models\Chat;
use App\Models\ChatService;
use Livewire\Attributes\On;
use Livewire\Component;

class ChatConversation extends Component
{
    public ?Chat $chat = null;

    #[On('chat-clicked')]
    public function onChatSelected($id)
    {
        if (! $id) return null;

        $this->chat = ChatService::find($id);
    }

    public function back()
    {
        $this->chat = null;
    }


    public function render()
    {
        return view('livewire.dashboard.chat-conversation');
    }
}
