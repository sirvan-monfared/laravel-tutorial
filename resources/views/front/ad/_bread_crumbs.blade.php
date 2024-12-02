<section
    class="container bg-white shadow-md py-5 px-4 border-t border-t-gray-100 lg:max-w-screen-lg mx-auto lg:my-4 lg:py-3">


    <div class="flex items-center justify-between">
        <div class="flex item-center gap-2 text-gray-500 text-xs font-medium">

            @if($ad->location->parent)
                <span>{{ $ad->location->parent->title }}</span>
                <x-front.icons.caret-left/>
            @endif

            @if($ad->location)
                <span>{{ $ad->location->title }}</span>
                <x-front.icons.caret-left/>
            @endif

            @if($ad->category->parent)
                <a href="{{ $ad->category->parent->viewLink() }}"><span>{{ $ad->category->parent->title }}</span></a>

                <x-front.icons.caret-left/>
            @endif

            @if($ad->category)
                <a href="{{ $ad->category->viewLink() }}"><span>{{ $ad->category->title }}</span></a>
            @endif

        </div>

        <div class="hidden lg:flex items-center justify-around gap-8 text-gray-700 text-sm">

            @if ($prev_ad)
                <a href="{{ $prev_ad->viewLink() }}" class="flex items-center hover:text-orange-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
                    </svg>

                    <span>قبلی</span>
                </a>
            @endif

            <a href="javascript:" onclick="history.back()" class="border-r border-l border-gray-200 px-7">
                بازگشت
            </a>
            @if($next_ad)
                <a href="{{ $next_ad->viewLink() }}" class="flex items-center hover:text-orange-500">
                    <span>بعدی</span>

                    <x-front.icons.caret-left/>
                </a>
            @endif
        </div>
    </div>


</section>
