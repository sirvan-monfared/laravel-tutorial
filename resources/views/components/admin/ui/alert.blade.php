@session('success')
<x-admin.ui.success-alert>{{ $value }}</x-admin.ui.success-alert>
@endsession
@session('danger')
<x-admin.ui.danger-alert>{{ $value }}</x-admin.ui.danger-alert>
@endsession
