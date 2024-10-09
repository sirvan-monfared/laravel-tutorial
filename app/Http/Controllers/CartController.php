<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class CartController extends Controller
{

    public function store(Request $request)
    {
        $product = Product::findOrFail($request->product_id);

        (new Cart())->addOrUpdateProduct($product, $request->integer('qty'), $request->integer('color_id'));

        return back()->with('success', 'Item Successfully Added to cart');
    }
}
