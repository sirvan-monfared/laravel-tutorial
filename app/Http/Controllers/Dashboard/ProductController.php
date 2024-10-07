<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        return view('dashboard.product.create', [
            'categories' => Category::all()
        ]);
    }

    public function store(ProductRequest $request)
    {
        Product::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'short_description' => $request->short_description,
            'qty' => $request->qty,
            'sku' => $request->sku,
            'description' => $request->description,
        ]);

        return back()->with('success', 'Product Created Successfully');
    }
}
