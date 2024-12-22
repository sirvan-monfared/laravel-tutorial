<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;

class ImageUploadController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'images.*' => ['image', 'mimes:jpg,jpeg,png', 'max:1024']
        ]);

        $image = $request->file('images')[0];

        $imageName = $image->store();

        return response()->json([
            'name' => $imageName
        ]);
    }
}
