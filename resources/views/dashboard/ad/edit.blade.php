<x-front.layouts.main>

    <livewire:edit-ad :ad="$ad"/>

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
