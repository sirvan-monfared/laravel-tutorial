<div class="bg-white shadow-md rounded-md p-3 mt-3">
    <h2 class="text-lg text-black">عکس آگهی</h2>

    <div class="flex items-center gap-2 mt-3 relative">
        <input type="file" class="absolute w-full h-full opacity-0">
        <div
            class="border-2 border-dashed border-blue-400 text-blue-500 aspect-square flex-1 flex flex-col items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke-width="1.5"
                 stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/>
            </svg>
            <span class="text-xs">افزودن عکس</span>
        </div>

        <div
            class="border border-dashed border-gray-400 aspect-square flex-1 flex flex-col items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                 class="w-6 h-6 fill-gray-500">
                <path d="M12 9a3.75 3.75 0 100 7.5A3.75 3.75 0 0012 9z"/>
                <path fill-rule="evenodd"
                      d="M9.344 3.071a49.52 49.52 0 015.312 0c.967.052 1.83.585 2.332 1.39l.821 1.317c.24.383.645.643 1.11.71.386.054.77.113 1.152.177 1.432.239 2.429 1.493 2.429 2.909V18a3 3 0 01-3 3h-15a3 3 0 01-3-3V9.574c0-1.416.997-2.67 2.429-2.909.382-.064.766-.123 1.151-.178a1.56 1.56 0 001.11-.71l.822-1.315a2.942 2.942 0 012.332-1.39zM6.75 12.75a5.25 5.25 0 1110.5 0 5.25 5.25 0 01-10.5 0zm12-1.5a.75.75 0 100-1.5.75.75 0 000 1.5z"
                      clip-rule="evenodd"/>
            </svg>

        </div>
        <div
            class="border border-dashed border-gray-400 aspect-square flex-1 flex flex-col items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                 class="w-6 h-6 fill-gray-500">
                <path d="M12 9a3.75 3.75 0 100 7.5A3.75 3.75 0 0012 9z"/>
                <path fill-rule="evenodd"
                      d="M9.344 3.071a49.52 49.52 0 015.312 0c.967.052 1.83.585 2.332 1.39l.821 1.317c.24.383.645.643 1.11.71.386.054.77.113 1.152.177 1.432.239 2.429 1.493 2.429 2.909V18a3 3 0 01-3 3h-15a3 3 0 01-3-3V9.574c0-1.416.997-2.67 2.429-2.909.382-.064.766-.123 1.151-.178a1.56 1.56 0 001.11-.71l.822-1.315a2.942 2.942 0 012.332-1.39zM6.75 12.75a5.25 5.25 0 1110.5 0 5.25 5.25 0 01-10.5 0zm12-1.5a.75.75 0 100-1.5.75.75 0 000 1.5z"
                      clip-rule="evenodd"/>
            </svg>

        </div>
        <div
            class="border border-dashed border-gray-400 aspect-square flex-1 flex flex-col items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                 class="w-6 h-6 fill-gray-500">
                <path d="M12 9a3.75 3.75 0 100 7.5A3.75 3.75 0 0012 9z"/>
                <path fill-rule="evenodd"
                      d="M9.344 3.071a49.52 49.52 0 015.312 0c.967.052 1.83.585 2.332 1.39l.821 1.317c.24.383.645.643 1.11.71.386.054.77.113 1.152.177 1.432.239 2.429 1.493 2.429 2.909V18a3 3 0 01-3 3h-15a3 3 0 01-3-3V9.574c0-1.416.997-2.67 2.429-2.909.382-.064.766-.123 1.151-.178a1.56 1.56 0 001.11-.71l.822-1.315a2.942 2.942 0 012.332-1.39zM6.75 12.75a5.25 5.25 0 1110.5 0 5.25 5.25 0 01-10.5 0zm12-1.5a.75.75 0 100-1.5.75.75 0 000 1.5z"
                      clip-rule="evenodd"/>
            </svg>

        </div>
    </div>

    <p class="text-black text-base mt-7">
        یک تصویر بهتر از هزار کلمه. با قرار دادن عکس شانس دیده شدن آگهی‌تان
        را ۵ برابر کنید.</p>

    <img class="hidden lg:block lg:translate-y-3" src="{{ asset('images/3pF2kF-P.png') }}"
         alt="camera">
</div>
<div class="hidden lg:block mt-3">
    @if(request()->routeIs('front.ad.create'))

        <p class="text-gray-400 text-sm">با کلیک روی دکمه ثبت آگهی، موافقت خود را با
            <a href="#" class="text-blue-500">قوانین و شرایط استفاده</a>
            لاراپلاس اعلام می کنید.
        </p>
    @endif

    <div class="flex justify-end">
        <button class="bg-blue-500 text-white py-2 px-4 rounded-md mt-4">
            {{ $buttonText ?? 'ثبت آگهی' }}
        </button>
    </div>
</div>
