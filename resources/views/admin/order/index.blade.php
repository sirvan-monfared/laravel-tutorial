<x-admin.layouts.main>
    <x-admin.breadcrumbs-list title="پرداخت ها"></x-admin.breadcrumbs-list>

    <x-admin.ui.table>
        <x-slot:head>
            <x-admin.ui.table-head-item>شناسه</x-admin.ui.table-head-item>
            <x-admin.ui.table-head-item>پرداخت کننده</x-admin.ui.table-head-item>
            <x-admin.ui.table-head-item>آگهی</x-admin.ui.table-head-item>
            <x-admin.ui.table-head-item>قیمت</x-admin.ui.table-head-item>
            <x-admin.ui.table-head-item>درگاه پرداخت</x-admin.ui.table-head-item>
            <x-admin.ui.table-head-item>وضعیت</x-admin.ui.table-head-item>
            <x-admin.ui.table-head-item>عملیات</x-admin.ui.table-head-item>
        </x-slot:head>

        @foreach($orders as $order)
            <tr>
                <x-admin.ui.table-item>{{ $order->id }}</x-admin.ui.table-item>
                <x-admin.ui.table-item>{{ $order->user?->name }}</x-admin.ui.table-item>
                <x-admin.ui.table-item><a href="{{ $order->ad?->viewLink() }}" class="text-blue-500 hover:text-blue-800 border-dashed border-b" target="_blank">{{ $order->ad?->title }}</a></x-admin.ui.table-item>
                <x-admin.ui.table-item>{{ priceFormat($order->amount) }}</x-admin.ui.table-item>
                <x-admin.ui.table-item>{{ $order->gateway }}</x-admin.ui.table-item>
                <x-admin.ui.table-item><span class="px-2 rounded-lg text-white text-xs {{ $order->status->cssClass() }}">{{ $order->status->name() }}</span></x-admin.ui.table-item>
                <x-admin.ui.table-actions-list :item="$order" :edit-link="false"></x-admin.ui.table-actions-list>
            </tr>
        @endforeach
    </x-admin.ui.table>

    {!! $orders->links() !!}

</x-admin.layouts.main>
