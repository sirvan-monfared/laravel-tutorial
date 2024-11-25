<x-front.layouts.main>

    <section class="hidden lg:block mt-5 px-5 container lg:max-w-screen-lg mx-auto">
        <h2 class="text-xl text-black">آگهی های من</h2>
    </section>

    <main class="mt-5 px-5 container lg:max-w-screen-lg mx-auto">
        <div class="grid grid-cols-4 gap-y-3 gap-x-2">
            @foreach($ads as $ad)
                <x-ad-item :ad="$ad" :show-status="true"/>
            @endforeach
        </div>

    </main>

    <!-- footer desktop -->
</x-front.layouts.main>
