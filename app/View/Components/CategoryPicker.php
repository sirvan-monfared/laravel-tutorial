<?php

namespace App\View\Components;

use App\Models\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CategoryPicker extends Component
{
    public $categories;
    /**
     * Create a new component instance.
     */
    public function __construct(public ?int $currentId)
    {
        $this->categories = Category::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.category-picker');
    }
}
