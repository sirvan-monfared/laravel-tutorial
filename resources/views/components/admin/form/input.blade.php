@props(['name' => null, 'value' => null, 'title' => null, 'type' => 'text', 'placeholder' => '', 'half' => false])
<div @class(['w-full', 'xl:w-1/2' => $half])>
    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
        {{ $title }}
    </label>
    <input
        name="{{ $name }}"
        id="{{ $name }}"
        type="{{ $type }}"
        placeholder="{{ $placeholder }}"
        value="{{ $value }}"
        class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
    />
    @error($name) <p class="text-red-500 text-xs">{{ $message }}</p> @enderror
</div>
