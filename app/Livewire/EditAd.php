<?php

namespace App\Livewire;

use App\Exceptions\CreateAdException;
use App\Livewire\Forms\AdForm;
use App\Models\Ad;
use App\Services\AdService;
use Illuminate\Validation\Rule;
use Livewire\Component;

class EditAd extends Component
{
    public AdForm $form;
    public Ad $ad;

    public function mount(Ad $ad)
    {
        $this->ad = $ad;
        $this->form->title = $ad->title;
        $this->form->category_id = $ad->category_id;
        $this->form->location_id = $ad->location_id;
        $this->form->description = $ad->description;
        $this->form->price = $ad->price;
    }

    public function submit()
    {
        $validated = $this->validate();

        try {
            AdService::update($this->ad, $validated);
//            UploadService::forCreate($request->images, $ad);

            $this->form->setSuccessMessage();
        } catch (CreateAdException) {
            $this->form->setFailMessage();
        }
    }


    public function render()
    {
        return view('livewire.edit-ad');
    }
}
