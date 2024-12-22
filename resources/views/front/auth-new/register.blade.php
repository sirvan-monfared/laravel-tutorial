<x-front.layouts.main body-class="bg-gray-50">
    <main class="container lg:max-w-screen-lg mx-auto lg:min-h-[calc(100vh-21.75rem)]">
        <div class="p-5">
            <div class="lg:max-w-md lg:bg-white lg:rounded-md lg:shadow-md lg:mx-auto lg:p-5">
                <h1 class="text-lg text-black font-semibold mt-5"> ثبت نام</h1>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <p class="text-gray-600 mt-4">برای ثبت نام لطفا فیلدهای زیر را تکمیل کنید</p>

                    <div class="mt-8">
                        <x-front.forms.input name="name" label="نام و نام خانوادگی"/>
                    </div>
                    <div class="mt-8">
                        <x-front.forms.input name="email" label="آدرس ایمیل"/>
                    </div>
                    <div class="mt-5">
                        <x-front.forms.input type="password" name="password" label="رمزعبور"/>
                    </div>
                    <div class="mt-5">
                        <x-front.forms.input type="password" name="password_confirmation" label="تکرار رمزعبور"/>
                    </div>

                    <button type="submit" class="mt-5 w-full rounded-md bg-blue-500 text-white py-3 px-6 text-center">
                        ثبت نام
                    </button>

                    <div class="flex justify-center mt-3">
                        <a href="{{ route('login') }}" class="text-sm underline pb-2 hover:opacity-60">قبلا ثبت نام کرده اید؟</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
</x-front.layouts.main>
