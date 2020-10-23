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
        <a id="menu_button" class="btn btn-lg fixed-top menu_logo border-0 p-0" role="button">
            <span style="color: #f59f0d;" class="menu_logo_arrow"><i class="fas fa-arrow-up"></i></span>
            <p style="color: #f59f0d;">{{ __('Menu') }}</p>
        </a>


        <nav id="sidebar-wrapper" class="activeNav navscroll">
            <ul class="sidebar-nav">
                <li id="hover-only"><a href="/">{{ __('Welcome') }}</a></li>
                <li id="hover-only"><a href="about">{{ __('About') }}</a></li>
                <li id="hover-only"><a href="certificate">{{ __('Documents') }}</a></li>
                <li id="hover-only"><a href="demos">{{ __('Videos') }}</a></li>
                <li>
                    <div id="dropdown-caret-custom" class="dropright d-md-down-none">
                        <a class="d-flex" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="text-decoration: none; outline: none;">
                            {{ __('Custom') }}
                            <span id="caret-custom" class="caret right"></span>
                        </a>
                        <div id="dropdown-custom" class="dropdown-menu dropdown-main-menu">
                            <a class="dropdown-item font-weight-light" href="custom">{{ __('Colors') }}</a>
                            <a class="dropdown-item font-weight-light" href="packing">{{ __('Packing') }}</a>
                        </div>
                    </div>
                </li>
                <li id="hover-only"><a href="contacts">{{ __('Contacts') }}</a></li>
                <li>
                    @if(count(config('app.languages')) > 1)
                    <div id="dropdown-caret-language" class="dropright d-md-down-none">
                        <a class="d-flex" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="text-decoration: none; outline: none;">
                            {{ __('Language')}}
                            <span id="caret-language" class="caret right"></span>
                        </a>
                        <div id="dropdown-language" class="dropdown-menu dropdown-main-menu">
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

            <!-- FOOTER -->

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
                            <a class="text-muted" href="packing">
                                <li>{{ __('SuperPack & MegaPack') }}</li>
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
            $("#dropdown-caret-custom").on("hide.bs.dropdown", function() {
                $("#caret-custom").replaceWith('<span id="caret-custom" class="caret right"></span>');
            });
            $("#dropdown-caret-custom").on("show.bs.dropdown", function() {
                $("#caret-custom").replaceWith('<span id="caret-custom" class="caret left"></span>');
            });
            $("#dropdown-caret-language").on("hide.bs.dropdown", function() {
                $("#caret-language").replaceWith('<span id="caret-language" class="caret right"></span>');
            });
            $("#dropdown-caret-language").on("show.bs.dropdown", function() {
                $("#caret-language").replaceWith('<span id="caret-language" class="caret left"></span>');
            });
        });

        // Carousel for Packing page

        $('#card_carousel').each(function() {
            $(this).carousel({
                interval: 3000
            });
            $(this).on('click', '.left', function() {
                $(this).carousel('prev');
            });
            $(this).on('click', '.right', function() {
                $(this).carousel('next');
            });
        });
    </script>

</body>

</html>