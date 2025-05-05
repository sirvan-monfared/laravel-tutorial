<div>
    @if($chat)
        <div class="fixed w-screen h-screen inset-0 lg:static lg:w-auto lg:h-auto bg-white z-50">

            <!-- modal header -->
            <div class="bg-white p-2 shadow-sm border border-gray-200 flex items-center justify-between">

                <div class="flex items-center gap-2 truncate">
                    <a href="#" wire:click.prevent="back">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                        </svg>
                    </a>

                    <div class="flex gap-2 truncate">
                        <div class="h-12 w-12 lg:hidden">
                            <img class="rounded-full w-full"
                                 src="https://www.sheypoor.com/imgs/2023/03/03/422655895/133x133_af/422655895_4183d347d81b729d6d6a0b2869a3c227.jpg"
                                 alt="">
                        </div>
                        <div class="flex flex-col justify-between truncate">
                            <h2 class="text-sm font-bold text-black truncate">{{ $chat->ad?->title }}
                            </h2>
                            <p class="text-xs text-gray-500">
                                {{ $chat->otherUser()?->name }}
                            </p>
                        </div>
                    </div>


                </div>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z"/>
                </svg>

            </div>


            <!-- chat list -->
            <div class="mt-7 px-5 h-[500px] overflow-auto">
                <ul class="flex flex-col gap-2">

                    <li class="flex items-center justify-center">
                                    <span class="bg-gray-200 text-gray-500  text-xs py-1 px-2 rounded-full">جمعه 12
                                        اسفند</span>
                    </li>


                    <li
                        class="flex items-start gap-3 rounded-xl bg-cyan-600 text-white text-[10px] py-1 px-2">
                        <time>08:48</time>
                        <span>کاربر گرامی
                                        کد تایید یا ورود به برنامه ها و اطلاعات شخصی خود را برای هیچکس ارسال نکنید، پیام
                                        های شیپور
                                        در چت فقط از طریق حساب &lt;&lt;پشتیبانی شیپور&gt;&gt; به شما ارسال می گردد. در
                                        صورت مشاهده
                                        هرگونه تخلف، آن را گزارش کنید.
                                    </span>
                    </li>

                    @foreach($chat->messages as $message)
                        <li @class(['flex items-center gap-3 rounded-full rounded-tr-none py-2 px-4',
                        'self-start bg-neutral-500 text-white' => $message->sender_id === auth()->id(),
                        'self-end bg-white text-gray-700  shadow-md' => $message->sender_id !== auth()->id()
])
                        >
                            @if($message->is_read)
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                     class="w-4 h-4 fill-white">
                                    <path
                                        d="M18.12 6.528l-1.44-1.44-6.48 6.504 1.44 1.44 6.48-6.504zm4.344-1.44L11.64 16.008l-4.32-4.32-1.44 1.44 5.76 5.784L24 6.528l-1.536-1.44zM0 13.128l5.76 5.784 1.44-1.464-5.76-5.76L0 13.128z">
                                    </path>
                                </svg>
                            @endif
                            <time
                                class="text-[10px] text-neutral-300">{{ $message->created_at->toJalali()->format('H:i') }}</time>
                            <span>{{ $message->message }}</span>
                        </li>
                    @endforeach


                </ul>
            </div>

            <div class="mt-5 px-5">
                <ul class="flex items-center gap-2">
                    <li>
                    <span class="bg-gray-200 text-gray-500  text-xs py-1 px-2 rounded-full">جمعه 12
                        اسفند</span>
                    </li>
                    <li>
                    <span class="bg-gray-200 text-gray-500  text-xs py-1 px-2 rounded-full">جمعه 12
                        اسفند</span>
                    </li>
                    <li>
                    <span class="bg-gray-200 text-gray-500  text-xs py-1 px-2 rounded-full">جمعه 12
                        اسفند</span>
                    </li>

                </ul>
            </div>

            <div class="mt-5 px-5">
                <div class="flex items-center gap-2">
                    <div
                        class="w-10 h-10 bg-blue-500 text-white flex items-center justify-center rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M18.375 12.739l-7.693 7.693a4.5 4.5 0 01-6.364-6.364l10.94-10.94A3 3 0 1119.5 7.372L8.552 18.32m.009-.01l-.01.01m5.699-9.941l-7.81 7.81a1.5 1.5 0 002.112 2.13"/>
                        </svg>

                    </div>

                    <input type="text"
                           class="flex-1 h-10 border-gray-300 px-5 focus:border-blue-400 rounded-md placeholder-gray-400"
                           placeholder="پیامتان را درج کنید...">
                </div>
            </div>

        </div>
    @else
        <div class="lg:block h-full">
            <div class="flex items-center justify-center bg-white rounded-md shadow-md h-full">
                <div class="flex flex-col items-center gap-6">
                    <img src="{{ asset('images/chat.png') }}" alt="" class="w-24">
                    <p class="text-gray-600">برای شروع یکی از چت ها را از لیست انتخاب کنید</p>
                </div>
            </div>
        </div>
    @endif
</div>
