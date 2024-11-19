<x-front.layouts.main>

    @include('front.ad._bread_crumbs')

    <section class="container lg:max-w-screen-lg mx-auto">
        <div class="flex item-start gap-2">
{{--          Right Panel  --}}
            <div>
                @include('front.ad.show._slider')

                <!-- description -->
                <section class="bg-white p-4 shadow-md">
                    <div class="flex flex-col gap-5">
                        <div class="flex items-center lg:justify-between">
                            <h1 class="text-xl text-black lg:font-medium"> {{ $ad->title }}
                            </h1>

                            <div class="hidden lg:flex iems-center justify-center gap-8">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M7.217 10.907a2.25 2.25 0 100 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186l9.566-5.314m-9.566 7.5l9.566 5.314m0 0a2.25 2.25 0 103.935 2.186 2.25 2.25 0 00-3.935-2.186zm0-12.814a2.25 2.25 0 103.933-2.185 2.25 2.25 0 00-3.933 2.185z"/>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3 lg:flex-row lg:items-center lg:justify-between">
                            <p class="text-xs text-gray-400 order-1 lg:order-2">
                                <span>{{ $ad->created_at->diffForHumans() }}، </span>
                                <span> {!! $ad->location->tree() !!} </span>
                            </p>
                            <p class="order-2 lg:order-1">
                                <strong class="font-bold text-lg text-black "> {!! $ad->showPrice() !!}</strong>
                            </p>
                        </div>
                    </div>
                    <ul class="mt-7 grid grid-cols-2 gap-4 lg:gap-y-4 lg:gap-x-6">
                        <li class="col-span-2 lg:col-span-1 flex items-center justify-between">
                            <div class="text-gray-400 font-medium">متراژ</div>
                            <div class="text-black font-bold">130</div>
                        </li>
                        <li class="col-span-2 lg:col-span-1 flex items-center justify-between">
                            <div class="text-gray-400 font-medium">نوع ملک</div>
                            <div class="text-black font-bold">آپارتمان</div>
                        </li>
                        <li class="col-span-2 lg:col-span-1 flex items-center justify-between">
                            <div class="text-gray-400 font-medium">تعداد اتاق</div>
                            <div class="text-black font-bold">2</div>
                        </li>
                        <li class="col-span-2 lg:col-span-1 flex items-center justify-between">
                            <div class="text-gray-400 font-medium">پارکینگ</div>
                            <div class="text-black font-bold">دارد</div>
                        </li>
                        <li class="col-span-2 lg:col-span-1 flex items-center justify-between">
                            <div class="text-gray-400 font-medium">آسانسور</div>
                            <div class="text-black font-bold">دارد</div>
                        </li>
                        <li class="col-span-2 lg:col-span-1 flex items-center justify-between">
                            <div class="text-gray-400 font-medium">سن بنا</div>
                            <div class="text-black font-bold">یک سال</div>
                        </li>
                        <li class="col-span-2 lg:col-span-1 flex items-center justify-between">
                            <div class="text-gray-400 font-medium">قیمت هر متر</div>
                            <div class="text-black font-bold">78,218,000</div>
                        </li>
                    </ul>


                    <div class="mt-8 text-gray-800" x-data="{open: false}">
                        <div class="max-h-44 overflow-hidden" :class="{'max-h-44 overflow-hidden': ! open}">
                            {!! $ad->description !!}
                        </div>

                        <div class="flex items-center justify-center">
                            <a href="#" class="text-orange-600 text-xs flex -items-center gap-2"
                               @click.prevent="open = ! open">
                                <span x-text="open ? 'نمایش کمتر' : 'نمایش بیشتر'">نمایش بیشتر</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-4 h-4"
                                     :class="{ 'rotate-180': open}">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="mt-5 flex items-center">
                        <span class="bg-gray-200 text-gray-400 rounded-full py-1 px-2 text-xs">خرید و فروش خانه و
                            آپارتمان در
                            بندرانزلی</span>
                        <span class="bg-gray-200 text-gray-400 rounded-full py-1 px-2 text-xs">خرید و فروش خانه و
                            آپارتمان در
                            بندرانزلی</span>
                    </div>
                </section>

                <!-- real estate -->
                @include('front.ad.show._agency')

                @include('front.ad.show._owner_info')

                @include('front.ad.show._related_ads')


            </div>


            <!-- left sidebar -->
            <div class="hidden lg:block lg:flex-1 lg:min-w-[20rem]">
                <div class="sticky top-2 bg-white shadow-md rounded-md p-5">
                    <div class="flex flex-col items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                             class="w-16 h-16 fill-gray-400">
                            <path fill-rule="evenodd"
                                  d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                  clip-rule="evenodd"/>
                        </svg>

                        <a class="text-blue-500 hover:text-orange-500 font-medium" href="#">{{ $ad->owner?->name }}</a>
                        <p class="text-sm text-gray-500">عضویت از {{ $ad->owner?->created_at->diffForHumans() }} </p>

                        <a href="#"
                           class="bg-blue-500 py-3 px-3 text-white font-medium w-full rounded-md text-center hover:shadow-xl hover:opacity-90">تماس
                            با آگهی دهنده</a>
                        <a href="#"
                           class="border-2 border-blue-500 py-3 px-3 text-center text-blue-500 hover:border-orange-500 hover:text-orange-500 font-medium w-full rounded-md">چت
                            با آگهی دهنده</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
</x-front.layouts.main>
