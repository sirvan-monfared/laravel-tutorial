<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sheypoor</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body dir="rtl" class="{{ $bodyClass ?? 'bg-neutral-100' }}" x-data="{ openMenu: false }">

<!-- mobile header -->
<header class="lg:hidden sticky top-0 bg-white shadow-sm h-16 p-2">
    <div class="flex items-center gap-3 bg-gray-100 h-full px-3 rounded-md">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
             stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
        </svg>
        <input type="text" class="bg-transparent border-0 flex-1 focus:outline-0 h-full" placeholder="جستجو...">
        <div class="flex items-center gap-2 font-medium text-gray-400">
            <span class="text-sm">همه ایران</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                <path fill-rule="evenodd"
                      d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                      clip-rule="evenodd"/>
            </svg>

        </div>
    </div>
</header>

<!-- desktop header -->
<header class="hidden lg:block bg-white shadow-sm">
    <div class="bg-gray-200">
        <div class="container px-5 lg:max-w-screen-lg mx-auto">
            <div class="flex justify-between items-center text-sm text-neutral-500">
                <ul class="flex items-center gap-5">
                    <li class="py-2"><a href="" class="hover:text-orange-500">همه آگهی ها</a></li>
                    <li class="py-2"><a href="" class=" hover:text-orange-500">پشتیبانی</a></li>
                </ul>
                <ul class="flex items-center gap-5">
                    <li class="py-2">
                        <a href="#" class="flex items-center gap-2 hover:text-orange-500">
                            <span>چت های من</span>

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="w-6 h-6">
                                <path
                                    d="M4.913 2.658c2.075-.27 4.19-.408 6.337-.408 2.147 0 4.262.139 6.337.408 1.922.25 3.291 1.861 3.405 3.727a4.403 4.403 0 00-1.032-.211 50.89 50.89 0 00-8.42 0c-2.358.196-4.04 2.19-4.04 4.434v4.286a4.47 4.47 0 002.433 3.984L7.28 21.53A.75.75 0 016 21v-4.03a48.527 48.527 0 01-1.087-.128C2.905 16.58 1.5 14.833 1.5 12.862V6.638c0-1.97 1.405-3.718 3.413-3.979z"/>
                                <path
                                    d="M15.75 7.5c-1.376 0-2.739.057-4.086.169C10.124 7.797 9 9.103 9 10.609v4.285c0 1.507 1.128 2.814 2.67 2.94 1.243.102 2.5.157 3.768.165l2.782 2.781a.75.75 0 001.28-.53v-2.39l.33-.026c1.542-.125 2.67-1.433 2.67-2.94v-4.286c0-1.505-1.125-2.811-2.664-2.94A49.392 49.392 0 0015.75 7.5z"/>
                            </svg>
                        </a>
                    </li>
                    <li class="py-2 relative">
                        <a href="#" class="flex items-center gap-2 hover:text-orange-500"
                           @click.prevent="openMenu = ! openMenu" @click.away="openMenu = false">
                            <span>پشتیبانی</span>

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="w-6 h-6">
                                <path fill-rule="evenodd"
                                      d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                      clip-rule="evenodd"/>
                            </svg>

                        </a>

                        <ul :class="{ 'hidden': ! openMenu }"
                            class="hidden bg-white rounded-md shadow-sm py-4 px-6 absolute w-48 left-0 top-9 border border-gray-50 text-gray-600 space-y-3 text-sm">
                            <li><a class="hover:text-orange-500" href="./login.html">ورود | ثبت نام</a></li>
                            <li><a class="hover:text-orange-500" href="#">پسندیده ها</a></li>
                            <li><a class="hover:text-orange-500" href="#">آگهی های من</a></li>
                            <li><a class="hover:text-orange-500" href="#">خریدهای من</a></li>
                            <li><a class="hover:text-orange-500" href="#">مدیریت سفارش ها</a></li>
                            <li><a class="hover:text-orange-500" href="#">پروفایل من</a></li>
                            <li><a class="hover:text-orange-500" href="#">جستجوهای من</a></li>
                            <li><a class="hover:text-orange-500" href="#">پرداخت های من</a></li>
                            <li><a class="hover:text-orange-500" href="chat.html">چت های من</a></li>
                            <li><a class="hover:text-orange-500" href="#">خروج</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container px-5 lg:max-w-screen-lg mx-auto">
        <div class="flex items-center justify-between py-2">
            <a href="{{ route('front.home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="logo">
            </a>
            <a href="./submit.html"
               class="bg-blue-500 rounded-full px-4 py-2 text-sm text-white flex items-center hover:shadow-md cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd"
                          d="M12 5.25a.75.75 0 01.75.75v5.25H18a.75.75 0 010 1.5h-5.25V18a.75.75 0 01-1.5 0v-5.25H6a.75.75 0 010-1.5h5.25V6a.75.75 0 01.75-.75z"
                          clip-rule="evenodd"/>
                </svg>
                <span>ثبت آگهی رایگان</span>
            </a>
        </div>
    </div>
