<?php

namespace App\Livewire;

use App\Models\Greet;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Greeter extends Component
{
    #[Validate('required', message: 'لطفا این فیلد و پر کن')]
    #[Validate('min:3', message: 'باید بیشتر از 2 کاراکتر باشه')]
    public $name = '';

    public $greeting = '';
    public $greetings = [];
    public $greetingMessage;


    public function mount()
    {
        $this->greetings = Greet::all();
        $this->greeting = $this->greetings->first()->greeting;
    }


    public function updatedName($value)
    {
        $this->name = strtolower($value);
    }

    public function submit()
    {
        $this->reset('greetingMessage');

        $this->validate();

        $this->greetingMessage = "$this->greeting, $this->name!";
    }

//    public function rules()
//    {
//        return [
//            'name' => ['required', 'min: 3']
//        ];
//    }


    public function render()
    {
        return view('livewire.greeter');
    }
}
