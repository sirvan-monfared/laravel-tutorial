<x-admin.layouts.main>
    <x-admin.breadcrumbs-list title="ویرایش آگهی">
        <x-admin.breadcrumb-item :link="route('admin.ad.index')">آگهی ها</x-admin.breadcrumb-item>
    </x-admin.breadcrumbs-list>

    <x-admin.form.form action="{{ route('admin.ad.update', $ad) }}" title="ویرایش آگهی" method="PUT">
        @include('admin.ad._form')
    </x-admin.form.form>

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
</x-admin.layouts.main>
