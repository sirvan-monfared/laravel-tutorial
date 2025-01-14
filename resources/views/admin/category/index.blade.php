<x-admin.layouts.main>
    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            دسته بندی ها
        </h2>

        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    <a class="font-medium" href="{{ route('admin.home') }}">داشبورد /</a>
                </li>
                <li class="font-medium text-primary">دسته بندی ها</li>
            </ol>
        </nav>
    </div>
    <!-- Breadcrumb End -->

    <x-admin.ui.alert/>

    <!-- ====== Table Section Start -->
    <div class="flex flex-col gap-10">

        <div
                class="rounded-sm border border-stroke bg-white px-5 pb-2.5 pt-6 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:pb-1"
        >
            <div class="max-w-full overflow-x-auto">
                <table class="w-full table-auto">
                    <thead>
                    <tr class="bg-gray-2 text-left dark:bg-meta-4">
                        <th class="min-w-[220px] px-4 py-4 font-medium text-black dark:text-white text-start xl:pl-11">نام</th>
                        <th class="min-w-[150px] px-4 py-4 font-medium text-black dark:text-white text-start">نامک</th>
                        <th class="min-w-[120px] px-4 py-4 font-medium text-black dark:text-white text-start">دسته مادر</th>
                        <th class="px-4 py-4 font-medium text-black dark:text-white text-start">عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td class="border-b border-[#eee] px-4 py-5 pl-9 dark:border-strokedark xl:pl-11">
                                <h5 class="font-medium text-black dark:text-white">{{ $category->title }}</h5>
                                {{--                            <p class="text-sm">$0.00</p>--}}
                            </td>
                            <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                <p class="text-black dark:text-white">{{ $category->slug }}</p>
                            </td>
                            <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                <p class="text-black dark:text-white">{{ $category->parent?->title ?: '---' }}</p>
                            </td>
                            <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                <div class="flex items-center space-x-3.5 rtl:space-x-reverse">
                                    <a href="{{ $category->viewLink() }}" class="hover:text-primary" target="_blank">
                                        <x-admin.icon.eye/>
                                    </a>
                                    <a href="{{ route('admin.category.edit', $category) }}" class="hover:text-primary">
                                        <x-admin.icon.edit/>
                                    </a>
                                    <form method="POST" action="{{ route('admin.category.destroy', $category) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="hover:text-primary">
                                            <x-admin.icon.delete/>
                                        </button>
                                    </form>


                                </div>
                            </td>
                        </tr>
                    @endforeach


                    </tbody>
                </table>
            </div>
        </div>


    </div>
    <!-- ====== Table Section End -->
</x-admin.layouts.main>