</header>

{{ $slot }}

<footer class="mt-8 hidden lg:block">

    <div class="bg-gray-200">
        <div class="container max-w-screen-lg mx-auto px-5 py-7">
            <div class="flex items-center gap-12">
                <ul class="text-gray-600 text-sm flex flex-col gap-3">
                    <li class="text-black font-medium"><strong>شیپور</strong></li>
                    <li><a href="#" class="hover:text-black">درباره شیپور</a></li>
                    <li><a href="#" class="hover:text-black">بلاگ</a></li>
                    <li><a href="#" class="hover:text-black">نقشه سایت</a></li>
                    <li><a href="#" class="hover:text-black">فرصت های شغلی</a></li>
                </ul>

                <ul class="text-gray-600 text-sm flex flex-col gap-3">
                    <li class="text-black font-medium"><strong>شیپور</strong></li>
                    <li><a href="#" class="hover:text-black">درباره شیپور</a></li>
                    <li><a href="#" class="hover:text-black">بلاگ</a></li>
                    <li><a href="#" class="hover:text-black">نقشه سایت</a></li>
                    <li><a href="#" class="hover:text-black">فرصت های شغلی</a></li>
                </ul>

                <ul class="text-gray-600 text-sm flex flex-col gap-3">
                    <li class="text-black font-medium"><strong>شیپور</strong></li>
                    <li><a href="#" class="hover:text-black">درباره شیپور</a></li>
                    <li><a href="#" class="hover:text-black">بلاگ</a></li>
                    <li><a href="#" class="hover:text-black">نقشه سایت</a></li>
                    <li><a href="#" class="hover:text-black">فرصت های شغلی</a></li>
                </ul>

                <div class="flex items-center flex-1 justify-center">
                    <img src="images/samandehi.png" alt="samandehi">
                    <img src="images/enamad.png" alt="enamad">
                    <img src="images/ecunion.png" alt="ecunion">
                </div>

                <ul class="flex flex-col gap-1">
                    <li class="bg-white shadow-sm rounded-md py-1 px-2">
                        <div class="flex items-center justify-between gap-3">
                            <div>
                                <p class="text-xs text-gray-400 font-medium">اپلیکیشن اندروید</p>
                                <p class="text-gray-800">دانلود مستقیم</p>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="w-4 h-4 fill-blue-500">
                                <path fill-rule="evenodd"
                                      d="M12 2.25a.75.75 0 01.75.75v11.69l3.22-3.22a.75.75 0 111.06 1.06l-4.5 4.5a.75.75 0 01-1.06 0l-4.5-4.5a.75.75 0 111.06-1.06l3.22 3.22V3a.75.75 0 01.75-.75zm-9 13.5a.75.75 0 01.75.75v2.25a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5V16.5a.75.75 0 011.5 0v2.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V16.5a.75.75 0 01.75-.75z"
                                      clip-rule="evenodd"/>
                            </svg>

                        </div>

                    </li>
                    <li class="bg-white shadow-sm rounded-md py-1 px-2">
                        <div class="flex items-center justify-between gap-3">
                            <div>
                                <p class="text-xs text-gray-400 font-medium">اپلیکیشن ios</p>
                                <p class="text-gray-800">دانلود مستقیم</p>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="w-4 h-4 fill-blue-500">
                                <path fill-rule="evenodd"
                                      d="M12 2.25a.75.75 0 01.75.75v11.69l3.22-3.22a.75.75 0 111.06 1.06l-4.5 4.5a.75.75 0 01-1.06 0l-4.5-4.5a.75.75 0 111.06-1.06l3.22 3.22V3a.75.75 0 01.75-.75zm-9 13.5a.75.75 0 01.75.75v2.25a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5V16.5a.75.75 0 011.5 0v2.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V16.5a.75.75 0 01.75-.75z"
                                      clip-rule="evenodd"/>
                            </svg>

                        </div>

                    </li>
                    <li class="bg-white shadow-sm rounded-md py-1 px-2">
                        <div class="flex items-center justify-between gap-3">
                            <div>
                                <p class="text-gray-800"> همه مارکت ها</p>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="w-4 h-4 fill-blue-500">
                                <path fill-rule="evenodd"
                                      d="M4.5 12a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zm6 0a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zm6 0a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z"
                                      clip-rule="evenodd"/>
                            </svg>


                        </div>

                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="bg-gray-300">
        <div class="container max-w-screen-lg mx-auto px-5 py-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <a href="https://laraplus.ir">
                        <img src="images/laraplus-logo.svg" alt="laraplus.ir logo" class="h-8" target="_blank">
                    </a>
                    <p>این وب سایت به عنوان پروژه
                        <a href="https://laraplus.ir/course/mastering-tailwindcss-from-zero-to-hero" target="_blank"
                           class="text-blue-500 pb-1 border-b border-blue-500 border-dashed hover:text-orange-500 hover:border-current">دوره
                            آموزش تیلویند سایت لاراپلاس
                        </a>
                        طراحی شده
                        و ارتباطی با سایت شیپور ندارد
                    </p>

                </div>

            </div>
        </div>

