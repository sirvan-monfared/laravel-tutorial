@props(['disabled' => false, 'title'])

<div class="form-group mb-4">
    <label for="{{ $attributes->get('id') }}">{{ $title }}</label>
    <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-control']) !!}>
    @error($attributes->get('name'))
        <small class="form-text text-danger">{{ $message }}</small>
    @enderror
</div>



