<x-admin.layouts.main>

    <x-admin.breadcrumbs-list title="آگهی ها"></x-admin.breadcrumbs-list>
    <!-- Breadcrumb End -->


    <!-- ====== Table Section Start -->

    <x-admin.ui.table>
        <x-slot:head>
            <x-admin.ui.table-head-item>عنوان</x-admin.ui.table-head-item>
            <x-admin.ui.table-head-item>نامک</x-admin.ui.table-head-item>
            <x-admin.ui.table-head-item>گروه</x-admin.ui.table-head-item>
            <x-admin.ui.table-head-item>وضعیت</x-admin.ui.table-head-item>
            <x-admin.ui.table-head-item>عملیات</x-admin.ui.table-head-item>
        </x-slot:head>

        @foreach($ads as $ad)
            <tr>
                <x-admin.ui.table-item>{{ $ad->title }}</x-admin.ui.table-item>
                <x-admin.ui.table-item>{{ $ad->slug }}</x-admin.ui.table-item>
                <x-admin.ui.table-item>{{  $ad->category->title }}</x-admin.ui.table-item>
                <x-admin.ui.table-item>
                    <x-ad-status :status="$ad->status"></x-ad-status>
                </x-admin.ui.table-item>
                <x-admin.ui.table-actions-list :item="$ad"></x-admin.ui.table-actions-list>
            </tr>
        @endforeach
    </x-admin.ui.table>

    {!! $ads->links() !!}


</x-admin.layouts.main>
