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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

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
                <a class="navbar-brand d-felx" href="{{ url('/') }}">
                    <!-- <img src="photo/new_logo_nonbackground.png" alt="logo" style="height: 30px;" class="pr-2">  -->
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" style="outline: none;" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon text-white" style="outline: none;"><i class="fas fa-bars"></i></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('certificate') }}">Certificate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('demos') }}">Videos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('custom') }}">Custom</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contacts') }}">Contact</a>
                        </li>
                        <!-- LOG in and REGISTER -->
                        <!-- @guest
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
                        @endguest -->
                    </ul>
                </div>
            </div>
        </nav>

        <main>
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
                        <li>Product</li>
                        <li>Disinfection</li>
                        <li>Storage</li>
                        <li>Certificate</li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5><a class="text-dark" href="demos">Videos</a></h5>
                    <ul class="list-unstyled text-small">
                        <li>Replace the window</li>
                        <li>Adjust the frame</li>
                        <li>Our Video</li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5><a class="text-dark" href="order">Order</a></h5>
                    <ul class="list-unstyled text-small">
                        <li>Single</li>
                        <li>Box</li>
                        <li>Europallet</li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5><a class="text-dark" href="contacts">Contacts</a></h5>
                    <ul class="list-unstyled text-small">
                        <li>Email: blabla@bla.com</li>
                        <li>Phone: +35989999999</li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>