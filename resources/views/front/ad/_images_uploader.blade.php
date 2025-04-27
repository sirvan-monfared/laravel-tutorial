<div class="bg-white shadow-md rounded-md p-3 mt-3">
    <h2 class="text-lg text-black">عکس آگهی</h2>

    <div class="mt-5 mb-5">
        <input type="file" name="images[]" class="filepond">
    </div>

    <img class="hidden lg:block lg:translate-y-3" src="{{ asset('images/3pF2kF-P.png') }}" alt="camera">
</div>
<div class="hidden lg:block mt-3">

    <p class="text-gray-400 text-sm">با کلیک روی دکمه ثبت آگهی، موافقت خود را با
        <a href="#" class="text-blue-500">قوانین و شرایط استفاده</a>
        لاراپلاس اعلام می کنید.
    </p>

    <div class="flex justify-end">
        <button class="bg-blue-500 text-white py-2 px-4 rounded-md mt-4">
            {{ $buttonText ?? 'ثبت آگهی' }}
        </button>
    </div>
</div>
