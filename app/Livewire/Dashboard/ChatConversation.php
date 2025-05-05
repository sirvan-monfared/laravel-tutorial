<?php

namespace App\Livewire\Dashboard;

use App\Models\Chat;
use App\Models\ChatService;
use Livewire\Component;

class ChatConversation extends Component
{
    public Chat $chat;
    public function mount()
    {
        $this->chat = ChatService::find('9efc6b82-05ca-46ee-b44a-cb246f4e8b68');


    }


    public function render()
    {
        return view('livewire.dashboard.chat-conversation');
    }
}
