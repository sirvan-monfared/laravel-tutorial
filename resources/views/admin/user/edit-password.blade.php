<x-admin.layouts.main>

    <x-admin.breadcrumbs-list title="تغییر رمزعبور">
        <x-admin.breadcrumb-item :link="route('admin.user.index')">کاربرها</x-admin.breadcrumb-item>
    </x-admin.breadcrumbs-list>

    <x-admin.form.form action="{{ route('admin.user.update-password', $user) }}" method="PUT" title="تغییر رمزعبور">

        <div class="col-span-3"></div>

        <x-admin.ui.card class="col-span-6 space-y-5">
            @if($isCurrentUser)
                <x-admin.form.input type="password" name="old_password" title="رمزعبور فعلی"/>
            @endif
            <x-admin.form.input type="password" name="password" title="رمزعبور جدید"/>
            <x-admin.form.input type="password" name="password_confirmation" title="تکرار رمزعبور جدید"/>
        </x-admin.ui.card>

        <div class="col-span-3"></div>

    </x-admin.form.form>

</x-admin.layouts.main>
