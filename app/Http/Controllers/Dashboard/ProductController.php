<?php

namespace App\Http\Controllers\Dashboard;

use App\Actions\ProductCreate;
use App\Actions\ProductUpdate;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Scopes\NewestScope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        Gate::authorize('viewAny', Product::class);

        $products = Product::when(
            ! auth()->user()->isAdmin(),
            fn (Builder $query) => $query->where('user_id', auth()->user()->id)
        )->withoutGlobalScopes()->get();


        return view('dashboard.product.index', [
            'products' => $products
        ]);
    }


    public function create()
    {
        Gate::authorize('create', Product::class);
        return view('dashboard.product.create', [
            'product' => new Product
        ]);
    }

    public function store(ProductRequest $request)
    {
        ProductCreate::handle($request);

        return back()->with('success', 'Product Created Successfully');
    }

    public function edit(Product $product)
    {
        Gate::authorize('update', $product);

        return view('dashboard.product.edit', [
            'product' => $product
        ]);
    }

    public function update($slug, ProductRequest $request)
    {
        $product = Product::bySlug($slug);

        abort_if(!$product, 404);

        ProductUpdate::handle($product, $request);

        return back()->with('success', 'Update Was Successful');
    }

    public function destroy($slug)
    {
        $product = Product::bySlug($slug);

        $product->delete();

        return back()->with('success', 'Operation was successful');
    }
}
