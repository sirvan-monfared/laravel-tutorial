<article class="col-span-4 lg:col-span-1 bg-white shadow-sm rounded-md relative">

    @if($ad->special)
        <x-front.ribbon/>
    @endif

    <a href="{{ $ad->viewLink() }}" class="flex lg:flex-col gap-4 lg:gap-2 p-2">
        <div class="w-1/2 lg:w-full bg-gray-100">
            <img src="{{ $ad->featuredImageUrl() }}" class="rounded-md h-32 aspect-square md:h-40 lg:h-48 mx-auto"
                 alt="">
        </div>
        <div class="flex flex-col justify-between w-full lg:h-40">
            <div class="flex justify-between">
                <p class="text-lg lg:text-base lg:font-medium">{{ $ad->title }}</p>
            </div>
            <div>
                <p class="text-base pt-3 lg:text-sm text-gray-400">{{ $ad->price ? number_format($ad->price) . 'تومان ' : 'توافقی' }}</p>
                <p class="text-base pt-3 lg:text-xs text-gray-400">{{ $ad->category->parent->title }}
                    ، {{ $ad->category->title }} </p>

                <div class="flex item-center justify-between">
                    <p class="text-xs text-gray-400 mt-1">{{ $ad->location->parent->title }}
                        ، {{ $ad->location->title }}</p>
                    @if($showStatus)
                        <span
                            class="{{ $ad->status->cssClass() }} text-white py-1 px-2 rounded-lg text-xs">{{ $ad->status->name() }}</span>
                    @endif
                </div>
            </div>
        </div>
    </a>

    @if($showStatus)
        <div class="h-1 border-b border-dotted border-gray-300"></div>
        <div class="p-1 flex gap-2 items-center justify-between">
            <div class="flex gap-1">
                <a href="{{ route('dashboard.ad.edit', $ad) }}"
                   class="border border-gray-200 rounded-lg text-xs py-1 px-2 hover:bg-orange-400 hover:text-white">ویرایش</a>

                <form action="{{ route('dashboard.ad.destroy', $ad) }}" method="POST" class="delete-form">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            class="border border-gray-200 rounded-lg text-xs py-1 px-2 hover:bg-red-400 hover:text-white delete-button">
                        حذف
                    </button>
                </form>
            </div>

            <a href="{{ route('dashboard.invoice.show', $ad) }}"
               class="border border-gray-200 rounded-lg text-xs py-1 px-2 hover:bg-orange-400 hover:text-white">ارتقا به
                آگهی فوری</a>
        </div>
    @endif
</article>
