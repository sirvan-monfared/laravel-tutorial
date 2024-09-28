@extends('layouts.master')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3>Register</h3>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('auth.store') }}" method="POST">
                        @csrf

                        <div class="form-group mt-2">
                            <label for="exampleInputEmail1">name</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Please Enter Your name">
                            @error('name')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group mt-4">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Enter email">
                            @error('email')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group mt-4">
                            <label for="exampleInputEmail1">Password</label>
                            <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                            @error('password')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group mt-4">
                            <label for="exampleInputEmail1">Password Again</label>
                            <input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}">
                            @error('password_confirmation')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <button class="btn btn-primary mt-4">Register</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
