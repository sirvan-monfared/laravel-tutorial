<div class="container lg:max-w-screen-lg mx-auto mt-2 mb-1">
    @session('success')
    <p class="py-2 px-4 bg-emerald-500 text-white rounded-md ">{{ $value }}</p>
    @endsession

    @session('fail')
    <p class="py-2 px-4 bg-rose-500 text-white rounded-md">{{ $value }}</p>
    @endsession
</div>
