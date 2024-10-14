<?php

namespace App\Actions;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductCreate
{
    public static function handle(Request $request): Product
    {
        $product = Product::createNew($request->all());

        self::upload($request, $product);

        if ($request->colors) {
            $product->colors()->sync($request->colors);
        }

        return $product;
    }

    private static function upload(Request $request, Product $product)
    {
        foreach ($request->file('image') as $file) {
            $name = $file->store('/');

            $product->images()->create([
                'path' => $name
            ]);
        }
    }
}
