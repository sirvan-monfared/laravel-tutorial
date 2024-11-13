<x-front.layouts.main>

    <section class="hidden lg:block mt-5 px-5 container lg:max-w-screen-lg mx-auto">
        <h2 class="text-xl text-black">نیازمندیهای رایگان شیپور</h2>
        <p class="text-sm font-bold text-gray-800 mt-3">خرید و فروش خودرو، املاک، آپارتمان، گوشی موبایل، تبلت، لوازم
            خانگی، لوازم دست دوم، استخدام و هر چه فکر کنید!</p>

        @include('front.home._search')
    </section>

    <section class="hidden lg:block mt-10 px-5 container lg:max-w-screen-lg mx-auto">
        @include('front.home._desktop_categories_widget')
    </section>

    <section class="lg:hidden mt-5 px-5 container lg:max-w-screen-lg mx-auto">
        @include('front.home._mobile_categories_widget')
    </section>

    <main class="mt-5 px-5 container lg:max-w-screen-lg mx-auto">
        <div class="grid grid-cols-4 gap-y-3 gap-x-2">
            <article class="col-span-4 lg:col-span-1 bg-white shadow-sm rounded-md">
                <a href="single.html" class="flex lg:flex-col gap-4 lg:gap-2 p-2">
                    <div class="w-1/2 lg:w-full bg-gray-100">
                        <img src="images/items/1.jpg" class="rounded-md h-32 aspect-square md:h-40 lg:h-48 mx-auto"
                             alt="">
                    </div>
                    <div class="flex flex-col justify-between w-full lg:h-40">
                        <div class="flex justify-between">
                            <p class="text-lg lg:text-base lg:font-medium"> زمین 200 متری در دوراهی اوجی اباد </p>
                        </div>
                        <div>
                            <p class="text-base pt-3 lg:text-sm text-gray-400">قیمت توافقی</p>
                            <p class="text-xs text-gray-400 mt-1">مازندران، آمل، هرازپی</p>
                        </div>
                    </div>
                </a>
            </article>

            <article class="col-span-4 lg:col-span-1 bg-white shadow-sm rounded-md">
                <a href="single.html" class="flex lg:flex-col gap-4 lg:gap-2 p-2">
                    <div class="w-1/2 lg:w-full bg-gray-100">
                        <img src="images/items/2.jpg" class="rounded-md h-32 aspect-square md:h-40 lg:h-48 mx-auto"
                             alt="">
                    </div>
                    <div class="flex flex-col justify-between w-full lg:h-40">
                        <div class="flex justify-between">
                            <p class="text-lg lg:text-base lg:font-medium"> زمین 200 متری در دوراهی اوجی اباد </p>
                            <img class="lg:hidden"
                                 src="https://www.sheypoor.com/image/a67a26/44x37_Fa/shop_photos/25657/Image.webp?1678868833"
                                 alt="">
                        </div>
                        <div class="pt-3">
                            <div class="flex items-center gap-1">
                                <p class="text-base lg:text-base text-black font-semibold">40,000,000</p>
                                <span class="text-base text-gray-400">تومان</span>
                            </div>
                            <p class="text-xs text-gray-400 mt-1">مازندران، آمل، هرازپی</p>
                        </div>
                    </div>
                </a>
            </article>

            <article class="col-span-4 lg:col-span-1 bg-white shadow-sm rounded-md">
                <a href="single.html" class="flex lg:flex-col gap-4 lg:gap-2 p-2">
                    <div class="w-1/2 lg:w-full bg-gray-100">
                        <img src="images/items/3.jpg" class="rounded-md h-32 aspect-square md:h-40 lg:h-48 mx-auto"
                             alt="">
                    </div>
                    <div class="flex flex-col justify-between w-full lg:h-40">
                        <div class="flex justify-between">
                            <p class="text-lg lg:text-base lg:font-medium"> زمین 200 متری در دوراهی اوجی اباد </p>

                        </div>
                        <div>
                            <p class="text-base pt-3 lg:text-sm text-gray-400">قیمت توافقی</p>
                            <p class="text-xs text-gray-400 mt-1">مازندران، آمل، هرازپی</p>
                        </div>
                    </div>
                </a>
            </article>

            <article class="col-span-4 lg:col-span-1 bg-white shadow-sm rounded-md">
                <a href="single.html" class="flex lg:flex-col gap-4 lg:gap-2 p-2">
                    <div class="w-1/2 lg:w-full bg-gray-100">
                        <img src="images/items/4.jpg" class="rounded-md h-32 aspect-square md:h-40 lg:h-48 mx-auto"
                             alt="">
                    </div>
                    <div class="flex flex-col justify-between w-full lg:h-40">
                        <div class="flex justify-between">
                            <p class="text-lg lg:text-base lg:font-medium"> زمین 200 متری در دوراهی اوجی اباد </p>

                        </div>
                        <div>
                            <p class="text-base pt-3 lg:text-sm text-gray-400">قیمت توافقی</p>
                            <p class="text-xs text-gray-400 mt-1">مازندران، آمل، هرازپی</p>
                        </div>
                    </div>
                </a>
            </article>

            <article class="col-span-4 lg:col-span-1 bg-white shadow-sm rounded-md">
                <a href="single.html" class="flex lg:flex-col gap-4 lg:gap-2 p-2">
                    <div class="w-1/2 lg:w-full bg-gray-100">
                        <img src="images/items/5.jpg" class="rounded-md h-32 aspect-square md:h-40 lg:h-48 mx-auto"
                             alt="">
                    </div>
                    <div class="flex flex-col justify-between w-full lg:h-40">
                        <div class="flex justify-between">
                            <p class="text-lg lg:text-base lg:font-medium"> زمین 200 متری در دوراهی اوجی اباد </p>

                        </div>
                        <div>
                            <p class="text-base pt-3 lg:text-sm text-gray-400">قیمت توافقی</p>
                            <p class="text-xs text-gray-400 mt-1">مازندران، آمل، هرازپی</p>
                        </div>
                    </div>
                </a>
            </article>

            <article class="col-span-4 lg:col-span-1 bg-white shadow-sm rounded-md">
                <a href="single.html" class="flex lg:flex-col gap-4 lg:gap-2 p-2">
                    <div class="w-1/2 lg:w-full bg-gray-100">
                        <img src="images/items/6.jpg" class="rounded-md h-32 aspect-square md:h-40 lg:h-48 mx-auto"
                             alt="">
                    </div>
                    <div class="flex flex-col justify-between w-full lg:h-40">
                        <div class="flex justify-between">
                            <p class="text-lg lg:text-base lg:font-medium"> زمین 200 متری در دوراهی اوجی اباد </p>

                        </div>
                        <div>
                            <p class="text-base pt-3 lg:text-sm text-gray-400">قیمت توافقی</p>
                            <p class="text-xs text-gray-400 mt-1">مازندران، آمل، هرازپی</p>
                        </div>
                    </div>
                </a>
            </article>

            <article class="col-span-4 lg:col-span-1 bg-white shadow-sm rounded-md">
                <a href="single.html" class="flex lg:flex-col gap-4 lg:gap-2 p-2">
                    <div class="w-1/2 lg:w-full bg-gray-100">
                        <img src="images/items/7.jpg" class="rounded-md h-32 aspect-square md:h-40 lg:h-48 mx-auto"
                             alt="">
                    </div>
                    <div class="flex flex-col justify-between w-full lg:h-40">
                        <div class="flex justify-between">
                            <p class="text-lg lg:text-base lg:font-medium"> زمین 200 متری در دوراهی اوجی اباد </p>

                        </div>
                        <div>
                            <p class="text-base pt-3 lg:text-sm text-gray-400">قیمت توافقی</p>
                            <p class="text-xs text-gray-400 mt-1">مازندران، آمل، هرازپی</p>
                        </div>
                    </div>
                </a>
            </article>

            <article class="col-span-4 lg:col-span-1 bg-white shadow-sm rounded-md">
                <a href="single.html" class="flex lg:flex-col gap-4 lg:gap-2 p-2">
                    <div class="w-1/2 lg:w-full bg-gray-100">
                        <img src="images/items/8.jpg" class="rounded-md h-32 aspect-square md:h-40 lg:h-48 mx-auto"
                             alt="">
                    </div>
                    <div class="flex flex-col justify-between w-full lg:h-40">
                        <div class="flex justify-between">
                            <p class="text-lg lg:text-base lg:font-medium"> زمین 200 متری در دوراهی اوجی اباد </p>

                        </div>
                        <div>
                            <p class="text-base pt-3 lg:text-sm text-gray-400">قیمت توافقی</p>
                            <p class="text-xs text-gray-400 mt-1">مازندران، آمل، هرازپی</p>
                        </div>
                    </div>
                </a>
            </article>
        </div>

    </main>

    <!-- footer desktop -->
</x-front.layouts.main>
