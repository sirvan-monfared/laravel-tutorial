<x-front.forms.input-modern name="title" title="عنوان آگهی" placeholder="عنوان آگهی را وارد کنید" :value="$ad->title"/>


<x-front.forms.category-picker :value="$ad->category_id"/>

<x-front.forms.location-picker :value="$ad->location_id"/>


<x-front.forms.textarea-modern name="description" title="توضیحات آگهی"
                               placeholder="توضیحات مناسبی برای آگهی تان وارد کنید">{{ $ad->description }}</x-front.forms.textarea-modern>

<x-front.forms.input-modern name="price" title="قیمت" :value="$ad->price"/>

<div class="lg:hidden">
    @if(request()->routeIs('front.ad.create'))

        <p class="text-gray-400 text-sm">با کلیک روی دکمه ثبت آگهی، موافقت خود را با
            <a href="#" class="text-blue-500">قوانین و شرایط استفاده</a>
            لاراپلاس اعلام می کنید.
        </p>
    @endif

    <button type="submit" class="bg-blue-500 text-white py-2 px-4 mt-3 rounded-md w-full">
        {{ $buttonText ?? 'ثبت آگهی' }}
    </button>
</div>
