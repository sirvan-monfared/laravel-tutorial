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
                        <a href="#" class="text-gray-700 hover:text-orange-500">{{ $category->title }}</a>
                        <p class="text-xs mt-2">(154,200)</p>
                    </div>
                </div>
                <a href="#" class="text-sm text-blue-500 hover:text-orange-500">مشاهده همه</a>
            </div>

            <div class="mt-6">

                <div class="flex items-center gap-2 flex-wrap">
                    @foreach($category->children as $subcategory)
                        <a href="#"
                           class="border border-gray-300 rounded-full text-gray-500 text-xs hover:text-orange-500 hover:border-orange-500 py-1 px-2">{{ $subcategory->title }}</a>
                    @endforeach

                </div>
            </div>
        </div>
    @endforeach

    @foreach($categories->slice(4) as $category)
        <div class="bg-white col-span-2 shadow-md p-3">
            <div class="flex flex-col items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                     class="w-7 h-7 fill-pink-500">
                    <path
                        d="M5.223 2.25c-.497 0-.974.198-1.325.55l-1.3 1.298A3.75 3.75 0 007.5 9.75c.627.47 1.406.75 2.25.75.844 0 1.624-.28 2.25-.75.626.47 1.406.75 2.25.75.844 0 1.623-.28 2.25-.75a3.75 3.75 0 004.902-5.652l-1.3-1.299a1.875 1.875 0 00-1.325-.549H5.223z"/>
                    <path fill-rule="evenodd"
                          d="M3 20.25v-8.755c1.42.674 3.08.673 4.5 0A5.234 5.234 0 009.75 12c.804 0 1.568-.182 2.25-.506a5.234 5.234 0 002.25.506c.804 0 1.567-.182 2.25-.506 1.42.674 3.08.675 4.5.001v8.755h.75a.75.75 0 010 1.5H2.25a.75.75 0 010-1.5H3zm3-6a.75.75 0 01.75-.75h3a.75.75 0 01.75.75v3a.75.75 0 01-.75.75h-3a.75.75 0 01-.75-.75v-3zm8.25-.75a.75.75 0 00-.75.75v5.25c0 .414.336.75.75.75h3a.75.75 0 00.75-.75v-5.25a.75.75 0 00-.75-.75h-3z"
                          clip-rule="evenodd"/>
                </svg>

                <a href="#" class="text-gray-700 hover:text-orange-500 mt-1">{{ $category->title }}</a>
                <p class="text-xs mt-1">(154,200)</p>
            </div>
        </div>
    @endforeach

</div>
