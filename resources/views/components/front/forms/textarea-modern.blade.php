@props(['name', 'title', 'type', 'placeholder'])

<div>
    <label for="{{ $name }}" class="block text-sm">{{ $title }}</label>
    <textarea name="{{ $name }}" id="{{ $name }}"
        @class([
            'mt-2 px-3 h-36 border border-gray-300 w-full rounded-lg focus:border-blue-400 placeholder-gray-400',
            'border-rose-400 border-r-4' => $errors->has($name)
       ])
        placeholder="{{ $placeholder }}">{{ old($name, $slot) }}</textarea>
    @error($name) <p class="text-rose-500 text-xs mt-2">{{ $message }}</p> @enderror
</div>
