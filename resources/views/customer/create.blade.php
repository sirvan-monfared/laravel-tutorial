@extends('layouts.master')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <h3>Customers</h3>
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

{{--                    @if($errors->any())--}}
{{--                        @foreach($errors->all() as $error)--}}
{{--                            <p class="alert alert-danger">{{ $error }}</p>--}}
{{--                        @endforeach--}}
{{--                    @endif--}}

                    <form method="POST" action="{{ route('customer.store') }}">
                        @csrf
                        @include('customer._form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
