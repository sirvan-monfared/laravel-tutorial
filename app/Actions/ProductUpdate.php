<?php

namespace App\Actions;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductUpdate
{
    public static function handle(Product $product, Request $request): Product
    {
        $product->revise($request->validated());

        self::handleImageUploadForUpdate($request, $product);

        $product->colors()->sync($request->colors);

        return $product;
    }

    private static function upload(Request $request, Product $product): void
    {
        foreach ($request->file('image') as $file) {
            $name = $file->store('/');

            $product->images()->create([
                'path' => $name
            ]);
        }
    }

    private static function handleImageUploadForUpdate(Request $request, Product $product): void
    {
        if ($request->file('image')) {

            foreach ($product->images as $image) {
                Storage::delete($image->path);
            }

            $product->images()->delete();

            self::upload($request, $product);
        }
    }
}
