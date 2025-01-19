@props(['item'])
<td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
    <div class="flex items-center space-x-3.5 rtl:space-x-reverse">
        <x-admin.ui.table-action-item href="{{ $item->viewLink() }}" target="_blank">
            <x-admin.icon.eye/>
        </x-admin.ui.table-action-item>
        <x-admin.ui.table-action-item href="{{ $item->editLink() }}">
            <x-admin.icon.edit/>
        </x-admin.ui.table-action-item>

        <form method="POST" action="{{ $item->deleteLink() }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="hover:text-primary">
                <x-admin.icon.delete/>
            </button>
        </form>


    </div>
</td>
