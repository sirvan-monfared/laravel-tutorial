@props(['name' => null, 'title' => null, 'placeholder' => '', 'half' => false])
<div @class(['w-full', 'xl:w-1/2' => $half])>
    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
        {{ $title }}
    </label>
    <textarea
        name="{{ $name }}"
        id="{{ $name }}"
        placeholder="{{ $placeholder }}"
        rows="6"
        {{ $attributes->merge(['class' => 'w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary']) }}
    >{{ old($name, $slot) }}</textarea>
    @error($name) <p class="text-red-500 text-xs">{{ $message }}</p> @enderror
</div>

