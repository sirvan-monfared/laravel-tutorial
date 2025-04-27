<x-admin.ui.card class="col-span-8">
    <x-admin.form.form-group>
        <x-admin.form.input name="title" title="عنوان دسته" :half="true"
                            :value="$ad->title"/>

        <x-admin.form.input name="slug" title="نامک" :half="true" :value="$ad->slug"/>
    </x-admin.form.form-group>

    <x-admin.form.form-group>
        <div class="w-full xl:w-1/2">
            <x-front.forms.category-picker :value="$ad->category?->id"></x-front.forms.category-picker>
        </div>
        <div class="w-full xl:w-1/2">
            <x-front.forms.location-picker :value="$ad->location?->id"></x-front.forms.location-picker>
        </div>
    </x-admin.form.form-group>

    <x-admin.form.form-group>
        <x-admin.form.textarea name="description"
                               title="توضیحات آگهی">{!! $ad->description !!}</x-admin.form.textarea>
    </x-admin.form.form-group>

    <x-admin.form.form-group>
        <x-admin.form.input name="price" title="قیمت" :half="true" :value="$ad->price"/>
    </x-admin.form.form-group>
</x-admin.ui.card>

<div class="col-span-4">
    <x-admin.ui.card>
        <x-admin.form.select name="status" title="وضعیت">
            @foreach(\App\Enums\AdStatus::cases() as $status)
                <option value="{{ $status }}" @selected($status === $ad->status)>{{ $status->name() }}</option>
            @endforeach
        </x-admin.form.select>
    </x-admin.ui.card>

    <x-admin.ui.card class="mt-3">
        <h2 class="text-lg text-black">عکس آگهی</h2>

        <div class="mt-5 mb-5">
            <input type="file" name="images[]" class="filepond">
        </div>
    </x-admin.ui.card>
</div>

