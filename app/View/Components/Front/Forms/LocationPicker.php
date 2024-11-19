<?php

namespace App\View\Components\Front\Forms;

use App\Models\Location;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class LocationPicker extends Component
{
    public Collection $locations;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->locations = Location::with('children')->root()->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.front.forms.location-picker');
    }
}
