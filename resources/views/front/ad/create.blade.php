<x-front.layouts.main>


    <livewire:register-ad/>


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

</x-front.layouts.main>
