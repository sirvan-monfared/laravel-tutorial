<?php

namespace App\View\Components;

use App\Services\Cart;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CartLink extends Component
{
    public int $count = 0;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->count = (new Cart())->count();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cart-link');
    }
}
