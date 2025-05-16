<?php

namespace App\Livewire\Dashboard;

use App\Models\Chat;
use App\Models\ChatMessage;
use App\Models\ChatService;
use App\Services\ChatMessageService;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ChatConversation extends Component
{
    public ?Chat $chat = null;

    #[Validate('required')]
    public ?string $body = null;

    #[Url]
    public ?string $chatId = null;

    public function mount()
    {
        if ($this->chatId) {
            $this->chat = ChatService::find($this->chatId);
        }
    }

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

    public function send()
    {
        $this->validate();

        ChatMessageService::addMessageToChat($this->chat, auth()->user(), $this->body);

        $this->reset('body');
    }

    public function markAsRead(): void
    {
        ChatMessageService::markUnreadMessagesAsRead($this->chat, auth()->user());
    }


    public function render()
    {
        return view('livewire.dashboard.chat-conversation');
    }
}
