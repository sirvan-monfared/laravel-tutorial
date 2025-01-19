
<div class="flex flex-col gap-10">

    <div
        class="rounded-sm border border-stroke bg-white px-5 pb-2.5 pt-6 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:pb-1"
    >
        <div class="max-w-full overflow-x-auto">
            <table class="w-full table-auto">
                <thead>
                <tr class="bg-gray-2 text-left dark:bg-meta-4">
                    {{ $head }}
                </tr>
                </thead>
                <tbody>
                    {{ $slot }}
                </tbody>
            </table>

        </div>
    </div>
</div>
