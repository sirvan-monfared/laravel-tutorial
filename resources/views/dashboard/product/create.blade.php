<x-layout.app title="Create Product">

    <x-slot:css>
        <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
    </x-slot:css>
    <x-slot:js>
        <script src="{{ asset('assets/js/select2.min.js') }}"></script>
        <script src="{{ asset('assets/js/tinymce/tinymce.min.js') }}"></script>
    </x-slot:js>


    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">

            <x-flash></x-flash>

            <h1 class="mb-4">Create Product</h1>
            <form method="POST" action="{{ route('dashboard.product.store') }}" enctype="multipart/form-data">
                @csrf

                @include('dashboard.product._form', [
                    'product' => $product
                ])
            </form>

        </div>
    </div>
</x-layout.app>
