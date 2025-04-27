<x-front.layouts.main body-class="bg-gray-50">
    <main class="container lg:max-w-screen-lg mx-auto lg:min-h-[calc(100vh-21.75rem)]">
        <div class="p-5">
            <div class="lg:max-w-md lg:bg-white lg:rounded-md lg:shadow-md lg:mx-auto lg:p-5">
                <form method="POST" action="{{ route('otp.verify') }}">
                    @csrf
                    <p class="text-gray-600 mt-4">لطفا کد 4 رقمی ارسال شده به تلفن همراه خود را وارد نمایید</p>

                    <div class="mt-8">
                        <x-front.forms.input name="otp" label="کد تایید"/>
                    </div>

                    <button type="submit" class="mt-5 w-full rounded-md bg-blue-500 text-white py-3 px-6 text-center">
                        تایید
                    </button>

                </form>

                <form action="{{ route('otp.resend') }}" method="POST" class="flex justify-center mt-2">
                    @csrf
                    <button type="submit" class="text-blue-500 hover:text-blue-800">ارسال مجدد کد</button>
                </form>


            </div>
        </div>

    </main>
</x-front.layouts.main>
