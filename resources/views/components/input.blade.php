<div class="col-md-6 mb-3">
    <div class="form-group has-error">
        <label for="">{{ $label }}</label>
        <input type="{{ $type ?? 'text' }}" name="{{ $name }}" @class(['form-control', 'is-invalid' => $errors->has($name)])  value="{{ old($name, $value ?? null) }}">
        @error($name)<p class="text-danger">{{ $message }}</p>@enderror
    </div>
</div>
