@extends('layouts.master')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3>Login</h3>
            <div class="card">
                <div class="card-body">

                    @session('danger')
                        <div class="alert alert-danger">{{ $value }}</div>
                    @endsession

                    <form action="{{ route('auth.login.store') }}" method="POST">
                        @csrf

                        <div class="form-group mt-4">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Enter email">
                            @error('email')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group mt-4">
                            <label for="exampleInputEmail1">Password</label>
                            <input type="password" name="password" class="form-control">
                            @error('password')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <button class="btn btn-primary mt-4">Login</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
