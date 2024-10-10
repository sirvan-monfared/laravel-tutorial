<x-layout.app title="Products">
    <div class="row">
        <div class="col-12">
            <h2>Categories</h2>
            <div class="text-end mb-4">
                <a href="{{ route('dashboard.category.create') }}" class="btn btn-primary">Create Category</a>
            </div>
        </div>

        <x-flash></x-flash>

        <div class="table-responsive">
            <table class="table">
                <thead>
                <th>ID</th>
                <th>title</th>
                <th>slug</th>
                <th>Actions</th>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->title }}</td>
                        <td>{{ $category->slug }}</td>
                        <td>
                            <div class="d-flex gap-3 align-items-center">
                                <a href="{{ route('dashboard.category.edit', $category->id) }}">Edit</a>

                                <form action="{{ route('dashboard.category.destroy', $category->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout.app>
