<div class="grid grid-cols-1 gap-9">




    <div class="flex flex-col gap-9">
        <!-- Contact Form -->
        <div
            class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
        >
            <div class="flex items-center justify-between border-b border-stroke px-6.5 py-4 dark:border-strokedark">
                <h3 class="font-medium text-black dark:text-white">
                    {{ request()->routeIs('admin.category.create') ? 'ساخت دسته' : 'ویرایش دسته' }}
                </h3>
                <x-admin.form.button type="submit">ذخیره</x-admin.form.button>
            </div>
            <form action="#">
                <div class="p-6.5">

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


                </div>
            </form>
        </div>
    </div>

</div>
