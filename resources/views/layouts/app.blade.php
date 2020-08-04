<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="resources/css/style.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar fixed-top navbar-expand-md shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" style="outline: none;" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon" style="outline: none;"><i class="fas fa-bars"></i></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Media
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('image') }}">Images</a>
                                <a class="dropdown-item" href="#">Videos</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Demos</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('goal') }}">Goal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('order') }}">Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contacts') }}">Contact</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="container py-4 mt-5">
            @yield('content')
        </main>

        <footer class="container py-5 border-top">
            <div class="row">
                <div class="col-6 col-md">
                    <div class="d-flex">
                        <img src="photo/new_logo_nonbackground.png" alt="logo" style="height: 30px; border-right: 1px solid #636b6f" class="pr-3">
                        <h5 class="pl-3"><a class="text-dark" herf="{{ url('/') }}">Faceshield</a></h5>
                    </div>
                    <small class="d-block pt-3 text-muted">&copy; 2020</small>
                </div>
                <div class="col-6 col-md">
                    <h5><a class="text-dark" href="about">About</a></h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Our Story</a></li>
                        <li><a class="text-muted" href="#">Our Goal</a></li>
                        <li><a class="text-muted" href="#">Team</a></li>
                        <li><a class="text-muted" href="#">Product</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5><a class="text-dark" href="#">Media</a></h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="image">Images</a></li>
                        <li><a class="text-muted" href="#">Videos</a></li>
                        <li><a class="text-muted" href="#">Demos</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5><a class="text-dark" href="order">Order</a></h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Single</a></li>
                        <li><a class="text-muted" href="#">Box</a></li>
                        <li><a class="text-muted" href="#">Europallet</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5><a class="text-dark" href="contacts">Contacts</a></h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Email: blabla@bla.com</a></li>
                        <li><a class="text-muted" href="#">Phone: +35989999999</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>