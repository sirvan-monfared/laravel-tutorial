<?php

namespace App\Livewire\Dashboard;

use App\Models\Chat;
use App\Models\ChatService;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class ChatList extends Component
{
    public Collection $chats;

    public function mount()
    {
        $this->chats = ChatService::forUser(auth()->user());
    }

    public function chatClicked(string $id)
    {
        $this->dispatch('chat-clicked', id: $id);
    }

    public function render()
    {
        return view('livewire.dashboard.chat-list');
    }
}
