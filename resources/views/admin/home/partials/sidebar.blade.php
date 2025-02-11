<aside
  :class="sidebarToggle ? 'translate-x-0' : '-translate-x-full'"
  class="absolute left-0 top-0 z-9999 flex h-screen w-72.5 flex-col overflow-y-hidden bg-black duration-300 ease-linear dark:bg-boxdark lg:static lg:translate-x-0"
  @click.outside="sidebarToggle = false"
>
  <!-- SIDEBAR HEADER -->
  <div class="flex items-center justify-between gap-2 px-6 py-5.5 lg:py-6.5">
    <a href="{{ route('admin.home') }}">
      <img src="{{ asset('admin/images/logo/logo.svg') }}" alt="Logo" />
    </a>

    <button
      class="block lg:hidden"
      @click.stop="sidebarToggle = !sidebarToggle"
    >
      <svg
        class="fill-current"
        width="20"
        height="18"
        viewBox="0 0 20 18"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M19 8.175H2.98748L9.36248 1.6875C9.69998 1.35 9.69998 0.825 9.36248 0.4875C9.02498 0.15 8.49998 0.15 8.16248 0.4875L0.399976 8.3625C0.0624756 8.7 0.0624756 9.225 0.399976 9.5625L8.16248 17.4375C8.31248 17.5875 8.53748 17.7 8.76248 17.7C8.98748 17.7 9.17498 17.625 9.36248 17.475C9.69998 17.1375 9.69998 16.6125 9.36248 16.275L3.02498 9.8625H19C19.45 9.8625 19.825 9.4875 19.825 9.0375C19.825 8.55 19.45 8.175 19 8.175Z"
          fill=""
        />
      </svg>
    </button>
  </div>
  <!-- SIDEBAR HEADER -->

  <div
    class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-linear"
  >
    <!-- Sidebar Menu -->
    <nav
      class="mt-5 px-4 py-4 lg:mt-9 lg:px-6"
      x-data="{selected: $persist('Dashboard')}"
    >
      <!-- Menu Group -->
      <div>
        <h3 class="mb-4 ml-4 text-sm font-medium text-bodydark2">MENU</h3>

        <ul class="mb-6 flex flex-col gap-1.5">


          <x-admin.menu.menu-item name="dashboard" title="پیشخوان" href="{{ route('admin.home') }}">
              <x-slot:icon><x-mdi-home /></x-slot:icon>
          </x-admin.menu.menu-item>

            <x-admin.menu.menu-item name="ad" title="آگهی ها">
                <x-slot:icon>
                    <x-mdi-bullhorn-outline />
                </x-slot:icon>
                <x-admin.menu.submenu-item title="مدیریت آگهی ها" href="{{ route('admin.ad.index') }}"></x-admin.menu.submenu-item>
                <x-admin.menu.submenu-item title="افزودن آگهی جدید" href="{{ route('admin.ad.create') }}"></x-admin.menu.submenu-item>
            </x-admin.menu.menu-item>

            <x-admin.menu.menu-item name="category" title="دسته بندی ها">
                <x-slot:icon>
                    <x-mdi-list-box-outline/>
                </x-slot:icon>
                <x-admin.menu.submenu-item title="مدیریت دسته ها" href="{{ route('admin.category.index') }}"></x-admin.menu.submenu-item>
                <x-admin.menu.submenu-item title="ساخت دسته جدید" href="{{ route('admin.category.create') }}"></x-admin.menu.submenu-item>
            </x-admin.menu.menu-item>

            <x-admin.menu.menu-item name="location" title="لوکیشن ها">
                <x-slot:icon>
                    <x-mdi-map-marker-check-outline />
                </x-slot:icon>
                <x-admin.menu.submenu-item title="مدیریت لوکیشن ها" href="{{ route('admin.location.index') }}"></x-admin.menu.submenu-item>
                <x-admin.menu.submenu-item title="ساخت لوکیشن جدید" href="{{ route('admin.location.create') }}"></x-admin.menu.submenu-item>
            </x-admin.menu.menu-item>

            <x-admin.menu.menu-item name="user" title="مدیریت کاربرها">
                <x-slot:icon>
                    <x-mdi-account-group-outline />
                </x-slot:icon>
                <x-admin.menu.submenu-item title="مدیریت کاربرها" href="{{ route('admin.user.index') }}"></x-admin.menu.submenu-item>
                <x-admin.menu.submenu-item title="ساخت کاربر جدید" href="{{ route('admin.user.create') }}"></x-admin.menu.submenu-item>
            </x-admin.menu.menu-item>

            <x-admin.menu.menu-item name="order" title="مدیریت پرداخت ها" href="{{ route('admin.order.index') }}">
                <x-slot:icon><x-mdi-cart-variant /></x-slot:icon>
            </x-admin.menu.menu-item>

            <x-admin.menu.menu-item name="website" title="مشاهده سایت" href="{{ route('front.home') }}" target="_blank">
                <x-slot:icon><x-mdi-earth /></x-slot:icon>
            </x-admin.menu.menu-item>

          <!-- Menu Item Settings -->
        </ul>
      </div>

    </nav>
    <!-- Sidebar Menu -->

  </div>
</aside>
