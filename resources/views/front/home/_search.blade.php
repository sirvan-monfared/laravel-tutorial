<div class="mt-10 bg-white shadow-sm rounded-md">
    <div class="flex items-center p-4">
        <input type="text" class="flex-auto h-12 border border-gray-300 px-3 rounded-tr-md rounded-br-md"
               placeholder="جستجو...">

        <x-front.forms.simple-category-picker/>

        <x-front.forms.simple-location-picker/>

        <button
            class="h-12 border bg-gray-200 border-gray-300 px-3 flex items-center gap-2 rounded-tl-md rounded-bl-md">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                <path fill-rule="evenodd"
                      d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z"
                      clip-rule="evenodd"/>
            </svg>
            <span>جستجو</span>
        </button>
    </div>
</div>
