<x-admin.layouts.main>

    <x-admin.breadcrumbs-list title="کاربران سایت"></x-admin.breadcrumbs-list>
    <!-- ====== Table Section Start -->

    <x-admin.ui.table>
        <x-slot:head>
            <x-admin.ui.table-head-item>نام</x-admin.ui.table-head-item>
            <x-admin.ui.table-head-item>ایمیل</x-admin.ui.table-head-item>
            <x-admin.ui.table-head-item>تاریخ ثبت نام</x-admin.ui.table-head-item>
            <x-admin.ui.table-head-item>عملیات</x-admin.ui.table-head-item>
        </x-slot:head>

        @foreach($users as $user)
            <tr>
                <x-admin.ui.table-item>{{ $user->name }}</x-admin.ui.table-item>
                <x-admin.ui.table-item>{{ $user->email }}</x-admin.ui.table-item>
                <x-admin.ui.table-item>{{ $user->created_at->toJalali()->format('Y/m/d') }}</x-admin.ui.table-item>

                <x-admin.ui.table-actions-list :item="$user" :view-link="false">
                    <x-admin.ui.table-action-item href="{{ route('admin.user.edit-password', $user) }}">
                        <x-mdi-lock-reset />
                    </x-admin.ui.table-action-item>
                </x-admin.ui.table-actions-list>
            </tr>
        @endforeach
    </x-admin.ui.table>

    {!! $users->links() !!}


</x-admin.layouts.main>
