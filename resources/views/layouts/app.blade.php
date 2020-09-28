<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-179133376-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-179133376-1');
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ URL::asset('/photo/new_logo_nonbackground.png') }}" type="image/x-icon" />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="resources/css/style.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


</head>

<body>
    <div id="app">
        <input type="image" src="photo/new_logo_nonbackground.png" id="sidebarCollapse" class="fixed-top" />
        <a href="javascript: void(0)" id="menu_button">
            <span class="fixed-top menu_logo_arrow"><i class="fas fa-arrow-up"></i></span>
            <strong class="fixed-top menu_logo">{{ __('Menu') }}</strong>
        </a>

        <nav id="sidebar-wrapper" class="activeNav navscroll">
            <ul class="sidebar-nav">
                <li id="hover-only"><a href="/">{{ __('Welcome') }}</a></li>
                <li id="hover-only"><a href="about">{{ __('About') }}</a></li>
                <li id="hover-only"><a href="certificate">{{ __('Documents') }}</a></li>
                <li id="hover-only"><a href="demos">{{ __('Videos') }}</a></li>
                <li id="hover-only"><a href="custom">{{ __('Custom') }}</a></li>
                <li id="hover-only"><a href="contacts">{{ __('Contacts') }}</a></li>
                <li>
                    @if(count(config('app.languages')) > 1)
                    <div id="dropdown-caret" class="dropright d-md-down-none">
                        <a class="d-flex" id="caret-language" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="text-decoration: none; outline: none;">
                            {{ __('Language')}}
                            <span id="caret-language-1" class="caret right"></span>
                        </a>
                        <div id="dropdown-caret-menu" class="dropdown-menu">
                            @foreach(config('app.languages') as $langLocale => $langName)
                            <a class="dropdown-item font-weight-light" href="{{ url()->current() }}?change_language={{ $langLocale }}">{{ strtoupper($langLocale) }} {{ $langName }}</a>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </li>
            </ul>
        </nav>

        <div class="wrapper-wide mx-auto">
            <main>
                @yield('content')
            </main>

            <footer class="container py-5">
                <div class="row">
                    <div class="col-6 col-md">
                        <div class="d-flex">
                            <img src="photo/new_logo_nonbackground.png" alt="logo" style="height: 30px; border-right: 1px solid #636b6f" class="pr-3">
                            <h5 class="pl-3"><a class="text-dark" href="{{ url('/') }}">{{ __('Faceshield') }}</a></h5>
                        </div>
                        <small class="d-block pt-3 text-muted">&copy; 2020</small>
                    </div>
                    <div class="col-6 col-md">
                        <h5><a class="text-dark" href="about">{{ __('About') }}</a></h5>
                        <ul class="list-unstyled text-small">
                            <a class="text-muted" href="about">
                                <li>{{ __('Box Content') }}</li>
                            </a>
                            <a class="text-muted" href="about#size">
                                <li>{{ __('Size') }}</li>
                            </a>
                            <a class="text-muted" href="about#masks">
                                <li>{{ __('Masks & Glasses') }}</li>
                            </a>
                            <a class="text-muted" href="about#disinfection">
                                <li>{{ __('Disinfection') }}</li>
                            </a>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5><a class="text-dark" href="certificate">{{ __('Documents') }}</a></h5>
                        <ul class="list-unstyled text-small">
                            <a class="text-muted" href="certificate">
                                <li>{{ __('Certificate') }}</li>
                            </a>
                            <a class="text-muted" href="certificate#tech-data">
                                <li>{{ __('Technical Data') }}</li>
                            </a>
                            <a class="text-muted" href="certificate#instructions">
                                <li>{{ __('Instructions') }}</li>
                            </a>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5><a class="text-dark" href="demos">{{ __('Videos') }}</a></h5>
                        <ul class="list-unstyled text-small">
                            <a class="text-muted" href="demos">
                                <li>{{ __('Replace the window') }}</li>
                            </a>
                            <a class="text-muted" href="demos#adjust-video">
                                <li>{{ __('Adjust the frame') }}</li>
                            </a>
                            <a class="text-muted" href="demos#whole-video">
                                <li>{{ __('Our Video') }}</li>
                            </a>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5><a class="text-dark" href="custom">{{ __('Custom') }}</a></h5>
                        <ul class="list-unstyled text-small">
                            <a class="text-muted" href="custom#color-change">
                                <li>{{ __('Change color') }}</li>
                            </a>
                            <a class="text-muted" href="custom#branding">
                                <li>{{ __('Branding') }}</li>
                            </a>
                            <a class="text-muted" href="custom#package">
                                <li>{{ __('Different package') }}</li>
                            </a>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5><a class="text-dark" href="contacts">{{ __('Contacts') }}</a></h5>
                        <ul class="list-unstyled text-small">
                            <a class="text-muted" href="contacts#email-contact">
                                <li>{{ __('Email:') }} shield@transgraph.eu</li>
                            </a>
                            <a class="text-muted" href="contacts#email-contact">
                                <li>{{ __('Phone:') }} +359899904690</li>
                            </a>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script>
        $(function() {
            $('#form').submit(function(event) {
                var verified = grecaptcha.getResponse();
                if (verified.length === 0) {
                    event.preventDefault();
                }
            });
        });
    </script>

    <script>
        // logo-button 

        $(document).ready(function() {

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar-wrapper').toggleClass('activeNav');
            });

        });

        // menu-button

        $(function() {
            $("#menu_button").bind("click", function() {
                $('#sidebar-wrapper').toggleClass('activeNav');
            });
        });

        // Close the menu when scrolling
        var isActive = document.getElementsByClassName('activeNav');

        $(document).ready(function() {
            $(function() {
                $(window).scroll(function() {

                    if ($(this).scrollTop() > 100 && (isActive.length <= 0)) {
                        $('.navscroll').toggleClass('activeNav');
                    }
                });
            });
        });

        // Caret Left and Right
        $(document).ready(function() {
            $("#dropdown-caret").on("hide.bs.dropdown", function() {
                $("#caret-language-1").replaceWith('<span id="caret-language-1" class="caret right"></span>');
            });
            $("#dropdown-caret").on("show.bs.dropdown", function() {
                $("#caret-language-1").replaceWith('<span id="caret-language-1" class="caret left"></span>');
            });
        });
    </script>

</body>

</html>