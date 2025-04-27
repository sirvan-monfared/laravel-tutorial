<x-admin.layouts.main>

    <x-admin.breadcrumbs-list title="افزودن لوکیشن جدید">
        <x-admin.breadcrumb-item :link="route('admin.location.index')">لوکیشن ها</x-admin.breadcrumb-item>
    </x-admin.breadcrumbs-list>

    <x-admin.form.form action="{{ route('admin.location.store') }}" title="افزودن لوکیشن">
        @include('admin.location._form')
    </x-admin.form.form>

</x-admin.layouts.main>
