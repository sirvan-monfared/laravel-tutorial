<x-admin.layouts.main>

    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            ویرایش دسته
        </h2>

        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    <a class="font-medium" href="{{ route('admin.home') }}">داشبورد /</a>
                </li>
                <li>
                    <a class="font-medium" href="{{ route('admin.category.index') }}">دسته بندی ها /</a>
                </li>
                <li class="font-medium text-primary">ویرایش دسته</li>
            </ol>
        </nav>
    </div>

    <x-admin.ui.alert/>

    <form action="{{ route('admin.category.update', $category) }}" method="POST">
        @csrf
        @method('PUT')

        @include('admin.category._form')
    </form>
</x-admin.layouts.main>
