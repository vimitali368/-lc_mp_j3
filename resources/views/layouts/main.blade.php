<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <titleСайт портфолио Алексеева К. П.</title>
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/loader.js') }}"></script>
</head>
<body>
<div class="edica-loader"></div>
<header class="edica-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{ asset('/') }}">Алексеев К. П.</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav"
                    aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="edicaMainNav">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('main.index') }}">Тематические фотосессии</a>
                    </li>
{{--                    <li class="nav-item ">--}}
{{--                        <a class="nav-link" href="{{ route('category.index') }}">Категории</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item ">--}}
{{--                        @auth()--}}
{{--                            <a class="nav-link" href="{{ route('personal.main.index') }}">Личный кабинет</a>--}}
{{--                        @endauth--}}
{{--                        @guest()--}}
{{--                            <a class="nav-link" href="{{ route('personal.main.index') }}">Войти</a>--}}
{{--                        @endguest--}}
{{--                    </li>--}}
{{--                    @auth()--}}
{{--                        <li class="nav-item">--}}
{{--                            <form action="{{ route('logout') }}" method="POST">--}}
{{--                                @csrf--}}
{{--                                <input class="btn btn-link" type="submit" value="Выйти">--}}
{{--                            </form>--}}
{{--                        </li>--}}
{{--                    @endauth--}}
                </ul>
            </div>
        </nav>
    </div>
</header>
@yield('content')
<footer class="edica-footer" data-aos="fade-up">
    <div class="container">
        <div class="row footer-widget-area">
            <div class="col-md-3">
                <a href="{{ asset('/') }}" class="footer-brand-wrapper">
                    Алексеев К. П.
                </a>
                <p class="contact-details">alekseev@alekseev.loc</p>
                <p class="contact-details">+7 777 000 000</p>
                <nav class="footer-social-links">
                    <a href="{{ asset('#!') }}"><i class="fab fa-facebook-f"></i></a>
                    <a href="{{ asset('#!') }}"><i class="fab fa-twitter"></i></a>
                    <a href="{{ asset('#!') }}"><i class="fab fa-behance"></i></a>
                    <a href="{{ asset('#!') }}"><i class="fab fa-dribbble"></i></a>
                </nav>
            </div>
        </div>
        <div class="footer-bottom-content">
            <p class="mb-0">© Сайт портфолио Алексеева К. П. </p>
        </div>
    </div>
</footer>
<script src="{{ asset('assets/vendors/popper.js/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendors/aos/aos.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script>
    AOS.init({
        duration: 1000
    });
</script>
</body>

</html>
