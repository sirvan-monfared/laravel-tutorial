<section class="mt-3 px-2">
    <div class="bg-white shadow-md rounded-md p-3">
        <div class="flex items-center justify-between">
            <div class="flex items-start gap-3">
                <img class="w-12 h-12 rounded-full"
                     src="https://www.sheypoor.com/image/fb9370/110x110_af/users/4859/48597652_profile.jpg?1682109084"
                     alt="">
                <div>
                    <p class="text-blue-500 text-lg font-semibold">
                        مشاور این آگهی
                        <a href="#" class="text-blue-500 font-medium hover:text-orange-500"> {{ $ad->owner?->name }}</a>
                    </p>
                    <p class="text-xs text-gray-400 mt-2">عضو شیپور از {{ $ad->owner->created_at->format('M Y') }}</p>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                 class="w-4 h-4">
                <path fill-rule="evenodd"
                      d="M7.72 12.53a.75.75 0 010-1.06l7.5-7.5a.75.75 0 111.06 1.06L9.31 12l6.97 6.97a.75.75 0 11-1.06 1.06l-7.5-7.5z"
                      clip-rule="evenodd"/>
            </svg>

        </div>


        <div class="mt-10 ">
            <div class="flex items-center gap-3">
                <div class="bg-gray-500 w-12 h-12 rounded-md flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5"/>
                    </svg>
                </div>

                <input type="text"
                       class="px-10 h-12 border border-gray-300 w-full rounded-md focus:border-blue-400 placeholder-gray-400 text-sm"
                       placeholder="به آگهی کننده پیام دهید ...">
            </div>

        </div>

        <div class="mt-3 flex items-center">
                            <span class="bg-gray-200 text-gray-400 rounded-full py-1 px-2 text-xs">آدرس دقیق کجاست؟
                            </span>
            <span class="bg-gray-200 text-gray-400 rounded-full py-1 px-2 text-xs">امکان بازدید
                                هست؟</span>
            <span class="bg-gray-200 text-gray-400 rounded-full py-1 px-2 text-xs">قیمت چنده؟</span>
            <span class="bg-gray-200 text-gray-400 rounded-full py-1 px-2 text-xs">تخفیف داره؟ </span>
        </div>
    </div>
</section>
