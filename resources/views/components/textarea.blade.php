@props(['disabled' => false, 'title'])

<div class="form-group mb-4">
    <label for="{{ $attributes->get('id') }}">{{ $title }}</label>
    <textarea {{ $attributes->merge(['class' => 'form-control']) }}>{{ old($attributes->get('name'), $slot ?? null) }}</textarea>
    @error($attributes->get('name'))
        <small class="form-text text-danger">{{ $message }}</small>
    @enderror
</div>
