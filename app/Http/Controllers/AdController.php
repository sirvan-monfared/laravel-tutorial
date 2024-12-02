<?php

namespace App\Http\Controllers;

use App\Exceptions\CreateAdException;
use App\Http\Requests\SubmitAdRequest;
use App\Models\Ad;
use App\Models\Category;
use App\Models\Location;
use App\Services\AdService;
use Illuminate\Support\Facades\Storage;

class AdController extends Controller
{
    public function show(Ad $ad)
    {
        return view('front.ad.show', [
            'ad' => $ad,
            'prev_ad' => Ad::where('id', '<', $ad->id)->orderBy('id', 'desc')->first(),
            'next_ad' => Ad::where('id', '>', $ad->id)->orderBy('id', 'asc')->first(),
        ]);
    }

    public function create()
    {
        return view('front.ad.create', [
            'ad' => new Ad
        ]);
    }

    public function store(SubmitAdRequest $request)
    {

        try {
            $ad = AdService::create($request->validated());

            foreach ($request->images as $image) {
                $imageName = json_decode($image)->name;

                $directory = date('Y') . '/' . date('m');

                Storage::disk('upload')->putFileAs($directory, Storage::path($imageName), $imageName);
                Storage::delete($imageName);

                $url = "$directory/$imageName";
                $ad->images()->create([
                    'url' => $url
                ]);
            }

            session()->flash('success', 'ثبت آگهی با موفقیت انجام شد');
        } catch (CreateAdException) {
            session()->flash('fail', 'مشکلی در انجام عملیات پیش آمده است');
        }

        return back();
    }
}
