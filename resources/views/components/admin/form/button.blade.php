<button
    {{ $attributes->merge(['class' => 'flex justify-center rounded bg-primary py-1 px-4 text-small font-medium text-gray hover:bg-opacity-90']) }}
>
    {{ $slot }}
</button>
