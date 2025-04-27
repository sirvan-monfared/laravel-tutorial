<x-front.layouts.main body-class="bg-gray-50">
    <main class="container lg:max-w-screen-lg mx-auto lg:min-h-[calc(100vh-21.75rem)]">
        <div class="p-5">
            <div class="lg:max-w-md lg:bg-white lg:rounded-md lg:shadow-md lg:mx-auto lg:p-5">
                <h1 class="text-lg text-black font-semibold mt-5">ورود|ثبت نام </h1>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <p class="text-gray-600 mt-4">لطفا شماره موبایل خود را وارد کنید.</p>

                    <div class="mt-8">
                        <x-front.forms.input name="phone" label="شماره موبایل"/>
                    </div>

                    <button type="submit" class="mt-5 w-full rounded-md bg-blue-500 text-white py-3 px-6 text-center">
                        ورود|ثبت نام
                    </button>

                </form>


            </div>
        </div>

    </main>
</x-front.layouts.main>
