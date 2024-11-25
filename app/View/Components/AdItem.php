<?php

namespace App\View\Components;

use App\Models\Ad;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AdItem extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public Ad $ad, public bool $showStatus = false)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ad-item');
    }
}
