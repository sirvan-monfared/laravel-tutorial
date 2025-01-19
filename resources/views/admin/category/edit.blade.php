<x-admin.layouts.main>

    <x-admin.breadcrumbs-list title="ویرایش دسته">
        <x-admin.breadcrumb-item link="{{ route('admin.category.index') }}">دسته ها</x-admin.breadcrumb-item>
    </x-admin.breadcrumbs-list>


    <form action="{{ route('admin.category.update', $category) }}" method="POST">
        @csrf
        @method('PUT')

        @include('admin.category._form')
    </form>
</x-admin.layouts.main>
