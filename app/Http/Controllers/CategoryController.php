<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        $category->load(['children' => fn($q) => $q->withCount('ads')]);

        $ids = $category->children->pluck('id')->push($category->id);

        $ads = Ad::eagerList()->whereIn('category_id', $ids)->paginate();


        return view('front.category.show', [
            'category' => $category,
            'ads' => $ads
        ]);
    }
}
