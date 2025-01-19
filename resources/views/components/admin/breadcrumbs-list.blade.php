@props(['title' => null])
<div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
    <h2 class="text-title-md2 font-bold text-black dark:text-white">
        {{ $title }}
    </h2>

    <nav>
        <ol class="flex items-center gap-2">
            <x-admin.breadcrumb-item link="{{ route('admin.home') }}">داشبورد</x-admin.breadcrumb-item>
            {{ $slot }}
            <li class="font-medium text-primary">{{ $title }}</li>
        </ol>
    </nav>
</div>
