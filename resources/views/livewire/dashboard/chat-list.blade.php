<div class="flex flex-col items-center gap-3">

    <!-- item -->
    @foreach($chats as $chat)
        <div class="w-full bg-white rounded-md shadow-sm p-2">
            <a class="flex gap-2" href="#">
                <div class="w-20 h-20">
                    <img class="aspect-square w-full"
                         src="{{ $chat->ad->featuredImageUrl() }}"
                         alt="">
                </div>
                <div class="flex-1 px-3 flex flex-col justify-between">
                    <div>
                        <h2 class="text-black font-medium">{{ $chat->ad->title }}</h2>
                        <p class="text-sm text-gray-500 ">این آخرین پیام شما در این چت است</p>
                    </div>
                    <div class="flex items-center justify-between">
                        <p class="text-sm text-gray-500">محمد</p>
                        <p class="text-sm text-gray-500">8:42</p>
                    </div>
                </div>
            </a>
        </div>
    @endforeach

</div>
