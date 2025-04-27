<x-admin.layouts.main>

    <x-admin.breadcrumbs-list title="آگهی ها"></x-admin.breadcrumbs-list>
    <!-- Breadcrumb End -->

    <x-admin.ui.card class="mb-5">
        <form action="{{ route('admin.ad.index') }}" method="GET">
            <div class="grid grid-cols-12 gap-3 items-center">
                <div class="col-span-3">
                    <x-admin.form.input name="filter[title]" title="عنوان" :value="request()->input('filter.title')"/>
                </div>
                <div class="col-span-3">
                    <x-front.forms.category-picker name="filter[category_id]" :value="request()->integer('filter.category_id')" :disabled-default="false"/>
                </div>
                <div class="col-span-2">
                    <x-admin.form.select name="filter[status]" title="وضعیت">
                        <option value="">همه</option>
                        @foreach(\App\Enums\AdStatus::cases() as $status)
                            <option value="{{ $status }}" @selected($status->value === request()->integer('filter.status'))>{{ $status->name() }}</option>
                        @endforeach
                    </x-admin.form.select>
                </div>
                <div class="col-span-2">
                    <x-admin.form.select name="sort" title="مرتب سازی">
                        <option value="">پیش فرض</option>
                        <option value="id" @selected(request()->sort === 'id')>شناسه - صعودی</option>
                        <option value="-id" @selected(request()->sort === '-id')>شناسه - نزولی</option>
                        <option value="title" @selected(request()->sort === 'title')>عنوان - صعودی</option>
                        <option value="-title" @selected(request()->sort === '-title')>عنوان - نزولی</option>
                        <option value="category_id" @selected(request()->sort === 'category_id')>گروه - صعودی</option>
                        <option value="-category_id" @selected(request()->sort === '-category_id')>گروه - نزولی</option>
                        <option value="status" @selected(request()->sort === 'status')>وضعیت - صعودی</option>
                        <option value="-status" @selected(request()->sort === '-status')>وضعیت - نزولی</option>
                    </x-admin.form.select>
                </div>
                <div class="col-span-2 flex flex-col gap-2 items-center translate-y-6">
                    <x-admin.form.button type="submit" class="w-full">
                        <x-mdi-magnify />
                        <span>فیلتر</span>
                    </x-admin.form.button>
                    <a class="bg-white border border-stone-300 rounded-sm py-1 px-2 text-xs flex items-center gap-2" href="{{ route('admin.ad.index') }}">
                        <x-mdi-tray-remove class="stroke-stone-400"/>
                        <span class="font-semibold  text-stone-400">پاکسازی</span>
                    </a>
                </div>

            </div>
        </form>
    </x-admin.ui.card>

    <x-admin.ui.table>
        <x-slot:head>
            <x-admin.ui.table-head-item>شناسه</x-admin.ui.table-head-item>
            <x-admin.ui.table-head-item>عنوان</x-admin.ui.table-head-item>
            <x-admin.ui.table-head-item>نامک</x-admin.ui.table-head-item>
            <x-admin.ui.table-head-item>گروه</x-admin.ui.table-head-item>
            <x-admin.ui.table-head-item>وضعیت</x-admin.ui.table-head-item>
            <x-admin.ui.table-head-item>عملیات</x-admin.ui.table-head-item>
        </x-slot:head>

        @foreach($ads as $ad)
            <tr>
                 <x-admin.ui.table-item>{{ $ad->id }}</x-admin.ui.table-item>
                <x-admin.ui.table-item>{{ $ad->title }}</x-admin.ui.table-item>
                <x-admin.ui.table-item>{{ $ad->slug }}</x-admin.ui.table-item>
                <x-admin.ui.table-item>{{  $ad->category->title }}</x-admin.ui.table-item>
                <x-admin.ui.table-item>
                    <x-ad-status :status="$ad->status"></x-ad-status>
                </x-admin.ui.table-item>
                <x-admin.ui.table-actions-list :item="$ad"></x-admin.ui.table-actions-list>
            </tr>
        @endforeach
    </x-admin.ui.table>

    {!! $ads->links() !!}


</x-admin.layouts.main>
