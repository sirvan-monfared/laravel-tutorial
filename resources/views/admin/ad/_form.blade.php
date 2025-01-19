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
        <x-front.forms.location-picker  :value="$ad->location?->id"></x-front.forms.location-picker>
    </div>
</x-admin.form.form-group>

<x-admin.form.form-group>
    <x-admin.form.textarea name="description" title="توضیحات آگهی">{!! $ad->description !!}</x-admin.form.textarea>
</x-admin.form.form-group>

<x-admin.form.form-group>
    <x-admin.form.input name="price" title="قیمت" :half="true" :value="$ad->price"/>
</x-admin.form.form-group>



