@extends('layouts.master')


@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <h3>Customers</h3>
            <div class="card">

                <div class="card-header">
                    <form action="{{ route('customer.index') }}" method="GET" id="filter-form">

                        <div class="row">
                            <div class="col-md-2">
                                <a href="{{ route('customer.index') }}" class="btn"
                                   style="background-color: #4643d3; color: white;"><i class="fas fa-chevron-left"></i> Back</a>
                            </div>
                            <div class="col-md-8">
                                <div class="input-group mb-3">
                                    <input type="text" name="keyword" class="form-control"
                                           placeholder="Search anything..." aria-describedby="button-addon2" value="{{ request()->keyword }}">
                                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="input-group mb-3">
                                    <select class="form-select" name="order_by" id="order_by">
                                        <option value="desc" @selected(request()->order_by === 'desc')>Newest to Old</option>
                                        <option value="asc" @selected(request()->order_by === 'asc')>Old to Newest</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </form>


                </div>
                <div class="card-body">
                    <table class="table table-bordered" style="border: 1px solid #dddddd">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Date of Birth</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Credit Card</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($customers as $customer)
                            <tr>
                                <th scope="row">{{ $customer->id }}</th>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->last_name }}</td>
                                <td>{{ $customer->created_at }}</td>
                                <td>{{ $customer->email }}</td>
                                <td>{{ $customer->phone }}</td>
                                <td>{{ $customer->card_number }}</td>
                                <td style="display:flex; justify-content: center; align-items: center">
                                    <form method="POST" action="{{ route('customer.trashed.restore', $customer->id) }}">
                                        @method('PATCH')
                                        @csrf

                                        <button type="submit"
                                                style="color: #2c2c2c; background: none; border: none; outline: none"
                                                class="ms-1 me-1">
                                            <i class="fas fa-redo"></i>
                                        </button>
                                    </form>

                                    <form method="POST" action="{{ route('customer.trashed.destroy', $customer->id) }}">
                                        @method('DELETE')
                                        @csrf

                                        <button type="submit"
                                                style="color: #2c2c2c; background: none; border: none; outline: none"
                                                class="ms-1 me-1">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        const selectElm = document.getElementById('order_by');
        const formElm = document.getElementById('filter-form');
        selectElm.addEventListener('change', function() {
            formElm.submit();
        })
    </script>
@endpush

