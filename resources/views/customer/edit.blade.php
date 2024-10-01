<x-layout title="Edit Customer">

    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <h3>Edit Customer</h3>
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-2">
                            <a href="{{ route('customer.index') }}" class="btn"
                               style="background-color: #4643d3; color: white;"><i
                                    class="fas fa-chevron-left"></i> Back</a>
                        </div>

                    </div>

                </div>
                <div class="card-body">

                    @session('success')
                    <div class="alert alert-success">{{ $value }}</div>
                    @endsession


                    <form method="POST" action="{{ route('customer.update', $customer->id) }}">
                        @method('PUT')
                        @csrf

                        @include('customer._form', [
                            'button_title' => 'Update'
                        ])
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-layout>
