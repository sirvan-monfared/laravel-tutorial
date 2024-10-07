<x-layout.app title="Create Product">

    <x-slot:css>
        <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
    </x-slot:css>
    <x-slot:js>
        <script src="{{ asset('assets/js/select2.min.js') }}"></script>
        <script src="{{ asset('assets/js/tinymce/tinymce.min.js') }}"></script>

        <script>
            tinymce.init({
                selector: '.text-editor',
                height: 300,
                plugins: [
                    'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                    'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                    'insertdatetime', 'media', 'table', 'help', 'wordcount'
                ],
                toolbar: 'undo redo | blocks | ' +
                    'bold italic backcolor | alignleft aligncenter ' +
                    'alignright alignjustify | bullist numlist outdent indent | ' +
                    'removeformat | help',
                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
            });
        </script>

    </x-slot:js>


    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h1 class="mb-4">Create Product</h1>
            <form method="POST" action="{{ route('dashboard.product.store') }}">
                @csrf

                <x-text-input type="text" name="title" title="Title"/>

                <x-text-input type="text" name="slug" title="Slug"/>

                <x-text-input type="text" name="price" title="Price ($)"/>

                <x-textarea name="short_description" class="text-editor" title="short description" rows="7"></x-textarea>

                <x-text-input type="number" name="qty" title="Quantity"/>

                <div class="form-group mb-4">
                    <label for="">Category</label>
                    <select class="form-control select_2" name="category_id">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>


                <x-text-input type="text" name="sku" title="SKU"/>

                <x-textarea name="description" title="Description" class="text-editor" rows="7"></x-textarea>

                <button type="submit" class="btn btn-primary">create</button>
            </form>

        </div>
    </div>
</x-layout.app>
