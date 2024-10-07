<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('dashboard.product.index', [
            'products' => Product::all()
        ]);
    }


    public function create()
    {
        return view('dashboard.product.create', [
            'product' => new Product
        ]);
    }

    public function store(ProductRequest $request)
    {
        $product = Product::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'short_description' => $request->short_description,
            'qty' => $request->qty,
            'sku' => $request->sku,
            'description' => $request->description,
        ]);

        if ($request->colors) {
            $product->colors()->sync($request->colors);
        }

        return back()->with('success', 'Product Created Successfully');
    }

    public function edit($slug)
    {
        $product = Product::bySlug($slug);

        abort_if(! $product, 404);

        return  view('dashboard.product.edit', [
            'product' => $product
        ]);
    }

    public function update($slug, ProductRequest $request)
    {
        $product = Product::bySlug($slug);

        abort_if(! $product, 404);

        $product->update($request->validated());

        $product->colors()->sync($request->colors);

        return back()->with('success', 'Update Was Successful');
    }

    public function destroy($slug)
    {
        $product =  Product::bySlug($slug);

        $product->delete();

        return back()->with('success', 'Operation was successful');
    }
}
