<x-layout.app title="Create Product">

    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">

            <x-flash></x-flash>

            <h1 class="mb-4">Edit Color</h1>
            <form method="POST" action="{{ route('dashboard.color.update', $color) }}">
                @csrf
                @method('PUT')

                @include('dashboard.color._form', [
                    'buttonText' => 'Update'
                ])
            </form>

        </div>
    </div>
</x-layout.app>
