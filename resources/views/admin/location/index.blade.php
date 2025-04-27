<x-admin.layouts.main>
    <x-admin.breadcrumbs-list title="لوکیشن ها"></x-admin.breadcrumbs-list>
    <!-- Breadcrumb End -->

    <x-admin.ui.table>
        <x-slot:head>
            <x-admin.ui.table-head-item>نام</x-admin.ui.table-head-item>
            <x-admin.ui.table-head-item>نامک</x-admin.ui.table-head-item>
            <x-admin.ui.table-head-item>استان</x-admin.ui.table-head-item>
            <x-admin.ui.table-head-item>عملیات</x-admin.ui.table-head-item>
        </x-slot:head>

        @foreach($locations as $location)
            <tr>
                <x-admin.ui.table-item>{{ $location->title }}</x-admin.ui.table-item>
                <x-admin.ui.table-item>{{ $location->slug }}</x-admin.ui.table-item>
                <x-admin.ui.table-item>{{ $location->parent?->title ?: '---' }}</x-admin.ui.table-item>

                <x-admin.ui.table-actions-list :item="$location"></x-admin.ui.table-actions-list>
            </tr>
        @endforeach
    </x-admin.ui.table>

</x-admin.layouts.main>
