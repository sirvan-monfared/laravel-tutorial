<x-admin.layouts.main>

    <x-admin.breadcrumbs-list title="ویرایش کاربر">
        <x-admin.breadcrumb-item :link="route('admin.user.index')">کاربرها</x-admin.breadcrumb-item>
    </x-admin.breadcrumbs-list>

    <x-admin.form.form  action="{{ route('admin.user.update', $user) }}" method="PUT" title="ویرایش کاربر">
        @include('admin.user._form')
    </x-admin.form.form>

</x-admin.layouts.main>
