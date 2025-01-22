<?php

namespace App\Services;

use App\Models\Ad;
use Illuminate\Support\Facades\Storage;

class UploadService
{
    public static function forCreate(array $images, Ad $ad): void
    {
        $directory = date('Y') . '/' . date('m');
        foreach ($images as $image) {
            $imageName = json_decode($image)->name;


            Storage::disk('upload')->putFileAs($directory, Storage::path($imageName), $imageName);
            Storage::delete($imageName);

            $url = "$directory/$imageName";
            $ad->images()->create([
                'url' => $url
            ]);
        }
    }

    public static function forUpdate(array $images, Ad $ad): void
    {
        $ad->images()->delete();
        $directory = date('Y') . '/' . date('m');

        foreach ($images as $image) {

            if (!$image) continue;

            $imageName = json_decode($image)?->name;

            if (!$imageName) {
                $ad->images()->create([
                    'url' => $directory . '/' . basename($image)
                ]);
                continue;
            }

            Storage::disk('upload')->putFileAs($directory, Storage::path($imageName), $imageName);
            Storage::delete($imageName);

            $url = "$directory/$imageName";
            $ad->images()->create([
                'url' => $url
            ]);
        }
    }
}
