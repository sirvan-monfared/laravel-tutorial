<x-front.layouts.main>
    <main class="container lg:max-w-screen-lg mx-auto bg-white p-10 mt-5 pb-3">
        <div class="flex flex-col gap-4">
            <h1 class="text-2xl font-bold">پرداخت های من</h1>
        </div>


        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-8">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        شناسه
                    </th>
                    <th scope="col" class="px-6 py-3">
                        عنوان آگهی
                    </th>
                    <th scope="col" class="px-6 py-3">
                        هزینه سفارش
                    </th>
                    <th scope="col" class="px-6 py-3">
                        تاریخ
                    </th>
                    <th scope="col" class="px-6 py-3">
                        وضعیت
                    </th>
                    <th scope="col" class="px-6 py-3">
                        مشاهده
                    </th>
                </tr>
                </thead>
                <tbody>
                @forelse($orders as $order)
                    <tr class="bg-white dark:bg-gray-800">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $order->id }}
                        </th>
                        <td class="px-6 py-4">
                            <a href="{{ $order->ad?->viewLink() }}" target="_blank"
                               class="text-sky-500 hover:text-amber-500 ">{{ $order->ad?->title }}</a>
                        </td>
                        <td class="px-6 py-4">
                            {{ priceFormat($order->amount) }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $order->created_at->toJalali()->format('Y/m/d ساعت H:i') }}
                        </td>
                        <td class="px-6 py-4">
                            <span
                                class="px-2 rounded-lg text-white text-xs {{ $order->status->cssClass() }}">{{ $order->status->name() }}</span>
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('dashboard.order.show', $order) }}"
                               class="flex items-center px-1 gap-2 border border-gray-300 hover:bg-gray-300">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                </svg>

                                <span>مشاهده</span>

                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">هیچ رکوردی یافت نشد</td>
                    </tr>
                @endforelse

                </tbody>
            </table>
        </div>
    </main>
</x-front.layouts.main>
