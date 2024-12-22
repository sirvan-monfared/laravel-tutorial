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
            @foreach($ads as $ad)
                <x-ad-item :ad="$ad" />
            @endforeach

        </div>

    </main>

    <!-- footer desktop -->
</x-front.layouts.main>
