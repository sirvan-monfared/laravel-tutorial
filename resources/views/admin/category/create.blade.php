<x-admin.layouts.main>

    <x-admin.breadcrumbs-list title="افزودن دسته جدید">
        <x-admin.breadcrumb-item :link="route('admin.category.index')">دسته بندی ها</x-admin.breadcrumb-item>
    </x-admin.breadcrumbs-list>

    <x-admin.form.form  action="{{ route('admin.category.store') }}" title="ساخت دسته">
        @include('admin.category._form')
    </x-admin.form.form>

</x-admin.layouts.main>
