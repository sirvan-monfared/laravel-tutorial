<x-layout.app title="{{ $category->title }} Category">
    <div class="row">
        <h1>Category: {{ $category->title }}</h1>

        <div class="row">
            @foreach($products as $product)
                <x-product-item :product="$product"></x-product-item>
            @endforeach
        </div>
    </div>
</x-layout.app>
