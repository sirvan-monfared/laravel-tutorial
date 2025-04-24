<div>
    <form action="">
        <div class="relative">
            <input type="text"
                   class="border border-gray-300 py-2 px-4 w-[500px] h-[60px]"
                   wire:model.live.debounce="keyword"
                   placeholder="type to search ..."
            >

            <button
                class="absolute inset-0 left-auto right-5 top-2 py-3 px-0 cursor-pointer text-blue-500"
                wire:click.prevent="clear"
            > X </button>
        </div>
    </form>

    @foreach($posts as $post)
        <p>{{ $post->title }}</p>
    @endforeach
</div>
