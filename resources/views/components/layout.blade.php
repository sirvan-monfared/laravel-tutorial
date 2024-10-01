<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laraplus Customer' }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>

<div class="row">
    @guest
        <nav>
            <ul style="display: flex; align-items: center; gap: 16px; list-style: none; font-size: 20px">
                <li>
                    <a href="{{ route('login') }}" class="text-black">Login</a>
                </li>
                <li>
                    <a href="{{ route('auth.register') }}"  class="text-black">Register</a>
                </li>
            </ul>
        </nav>
    @endguest
    @auth
        <nav>
            <ul style="display: flex; align-items: center; gap: 16px; list-style: none; font-size: 20px">
                <li>
                    <form action="{{ route('auth.logout') }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-secondary">Logout</button>
                    </form>

                </li>
            </ul>
        </nav>
    @endauth
</div>

{{ $slot }}

<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('assets/js/fontawesome.js') }}"></script>


{{ $js ?? null }}

</body>
</html>
