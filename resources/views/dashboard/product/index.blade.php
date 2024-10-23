<x-layout.app title="Products">
    <div class="row">
        <div class="col-12">
            <h2>Products</h2>
            @can('create', \App\Models\Product::class)
                <div class="text-end mb-4">
                    <a href="{{ route('dashboard.product.create') }}" class="btn btn-primary">Create Product</a>
                </div>
            @endcan
        </div>

        <x-flash></x-flash>

        <div class="table-responsive">
            <table class="table">
                <thead>
                <th>ID</th>
                <th>image</th>
                <th>title</th>
                <th>Price</th>
                <th>Actions</th>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td><img src="{{ $product->featuredImage() }}" class="img-fluid img-thumbnail"
                                 style="width: 80px !important; height: 80px !important;" alt=""></td>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->showPrice() }}</td>
                        <td>
                            <div class="d-flex gap-3 align-items-center">
                                @can('update', $product)
                                    <a href="{{ route('dashboard.product.edit', $product->slug) }}">Edit</a>
                                @endcan
                                @can('delete', $product)
                                    <form action="{{ route('dashboard.product.destroy', $product->slug) }}"
                                          method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn">Delete</button>
                                    </form>
                                @endcan
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout.app>
