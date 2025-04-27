<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>
        eCommerce Dashboard | TailAdmin - Tailwind CSS Admin Dashboard Template
    </title>

    @vite(['resources/css/admin.css', 'resources/js/admin.js'])
</head>

<body dir="rtl"
    x-data="{ page: 'ecommerce', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
    x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'dark text-bodydark bg-boxdark-2': darkMode === true}"
>
<!-- ===== Preloader Start ===== -->
{{--    @include('admin.home.partials.p reloader')--}}
<!-- ===== Preloader End ===== -->

<!-- ===== Page Wrapper Start ===== -->
<div class="flex h-screen overflow-hidden">
    <!-- ===== Sidebar Start ===== -->
    @include("admin.home.partials.sidebar")
    <!-- ===== Sidebar End ===== -->

    <!-- ===== Content Area Start ===== -->
    <div
        class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden"
    >
        <!-- ===== Header Start ===== -->
        @include("admin.home.partials.header")
        <!-- ===== Header End ===== -->
        <main>
            <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
                <x-admin.ui.alert/>

                {{ $slot }}
            </div>
        </main>

    </div>
    <!-- ===== Content Area End ===== -->
</div>
    {{ $js ?? null }}
</body>
</html>
