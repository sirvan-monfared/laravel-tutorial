<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi"/>
    <title>{{ $title ?? 'Ecommerce' }}</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    {{ $css ?? null }}
</head>

<body>


<!--============================
    MENU START
=============================-->
<nav class="navbar navbar-expand-lg main_menu">
    <div class="container">
        <a class="navbar-brand" href="{{ route('front.home') }}">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Freeit" class="img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <i class="far fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blogs.html">Blog</a>
                </li>
            </ul>
            <ul class="right_menu d-flex flex-wrap align-items-center">
                <li>
                    <x-cart-link />
                </li>
                @guest
                    <li>
                        <a href="{{ route('login') }}" class="common_btn">Login</a>
                    </li>
                @endguest
                @auth
                    <li>
                        <a href="{{ route('dashboard') }}" class="common_btn">Dashboard</a>
                    </li>

                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button type="submit" class="btn">Logout</button>
                        </form>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
<!--============================
    MENU END
=============================-->


<!--============================
    PRODUCT START
=============================-->
<section class="wsus__product mt_145 pb_100">
        <div class="container">
            {{ $slot }}
        </div>
    </section>
<!--============================
        PRODUCT END
    =============================-->


<!--============================
    FOOTER START
=============================-->
<footer class="pt_100 pb_100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer_text">
                    <a class="footer_logo" href="index.html">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Freeit" class="img-fluid">
                    </a>
                    <ul class="d-flex flex-wrap">
                        <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                    </ul>
                    <p>Copyright © 2025 All Rights Reserved by Freeit</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--============================
    FOOTER END
=============================-->


<!--jquery library js-->
<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
<!--bootstrap js-->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<!--font-awesome js-->
<script src="{{ asset('assets/js/Font-Awesome.js') }}"></script>

<!--main/custom js-->
<script src="{{ asset('assets/js/main.js') }}"></script>


{{ $js ?? null }}
</body>

</html>
