<?php

namespace App\Http\Controllers;

use App\Exceptions\CreateAdException;
use App\Http\Requests\SubmitAdRequest;
use App\Models\Ad;
use App\Models\Category;
use App\Models\Location;
use App\Services\AdService;

class AdController extends Controller
{
    public function show(Ad $ad)
    {
        return view('front.ad.show', [
            'ad' => $ad
        ]);
    }

    public function create()
    {
        return view('front.ad.create', [
            'categories' => Category::with('children')->root()->get(),
            'locations' => Location::with('children')->root()->get(),
        ]);
    }

    public function store(SubmitAdRequest $request)
    {
        try {
            AdService::create($request->validated());

            session()->flash('success', 'ثبت آگهی با موفقیت انجام شد');
        } catch (CreateAdException) {
            session()->flash('fail', 'مشکلی در انجام عملیات پیش آمده است');
        }

        return back();
    }
}
