<x-admin.layouts.main>
    <x-admin.breadcrumbs-list title="ثبت آگهی جدید">
        <x-admin.breadcrumb-item :link="route('admin.ad.index')">آگهی ها</x-admin.breadcrumb-item>
    </x-admin.breadcrumbs-list>

    <x-admin.form.form action="{{ route('admin.ad.store') }}" title="ثبت آگهی جدید">
        @include('admin.ad._form')
    </x-admin.form.form>
</x-admin.layouts.main>
