<?php

namespace App\View\Components\Front\Forms;

use App\Models\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class CategoryPicker extends Component
{
    public Collection $categories;
    /**
     * Create a new component instance.
     */
    public function __construct(public ?int $value = null, public ?string $name = 'category_id', public ?bool $disabledDefault = true)
    {
        $this->categories = Category::with('children')->root()->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.front.forms.category-picker');
    }
}