</footer>

<!-- footer mobile -->
<footer class="lg:hidden mt-5 sticky bottom-0">

    <div class="bg-white shadow-sm pt-2 px-5">
        <div class="container max-w-screen-md mx-auto">
            <nav class="flex items-center justify-between text-gray-500 text-sm md:text-base">
                <a href="./index.html" class="flex flex-col items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd"
                              d="M9.315 7.584C12.195 3.883 16.695 1.5 21.75 1.5a.75.75 0 01.75.75c0 5.056-2.383 9.555-6.084 12.436A6.75 6.75 0 019.75 22.5a.75.75 0 01-.75-.75v-4.131A15.838 15.838 0 016.382 15H2.25a.75.75 0 01-.75-.75 6.75 6.75 0 017.815-6.666zM15 6.75a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z"
                              clip-rule="evenodd"/>
                        <path
                            d="M5.26 17.242a.75.75 0 10-.897-1.203 5.243 5.243 0 00-2.05 5.022.75.75 0 00.625.627 5.243 5.243 0 005.022-2.051.75.75 0 10-1.202-.897 3.744 3.744 0 01-3.008 1.51c0-1.23.592-2.323 1.51-3.008z"/>
                    </svg>

                    <p>آگهی ها</p>

                </a>

                <a href="#" class="flex flex-col items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd"
                              d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                              clip-rule="evenodd"/>
                    </svg>


                    <p>پسندیده ها</p>

                </a>

                <a href="submit.html" class="flex flex-col items-center gap-2">
                    <div class="bg-blue-500 rounded-full w-7 h-7 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                             class="w-5 h-5 fill-white">
                            <path fill-rule="evenodd"
                                  d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </div>


                    <p>ثبت آگهی</p>

                </a>

                <a href="./chat.html" class="flex flex-col items-center gap-2">

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path
                            d="M4.913 2.658c2.075-.27 4.19-.408 6.337-.408 2.147 0 4.262.139 6.337.408 1.922.25 3.291 1.861 3.405 3.727a4.403 4.403 0 00-1.032-.211 50.89 50.89 0 00-8.42 0c-2.358.196-4.04 2.19-4.04 4.434v4.286a4.47 4.47 0 002.433 3.984L7.28 21.53A.75.75 0 016 21v-4.03a48.527 48.527 0 01-1.087-.128C2.905 16.58 1.5 14.833 1.5 12.862V6.638c0-1.97 1.405-3.718 3.413-3.979z"/>
                        <path
                            d="M15.75 7.5c-1.376 0-2.739.057-4.086.169C10.124 7.797 9 9.103 9 10.609v4.285c0 1.507 1.128 2.814 2.67 2.94 1.243.102 2.5.157 3.768.165l2.782 2.781a.75.75 0 001.28-.53v-2.39l.33-.026c1.542-.125 2.67-1.433 2.67-2.94v-4.286c0-1.505-1.125-2.811-2.664-2.94A49.392 49.392 0 0015.75 7.5z"/>
                    </svg>


                    <p> پیام ها</p>

                </a>

                <a href="#" class="flex flex-col items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd"
                              d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                              clip-rule="evenodd"/>
                    </svg>

                    <p> حساب من</p>

                </a>
            </nav>
        </div>
    </div>

</footer>

</body>

</html>

