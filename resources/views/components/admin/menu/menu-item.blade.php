@props(['name', 'title'])
<li>
    <a
            class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
            {{ $attributes }}
            @click="selected = (selected === '{{ $name }}' ? '': '{{ $name }}')"
            :class="{ 'bg-graydark dark:bg-meta-4': (selected === '{{ $name }}') }"
    >
        {{ $icon ?? null }}

        {{ $title }}

        @if($slot->isNotEmpty())
            <svg
                    class="absolute left-4 top-1/2 -translate-y-1/2 fill-current"
                    :class="{ 'rotate-180': (selected === '{{ $name }}') }"
                    width="20"
                    height="20"
                    viewBox="0 0 20 20"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
            >
                <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z"
                        fill=""
                />
            </svg>
        @endif
    </a>
    @if($slot->isNotEmpty())
        <div
                class="translate transform overflow-hidden"
                :class="(selected === '{{ $name }}') ? 'block' :'hidden'"
        >
            <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                {{ $slot }}
            </ul>
        </div>
    @endif
</li>
