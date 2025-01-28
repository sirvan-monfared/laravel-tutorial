<?php

namespace App\Http\Controllers\Admin;

use App\Enums\AdStatus;
use App\Exceptions\CreateAdException;
use App\Http\Controllers\Controller;
use App\Http\Requests\SubmitAdRequest;
use App\Models\Ad;
use App\Models\Scopes\AdActiveScope;
use App\Services\AdService;
use App\Services\UploadService;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class AdController extends Controller
{
    public function index()
    {
        return view('admin.ad.index', [
            'ads' => AdService::filter()
        ]);
    }

    public function create()
    {
        return view('admin.ad.create', [
            'ad' => new Ad
        ]);
    }

    public function store(SubmitAdRequest $request)
    {
        try {
            $status = $request->enum('status', AdStatus::class);
            $ad = AdService::create($request->validated(), $status);

            UploadService::forCreate($request->images, $ad);

            return redirect()->to($ad->editLink())->with(['success' => 'ثبت آگهی با موفقیت انجام شد']);
        }catch(CreateAdException $e) {
            return back()->with(['danger' => 'مشکلی در عملیات بوجود آمده است']);
        }

    }

    public function edit(int $id)
    {
        $ad = AdService::findOrFail($id);

        return view('admin.ad.edit', [
            'ad' => $ad
        ]);
    }

    public function update(int $id, SubmitAdRequest $request)
    {
        $ad = AdService::findOrFail($id);

        $status = $request->enum('status', AdStatus::class);
        AdService::update($ad, $request->validated(), $status);

        UploadService::forUpdate($request->images, $ad);

        return back()->with(['success' => 'ویرایش با موفقیت انجام شد']);
    }

    public function destroy(int $id)
    {
        $ad = AdService::findOrFail($id);

        AdService::delete($ad);

        return back()->with(['success' => 'عملیات حذف با موفقیت انجام شد']);
    }
}
