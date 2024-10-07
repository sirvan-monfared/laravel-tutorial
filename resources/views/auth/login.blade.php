<x-layout.app>


    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')"/>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <x-text-input title="Email" id="email" type="email" name="email" :value="old('email')" required
                              autofocus autocomplete="username"/>

                <x-text-input title="password" id="password" type="password" name="password"
                              :value="old('password')" required/>

                <div class="form-check">
                    <input class="form-check-input" name="remember_me" type="checkbox" value="">
                    <label class="form-check-label" for="flexCheckDefault">
                        Remember Me
                    </label>
                </div>

                <div class="clearfix"></div>

                <button type="submit" class="btn btn-primary mt-4">Login</button>

                <!-- Password -->
                {{--        <div class="mt-4">--}}
                {{--            <x-input-label for="password" :value="__('Password')" />--}}

                {{--            <x-text-input id="password" class="block mt-1 w-full"--}}
                {{--                            type="password"--}}
                {{--                            name="password"--}}
                {{--                            required autocomplete="current-password" />--}}

                {{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
                {{--        </div>--}}

                {{--        <!-- Remember Me -->--}}
                {{--        <div class="block mt-4">--}}
                {{--            <label for="remember_me" class="inline-flex items-center">--}}
                {{--                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">--}}
                {{--                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
                {{--            </label>--}}
                {{--        </div>--}}

                {{--        <div class="flex items-center justify-end mt-4">--}}
                {{--            @if (Route::has('password.request'))--}}
                {{--                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">--}}
                {{--                    {{ __('Forgot your password?') }}--}}
                {{--                </a>--}}
                {{--            @endif--}}

                {{--            <x-primary-button class="ms-3">--}}
                {{--                {{ __('Log in') }}--}}
                {{--            </x-primary-button>--}}
                {{--        </div>--}}
            </form>
        </div>
    </div>

</x-layout.app>
