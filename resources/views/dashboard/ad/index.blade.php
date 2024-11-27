<x-front.layouts.main>

    <section class="hidden lg:block mt-5 px-5 container lg:max-w-screen-lg mx-auto">
        <h2 class="text-xl text-black">آگهی های من</h2>
    </section>

    <main class="mt-5 px-5 container lg:max-w-screen-lg mx-auto min-h-72">
        <div class="grid grid-cols-4 gap-y-3 gap-x-2">
            @forelse($ads as $ad)
                <x-ad-item :ad="$ad" :show-status="true"/>
            @empty
                <div class="col-span-12 gap-3 flex flex-col justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-12">
                        <path fill-rule="evenodd"
                              d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75 0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 0 1-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 0 1 0-1.06Z"
                              clip-rule="evenodd"/>
                    </svg>

                    <p class="font-bold text-2xl">هنوز آگهی ثبت نکردی</p>
                </div>
            @endforelse
        </div>

    </main>

    <!-- footer desktop -->
</x-front.layouts.main>
