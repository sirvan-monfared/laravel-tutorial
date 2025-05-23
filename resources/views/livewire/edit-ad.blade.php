<main class="container lg:max-w-screen-lg mx-auto px-5">

    @include('front.ad._livewire_flash')

    <div class="flex items-center justify-between mt-3">
        <h1 class="text-xl text-black">ویرایش آگهی</h1>
    </div>

    <form wire:submit.prevent="submit">
        <div class="flex flex-col lg:flex-row lg:gap-3">
            <section class="order-2 lg:order-1 flex-1">
                <div class="bg-white shadow-md rounded-md p-3 mt-3 space-y-6">

                    @include('front.ad._form', [
                        'buttonText' => 'ذخیره تغییرات'
                    ])

                </div>

            </section>

            <section class="order-1 flex-1">

                @include('front.ad._images_uploader', [
                    'buttonText' => 'ذخیره تغییرات'
                ])
            </section>
        </div>
    </form>
</main>
