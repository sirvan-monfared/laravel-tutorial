@session('success')
    <div class="alert alert-success">{{ $value }}</div>
@endsession
@session('danger')
    <div class="alert alert-danger">{{ $value }}</div>
@endsession
