<?php

namespace App\Http\Controllers;

use App\Enums\ProductStatus;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function show($slug)
    {
        $category = Category::bySlug($slug);

        abort_if(! $category, 404);

        $products = $category->products()->active()->get();

        return view('front.category.show', [
            'category' => $category,
            'products' => $products->map(fn($product) => $product->setRelation('category', $category))
        ]);
    }
}
