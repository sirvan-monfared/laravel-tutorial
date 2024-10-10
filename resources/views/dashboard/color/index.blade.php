<x-layout.app title="Products">
    <div class="row">
        <div class="col-12">
            <h2>Colors</h2>
            <div class="text-end mb-4">
                <a href="{{ route('dashboard.color.create') }}" class="btn btn-primary">Create Color</a>
            </div>
        </div>

        <x-flash></x-flash>

        <div class="table-responsive">
            <table class="table">
                <thead>
                <th>ID</th>
                <th>name</th>
                <th>Actions</th>
                </thead>
                <tbody>
                @foreach($colors as $color)
                    <tr>
                        <td>{{ $color->id }}</td>
                        <td>{{ $color->name }}</td>
                        <td>
                            <div class="d-flex gap-3 align-items-center">
                                <a href="{{ route('dashboard.color.edit', $color->id) }}">Edit</a>

                                <form action="{{ route('dashboard.color.destroy', $color->id) }}" method="POST">
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
