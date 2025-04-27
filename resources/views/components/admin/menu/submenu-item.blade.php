@props(['name' => null, 'title'])
<li>
    <a
            class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
            {{ $attributes }}
{{--            :class="page === {{ $name }} && '!text-white'"--}}
    >{{ $title }}
    </a>
</li>
