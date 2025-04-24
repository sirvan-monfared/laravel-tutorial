<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Search extends Component
{
    #[Validate('required')]
    public $keyword = '';
    public $posts = [];

    public function updatedKeyword()
    {
        $this->reset('posts');

        $this->validate();

         $this->posts = Post::where('title', 'LIKE', "%$this->keyword%")->get();
    }

    public function clear()
    {
        $this->reset('keyword', 'posts');
    }

    public function render()
    {
        return view('livewire.search');
    }
}
