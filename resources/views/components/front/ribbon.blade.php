@props(['title' => 'فوری'])
<div {{ $attributes->merge(['class' => 'absolute overflow-hidden w-32 h-32 left-0']) }}>
    <div class="absolute left-0 top-0 h-16 w-16">
        <div
            class="absolute transform -rotate-45 bg-rose-600 text-center text-white font-semibold py-1 left-[-34px] top-[32px] w-[170px]">
            {{ $title }}
        </div>
    </div>
</div>
