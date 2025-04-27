<div class="col-span-3"></div>
<x-admin.ui.card class="col-span-6 space-y-5">
    <x-admin.form.input name="name" title="نام و نام خانوادگی" :value="$user->name"/>

    <x-admin.form.input type="email" name="email" title="ایمیل" :value="$user->email"/>

    @if(request()->routeIs('admin.user.create'))
        <x-admin.form.input type="password" name="password" title="رمزعبور"/>
        <x-admin.form.input type="password" name="password_confirmation" title="تکرار رمزعبور"/>
    @endif

</x-admin.ui.card>
<div class="col-span-3"></div>
