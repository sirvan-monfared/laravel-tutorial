<x-front.forms.input-modern name="form.title" title="عنوان آگهی" placeholder="عنوان آگهی را وارد کنید" wire:model="form.title" />


<x-front.forms.category-picker name="form.category_id" wire:model="form.category_id"/>

<x-front.forms.location-picker name="form.location_id" wire:model="form.location_id" value="235325"/>


<x-front.forms.textarea-modern name="form.description" title="توضیحات آگهی" wire:model="form.description"
                               placeholder="توضیحات مناسبی برای آگهی تان وارد کنید"></x-front.forms.textarea-modern>

<x-front.forms.input-modern name="form.price" title="قیمت" wire:model="form.price"/>

<div class="lg:hidden">

    <p class="text-gray-400 text-sm">با کلیک روی دکمه ثبت آگهی، موافقت خود را با
        <a href="#" class="text-blue-500">قوانین و شرایط استفاده</a>
        لاراپلاس اعلام می کنید.
    </p>

    <button type="submit" class="bg-blue-500 text-white py-2 px-4 mt-3 rounded-md w-full">
        {{ $buttonText ?? 'ثبت آگهی' }}
    </button>
</div>
