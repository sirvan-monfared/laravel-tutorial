<x-admin.layouts.main>

    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            ساخت دسته
        </h2>

        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    <a class="font-medium" href="{{ route('admin.home') }}">داشبورد /</a>
                </li>
                <li>
                    <a class="font-medium" href="{{ route('admin.category.index') }}">دسته بندی ها /</a>
                </li>
                <li class="font-medium text-primary">ساخت دسته</li>
            </ol>
        </nav>
    </div>

    <x-admin.form.form  action="{{ route('admin.category.store') }}" title="ساخت دسته">
        @include('admin.category._form')
    </x-admin.form.form>

</x-admin.layouts.main>
