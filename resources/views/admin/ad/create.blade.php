<x-admin.layouts.main>
    <x-admin.breadcrumbs-list title="ثبت آگهی جدید">
        <x-admin.breadcrumb-item :link="route('admin.ad.index')">آگهی ها</x-admin.breadcrumb-item>
    </x-admin.breadcrumbs-list>

    <x-admin.form.form action="{{ route('admin.ad.store') }}" title="ثبت آگهی جدید">
        @include('admin.ad._form')
    </x-admin.form.form>

    <x-slot:js>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const filepond = document.querySelector('.filepond');
                const csrf = document.querySelector('input[name="_token"]').value;

                const pond = window.FilePond.create(filepond, {
                    allowMultiple: true,
                    name: 'filepond',
                    server: {
                        process: "/upload",
                        headers: {
                            'X-CSRF-TOKEN': csrf,
                            'accept': 'application/json'
                        }
                    },
                    onerror: (error) => {
                        alert("لطفا یک تصویر از نوع jpg یا png ارسال کنید");
                    }
                });
            })
        </script>
    </x-slot:js>
</x-admin.layouts.main>
