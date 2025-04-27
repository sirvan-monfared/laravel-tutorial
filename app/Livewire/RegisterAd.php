<?php

namespace App\Livewire;

use App\Exceptions\CreateAdException;
use App\Livewire\Forms\AdForm;
use App\Services\AdService;
use Livewire\Component;

class RegisterAd extends Component
{
    public AdForm $form;

    public function submit()
    {
        $validated = $this->validate();

        try {

            AdService::create($validated);
            $this->form->reset();

//            UploadService::forCreate($request->images, $ad);

            $this->form->setSuccessMessage();
        } catch (CreateAdException) {
            $this->form->setFailMessage();
        }
    }

    public function resetForm(): void
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.register-ad');
    }
}
