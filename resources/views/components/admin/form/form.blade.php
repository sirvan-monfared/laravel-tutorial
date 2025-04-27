@props(['title', 'method' => 'POST'])

<form method="POST" {{ $attributes }}>
    @csrf
    @method($method)
    <div class="flex flex-col gap-9">

        <div
            class="flex items-center justify-between bg-white border-b border-stroke px-6.5 py-4 dark:border-strokedark">
            <h3 class="font-medium text-black dark:text-white">
                {{ $title }}
            </h3>
            <x-admin.form.button type="submit">ذخیره</x-admin.form.button>
        </div>

        <div class="grid grid-cols-12 items-start gap-5">

            {{ $slot }}
        </div>
    </div>
</form>
