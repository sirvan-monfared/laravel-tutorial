<x-admin.layouts.main>

    <x-admin.breadcrumbs-list title="ویرایش دسته">
        <x-admin.breadcrumb-item link="{{ route('admin.category.index') }}">دسته ها</x-admin.breadcrumb-item>
    </x-admin.breadcrumbs-list>

    <x-admin.form.form action="{{ route('admin.category.update', $category) }}" title="ویرایش دسته" method="PUT">
        @include('admin.category._form')
    </x-admin.form.form>
</x-admin.layouts.main>
