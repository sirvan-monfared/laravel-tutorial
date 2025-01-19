<x-admin.layouts.main>
    <x-admin.breadcrumbs-list title="ویرایش آگهی">
        <x-admin.breadcrumb-item :link="route('admin.ad.index')">آگهی ها</x-admin.breadcrumb-item>
    </x-admin.breadcrumbs-list>

    <x-admin.form.form action="{{ route('admin.ad.update', $ad) }}" title="ویرایش آگهی" method="PUT">
        @include('admin.ad._form')
    </x-admin.form.form>
</x-admin.layouts.main>
