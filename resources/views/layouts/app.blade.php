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
        <input type="image" src="../photo/new_logo_nonbackground.png" id="sidebarCollapse" class="fixed-top" />
        <a id="menu_button" class="btn btn-lg fixed-top menu_logo border-0 p-0" role="button">
            <span style="color: #f59f0d;" class="menu_logo_arrow"><i class="fas fa-arrow-up"></i></span>
            <p style="color: #f59f0d;">{{ __('Menu') }}</p>
        </a>

        <div class="fixed-top">
            @if (Route::has('login'))
            <div class="top-right links">
                @if(Auth::user())
                <a href="{{ url('/logout') }}">Logout</a>
                <div class="widget-header">
                    <a href="/cart" class="icon icon-sm rounded-circle border"><i class="fa fa-shopping-cart"></i></a>
                    <span class="badge badge-pill badge-danger notify">5</span>
                </div>
                @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
                <div class="widget-header">
                    <a href="/cart" class="icon icon-sm rounded-circle border"><i class="fa fa-shopping-cart"></i></a>
                    <span class="badge badge-pill badge-danger notify">5</span>
                </div>
                @endif

            </div>
            @endif
        </div>

        @include('partials.navbar')

        <div class="wrapper-wide mx-auto">
            <main>
                @yield('content')
            </main>

            <!-- FOOTER -->
            @include('partials.footer')
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

        $(document).ready(function() {
            $('.js-check :radio').change(function() {
                var check_attr_name = $(this).attr('name');
                if ($(this).is(':checked')) {
                    $('input[name=' + check_attr_name + ']').closest('.js-check').removeClass('active');
                    $(this).closest('.js-check').addClass('active');
                    // item.find('.radio').find('span').text('Add');

                } else {
                    item.removeClass('active');
                    // item.find('.radio').find('span').text('Unselect');
                }
            });
        });
    </script>

</body>

</html>