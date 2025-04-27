<x-admin.layouts.main>

    <x-admin.breadcrumbs-list title="ویرایش لوکیشن">
        <x-admin.breadcrumb-item link="{{ route('admin.location.index') }}">لوکیشن ها</x-admin.breadcrumb-item>
    </x-admin.breadcrumbs-list>

    <x-admin.form.form action="{{ route('admin.location.update', $location) }}" title="ویرایش لوکیشن" method="PUT">
        @include('admin.location._form')
    </x-admin.form.form>
</x-admin.layouts.main>
