@props(['name', 'type', 'label'])

<label class="text-sm" for="{{ $name }}">{{ $label }}</label>
<input type="{{ $type ?? 'text' }}" name="{{ $name }}" id="{{ $name }}" class="h-12 w-full px-3 mt-2 bg-white border border-gray-300 rounded-lg focus:border-blue-500 placeholder-gray-400">
@error($name)
    <p class="text-red-500">{{ $message }}</p>
@enderror
