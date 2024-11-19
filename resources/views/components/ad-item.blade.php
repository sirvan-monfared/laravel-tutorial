<article class="col-span-4 lg:col-span-1 bg-white shadow-sm rounded-md">
    <a href="{{ $ad->viewLink() }}" class="flex lg:flex-col gap-4 lg:gap-2 p-2">
        <div class="w-1/2 lg:w-full bg-gray-100">
            <img src="{{ $ad->featuredImage() }}" class="rounded-md h-32 aspect-square md:h-40 lg:h-48 mx-auto"
                 alt="">
        </div>
        <div class="flex flex-col justify-between w-full lg:h-40">
            <div class="flex justify-between">
                <p class="text-lg lg:text-base lg:font-medium">{{ $ad->title }}</p>
            </div>
            <div>
                <p class="text-base pt-3 lg:text-sm text-gray-400">{{ $ad->price ? number_format($ad->price) . 'تومان ' : 'توافقی' }}</p>
                <p class="text-base pt-3 lg:text-sm text-gray-400">{{ $ad->category->parent->title }}
                    ، {{ $ad->category->title }} </p>
                <p class="text-xs text-gray-400 mt-1">{{ $ad->location->parent->title }}، {{ $ad->location->title }}</p>
            </div>
        </div>
    </a>
</article>
