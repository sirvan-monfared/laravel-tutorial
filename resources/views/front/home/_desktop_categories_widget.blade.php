<div class="grid grid-cols-12 gap-x-2 gap-y-4">

    @foreach($categories->slice(0, 4) as $category)
        <div class="bg-white col-span-3 shadow-md p-3">
            <div class="flex items-start justify-between">
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                         class="w-7 h-7 fill-blue-500">
                        <path fill-rule="evenodd"
                              d="M3 2.25a.75.75 0 000 1.5v16.5h-.75a.75.75 0 000 1.5H15v-18a.75.75 0 000-1.5H3zM6.75 19.5v-2.25a.75.75 0 01.75-.75h3a.75.75 0 01.75.75v2.25a.75.75 0 01-.75.75h-3a.75.75 0 01-.75-.75zM6 6.75A.75.75 0 016.75 6h.75a.75.75 0 010 1.5h-.75A.75.75 0 016 6.75zM6.75 9a.75.75 0 000 1.5h.75a.75.75 0 000-1.5h-.75zM6 12.75a.75.75 0 01.75-.75h.75a.75.75 0 010 1.5h-.75a.75.75 0 01-.75-.75zM10.5 6a.75.75 0 000 1.5h.75a.75.75 0 000-1.5h-.75zm-.75 3.75A.75.75 0 0110.5 9h.75a.75.75 0 010 1.5h-.75a.75.75 0 01-.75-.75zM10.5 12a.75.75 0 000 1.5h.75a.75.75 0 000-1.5h-.75zM16.5 6.75v15h5.25a.75.75 0 000-1.5H21v-12a.75.75 0 000-1.5h-4.5zm1.5 4.5a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75h-.008a.75.75 0 01-.75-.75v-.008zm.75 2.25a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75v-.008a.75.75 0 00-.75-.75h-.008zM18 17.25a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75h-.008a.75.75 0 01-.75-.75v-.008z"
                              clip-rule="evenodd"/>
                    </svg>


                    <div class="text-xs font-semibold text-gray-500">
                        <a href="{{ $category->viewLink() }}" class="text-gray-700 hover:text-orange-500">{{ $category->title }}</a>
{{--                        <p class="text-xs mt-2">(154,200)</p>--}}
                    </div>
                </div>
                <a href="{{ $category->viewLink() }}" class="text-sm text-blue-500 hover:text-orange-500">مشاهده همه</a>
            </div>

            <div class="mt-6">

                <div class="flex items-center gap-2 flex-wrap">
                    @foreach($category->children as $subcategory)
                        <a href="{{ $subcategory->viewLink() }}"
                           class="border border-gray-300 rounded-full text-gray-500 text-xs hover:text-orange-500 hover:border-orange-500 py-1 px-2">{{ $subcategory->title }}</a>
                    @endforeach

                </div>
            </div>
        </div>
    @endforeach

    @foreach($categories->slice(4) as $category)
        <x-front.ui.simple-category :title="$category->title" :link="$category->viewLink()" />
    @endforeach

</div>
