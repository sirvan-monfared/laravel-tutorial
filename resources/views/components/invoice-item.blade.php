@props(['order', 'showFooter' => true, 'backLink' => null])
<main class="mt-5 px-5 container lg:max-w-screen-lg mx-auto">
    <div class="mt-0 sm:max-w-lg sm:w-full m-3 sm:mx-auto">
        <div class="relative flex flex-col bg-white shadow-lg rounded-xl pointer-events-auto">
            <div @class([
                'relative overflow-hidden min-h-32 text-center rounded-t-xl',
                'bg-teal-500' => $order->isPaid(),
                'bg-rose-500' => ! $order->isPaid()
                ])>

                <!-- SVG Background Element -->
                <figure class="absolute inset-x-0 bottom-0 -mb-px">
                    <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                         viewBox="0 0 1920 100.1">
                        <path fill="currentColor" class="fill-white"
                              d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
                    </svg>
                </figure>
                <!-- End SVG Background Element -->
            </div>

            <div class="relative z-10 -mt-12">
                <!-- Icon -->
                <span
                    class="mx-auto flex justify-center items-center size-[62px] rounded-full border border-gray-200 bg-white text-gray-700 shadow-sm">
                      <svg class="shrink-0 size-6" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                           fill="currentColor"
                           viewBox="0 0 16 16">
                        <path
                            d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z"/>
                        <path
                            d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"/>
                      </svg>
                </span>
                <!-- End Icon -->
            </div>

            <!-- Body -->
            <div class="p-4 sm:p-7 overflow-y-auto">
                <div class="text-center">
                    <h3 id="hs-ai-modal-label" class="text-lg  text-gray-800">
                        @if($order->isPaid())
                            <p class="font-semibold"> پرداخت با موفقیت انجام شد</p>
                        @else
                            <p class="font-semibold">{{ $order->errors }}</p>
                            <p class="font-normal text-sm">مشکلی در عملیات پرداخت بوجود آمد</p>
                        @endif
                    </h3>
                    @if($order->reference_id)
                        <p class="text-sm text-gray-500">
                            کدرهگیری: {{ $order->reference_id }}
                        </p>
                    @endif
                </div>

                <!-- Grid -->
                <div class="mt-5 sm:mt-10 grid grid-cols-2 sm:grid-cols-3 gap-5">
                    <div>
                        <span class="block text-xs uppercase text-gray-500">هزینه سفارش</span>
                        <span class="block text-sm font-medium text-gray-800">{{ priceFormat($order->amount) }}</span>
                    </div>
                    <!-- End Col -->

                    <div>
                        <span class="block text-xs uppercase text-gray-500">تاریخ پرداخت</span>
                        <span
                            class="block text-sm font-medium text-gray-800">{{ $order->created_at->toJalali()->format('Y/m/d') }}</span>
                    </div>
                    <!-- End Col -->

                    <div>
                        <span class="block text-xs uppercase text-gray-500">درگاه پرداخت:</span>
                        <div class="flex items-center gap-x-2">
                            <svg class="size-5" width="400" height="248" viewBox="0 0 400 248" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0)">
                                    <path d="M254 220.8H146V26.4H254V220.8Z" fill="#FF5F00"/>
                                    <path
                                        d="M152.8 123.6C152.8 84.2 171.2 49 200 26.4C178.2 9.2 151.4 0 123.6 0C55.4 0 0 55.4 0 123.6C0 191.8 55.4 247.2 123.6 247.2C151.4 247.2 178.2 238 200 220.8C171.2 198.2 152.8 163 152.8 123.6Z"
                                        fill="#EB001B"/>
                                    <path
                                        d="M400 123.6C400 191.8 344.6 247.2 276.4 247.2C248.6 247.2 221.8 238 200 220.8C228.8 198.2 247.2 163 247.2 123.6C247.2 84.2 228.8 49 200 26.4C221.8 9.2 248.6 0 276.4 0C344.6 0 400 55.4 400 123.6Z"
                                        fill="#F79E1B"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0">
                                        <rect width="400" height="247.2" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                            <span class="block text-sm font-medium text-gray-800">{{ $order->gateway }}</span>
                        </div>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Grid -->

                <div class="mt-5 sm:mt-10">
                    <h4 class="text-xs font-semibold uppercase text-gray-800">خلاصه سفارش</h4>

                    <ul class="mt-3 flex flex-col">
                        <li class="inline-flex items-center gap-x-2 py-3 px-4 text-sm border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg">
                            <div class="flex items-center justify-between w-full">
                                <span>عنوان آگهی</span>
                                <span>{{ $order->ad?->title }}</span>
                            </div>
                        </li>
                        <li class="inline-flex items-center gap-x-2 py-3 px-4 text-sm border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg">
                            <div class="flex items-center justify-between w-full">
                                <span>پلان ویژه</span>
                                <span>{{ $order->description }}</span>
                            </div>
                        </li>
                        <li class="inline-flex items-center gap-x-2 py-3 px-4 text-sm font-semibold bg-gray-50 border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg">
                            <div class="flex items-center justify-between w-full">
                                <span>هزینه </span>
                                <span>{{ priceFormat($order->amount) }}</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Button -->
                <div class="mt-5 flex justify-end gap-x-2">
                    @if($backLink)
                    <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50"
                       href="{{ $backLink }}">
                       <x-mdi-keyboard-backspace class="rotate-180" />
                        بازگشت
                    </a>
                    @endif
                    <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                       href="#">
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 6 2 18 2 18 9"/>
                            <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/>
                            <rect width="12" height="8" x="6" y="14"/>
                        </svg>
                        چاپ
                    </a>
                </div>
                <!-- End Buttons -->
                @if($showFooter)
                    <div class="mt-5 sm:mt-10">
                        <p class="text-sm text-gray-500">در صورت وجود هرگونه مغایرت و یا اشتباه در صورتحساب فوق، لطفا از
                            طریق ایمیل <a
                                class="inline-flex items-center gap-x-1.5 text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium"
                                href="#">example@site.com</a> و یا شماره تماس <a
                                class="inline-flex items-center gap-x-1.5 text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium"
                                href="tel:09123456789">09123456789</a> با ما در ارتباط باشید</p>
                    </div>
                @endif
            </div>
            <!-- End Body -->
        </div>
    </div>

</main>
