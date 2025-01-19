@props(['title', 'method' => 'POST'])
<div class="grid grid-cols-1 gap-9">

    <form method="POST" {{ $attributes }}>
        <div class="flex flex-col gap-9">
            <!-- Contact Form -->
            <div
                class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
            >
                <div
                    class="flex items-center justify-between border-b border-stroke px-6.5 py-4 dark:border-strokedark">
                    <h3 class="font-medium text-black dark:text-white">
                        {{ $title }}
                    </h3>
                    <x-admin.form.button type="submit">ذخیره</x-admin.form.button>
                </div>

                @csrf
                @method($method)

                <div class="p-6.5">
                    {{ $slot }}
                </div>


            </div>
        </div>
    </form>
</div>
