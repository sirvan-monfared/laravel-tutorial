<x-front.layouts.main>
    <main class="container lg:max-w-screen-lg mx-auto px-5">

        <div class="flex items-center justify-between mt-3">
            <h1 class="text-xl text-black">ویرایش آگهی</h1>
            <a href="#" class="text-blue-500 hover:text-orange-500">پاکسازی فرم</a>
        </div>

        <form action="{{ route('dashboard.ad.update', $ad) }}" method="POST">
            @csrf
            @method('PUT')

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

    <x-slot:js>
        <script>

            document.addEventListener('DOMContentLoaded', () => {
                const filepond = document.querySelector('.filepond');
                const csrf = document.querySelector('input[name="_token"]').value;

                const images = @json($ad->images->map(fn($image) => $image->url()))

                const pond = window.FilePond.create(filepond, {
                    allowMultiple: true,
                    name: 'filepond',
                    server: {
                        process: "/upload",
                        headers: {
                            'X-CSRF-TOKEN': csrf,
                            'accept': 'application/json'
                        },
                        load: (source, load, error, progress, abort, headers) => {
                          fetch(source)
                            .then(response => response.blob())
                            .then(load)
                            .catch(error);
                        }
                    },
                    files: images.map(url => ({
                        source: url,
                        options: {
                            type: 'local'
                        }
                    })),
                    onerror: (error) => {
                        alert("لطفا یک تصویر از نوع jpg یا png ارسال کنید");
                    }
                });
            })


        </script>
    </x-slot:js>
</x-front.layouts.main>
