<?php

namespace App\Http\Controllers\Dashboard;

use App\Exceptions\CreateAdException;
use App\Http\Controllers\Controller;
use App\Http\Requests\SubmitAdRequest;
use App\Models\Ad;
use App\Services\AdService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class AdController extends Controller
{
    public function index()
    {
        return view('dashboard.ad.index', [
            'ads' => auth()->user()->ads
        ]);
    }

    public function edit($id)
    {
        $ad = AdService::findOrFail($id);

        Gate::authorize('update', $ad);

        return view('dashboard.ad.edit', [
            'ad' => $ad
        ]);
    }

    public function update(SubmitAdRequest $request, $id)
    {
        try {
            $ad = AdService::findOrFail($id);

            Gate::authorize('update', $ad);

            AdService::update($ad, $request->all());

            $this->handleUploadImages($ad, $request->images);

            session()->flash('success', 'عملیات با موفقیت انجام شد');

        } catch (CreateAdException) {
            session()->flash('fail', 'مشکلی در انجام عملیات پیش آمده است');
        }

        return back();
    }

    public function destroy($id)
    {
        try {
            $ad = AdService::findOrFail($id);

            Gate::authorize('delete', $ad);

            $ad->delete();
            session()->flash('success', 'عملیات با موفقیت انجام شد');
        } catch (Exception) {
            session()->flash('fail', 'مشکلی در انجام عملیات پیش آمده است');
        }

        return back();
    }

    /**
     * @param Ad $ad
     * @param SubmitAdRequest $request
     * @return void
     */
    private function handleUploadImages(Ad $ad, array $images): void
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
