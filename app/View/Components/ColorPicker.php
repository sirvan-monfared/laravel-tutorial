<?php

namespace App\View\Components;

use App\Models\Color;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class ColorPicker extends Component
{
    public $colors;
    /**
     * Create a new component instance.
     */
    public function __construct(public ?Collection $currentColors)
    {
        $this->colors = Color::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.color-picker');
    }
}
