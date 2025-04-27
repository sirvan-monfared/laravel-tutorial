<x-front.layouts.main>
    <form method="POST" action="{{ route('dashboard.payment.start', $ad) }}">
        @csrf

        <main class="container lg:max-w-screen-lg mx-auto bg-white p-10 mt-5 pb-3">
            <div class="flex flex-col items-center gap-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="size-12 stroke-teal-500">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M16.5 18.75h-9m9 0a3 3 0 0 1 3 3h-15a3 3 0 0 1 3-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 0 1-.982-3.172M9.497 14.25a7.454 7.454 0 0 0 .981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 0 0 7.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 0 0 2.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 0 1 2.916.52 6.003 6.003 0 0 1-5.395 4.972m0 0a6.726 6.726 0 0 1-2.749 1.35m0 0a6.772 6.772 0 0 1-3.044 0"/>
                </svg>

                <h1 class="text-2xl font-bold">ارتقای آگهی به پلان فوری</h1>
                <p>با پرداخت هزینه زیر میتوانید آگهی خود را به حالت فوری تغییر دهید و بازدیدکننده های آگهی خود را
                    چندبرابر
                    کنید</p>
            </div>


            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-8">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            عنوان آگهی
                        </th>
                        <th scope="col" class="px-6 py-3">
                            نوع درخواست
                        </th>
                        <th scope="col" class="px-6 py-3">
                            هزینه کل
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="bg-white dark:bg-gray-800">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $ad->title }}
                        </th>
                        <td class="px-6 py-4">
                            <div class="">
                                <span class="bg-teal-500 text-white py-1 px-2 rounded-xl">ارتقا به پلان فوری</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            {{  priceFormat(config('settings.payment.amount')) }}
                        </td>

                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="flex justify-end my-5">

                <button type="submit"
                        class="bg-blue-500 rounded-lg px-4 py-2 text-md text-white flex items-center hover:shadow-md cursor-pointer gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z"/>
                    </svg>

                    <span>  برو به درگاه پرداخت</span>

                </button>

            </div>
        </main>
    </form>
</x-front.layouts.main>
