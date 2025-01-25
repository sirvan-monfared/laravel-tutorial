<x-admin.ui.card class="col-span-12">
    <x-admin.form.form-group>
        <x-admin.form.input name="title" title="عنوان دسته" :half="true"
                            :value="$category->title"/>

        <x-admin.form.input name="slug" title="نامک" :half="true" :value="$category->slug"/>
    </x-admin.form.form-group>


    <x-admin.form.select name="parent_id" title="دسته مادر">
        <option value="">انتخاب کنید</option>
        @foreach($categories as $parentCategory)
            <option
                value="{{ $parentCategory->id }}" @selected($category->parent_id === $parentCategory->id)>{{ $parentCategory->title }}</option>
        @endforeach
    </x-admin.form.select>

    <x-admin.form.form-group>
        <x-admin.form.input name="icon" title="آیکون" :half="true"
                            :value="$category->icon"/>

    </x-admin.form.form-group>
</x-admin.ui.card>
