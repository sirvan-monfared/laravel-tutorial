<x-front.layouts.main>
    <section class="hidden lg:block mt-5 px-5 container lg:max-w-screen-lg mx-auto">

        @include('front.home._search')
    </section>

    <main class="mt-5 px-5 container lg:max-w-screen-lg mx-auto">
        @if($ads?->count() < 1)
            <div class="text-center text-2xl mt-24 mb-24">
                <h3>هیچ نتیجه ای برای جستجوی شما یافت نشد</h3>
            </div>
        @endif

        <div class="grid grid-cols-4 gap-y-3 gap-x-2">




            @foreach($ads as $ad)
                <x-ad-item :ad="$ad" />
            @endforeach

        </div>

        {!! $ads->withQueryString()->links() !!}

    </main>
</x-front.layouts.main>
