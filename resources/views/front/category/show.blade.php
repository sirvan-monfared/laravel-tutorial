<x-front.layouts.main>

    <section class="hidden lg:block mt-5 px-5 container lg:max-w-screen-lg mx-auto">
        <h2 class="text-xl text-black">{{ $category->title }}</h2>
    </section>

    <section class="hidden lg:block mt-10 px-5 container lg:max-w-screen-lg mx-auto">
        <div class="grid grid-cols-12 gap-x-2 gap-y-4">
            @foreach($category->children as $subcategory)
                <x-front.ui.simple-category :title="$subcategory->title" :link="$subcategory->viewLink()" :number="$subcategory->ads_count"/>
            @endforeach
        </div>
    </section>

    <main class="mt-5 px-5 container lg:max-w-screen-lg mx-auto">
        <div class="grid grid-cols-4 gap-y-3 gap-x-2">
            @foreach($ads as $ad)
                <x-ad-item :ad="$ad"/>
            @endforeach
        </div>

        {{ $ads->links() }}
    </main>

    <!-- footer desktop -->
</x-front.layouts.main>
