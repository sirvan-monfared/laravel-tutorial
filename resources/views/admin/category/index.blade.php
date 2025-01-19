<x-admin.layouts.main>
    <x-admin.breadcrumbs-list title="دسته ها"></x-admin.breadcrumbs-list>
    <!-- Breadcrumb End -->

    <x-admin.ui.table>
        <x-slot:head>
            <x-admin.ui.table-head-item>نام</x-admin.ui.table-head-item>
            <x-admin.ui.table-head-item>نامک</x-admin.ui.table-head-item>
            <x-admin.ui.table-head-item>دسته مادر</x-admin.ui.table-head-item>
            <x-admin.ui.table-head-item>عملیات</x-admin.ui.table-head-item>
        </x-slot:head>

        @foreach($categories as $category)
            <tr>
                <x-admin.ui.table-item>{{ $category->title }}</x-admin.ui.table-item>
                <x-admin.ui.table-item>{{ $category->slug }}</x-admin.ui.table-item>
                <x-admin.ui.table-item>{{ $category->parent?->title ?: '---' }}</x-admin.ui.table-item>

                <x-admin.ui.table-actions-list :item="$category"></x-admin.ui.table-actions-list>
            </tr>
        @endforeach
    </x-admin.ui.table>

</x-admin.layouts.main>
