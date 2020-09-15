<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
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
        <span class="fixed-top menu_logo_arrow"><i class="fas fa-arrow-up"></i></span>
        <strong class="fixed-top menu_logo">Menu</strong>

        <nav id="sidebar-wrapper" class="activeNav navscroll">
            <ul class="sidebar-nav">
                <li><a href="/">Welcome</a></li>
                <li><a href="about">About</a></li>
                <li><a href="certificate">Documents</a></li>
                <li><a href="demos">Videos</a></li>
                <li><a href="custom">Custom</a></li>
                <li><a href="contacts">Contacts</a></li>
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
                            <h5 class="pl-3"><a class="text-dark" href="{{ url('/') }}">Faceshield</a></h5>
                        </div>
                        <small class="d-block pt-3 text-muted">&copy; 2020</small>
                    </div>
                    <div class="col-6 col-md">
                        <h5><a class="text-dark" href="about">About</a></h5>
                        <ul class="list-unstyled text-small">
                            <a class="text-muted" href="about">
                                <li>Product</li>
                            </a>
                            <a class="text-muted" href="about">
                                <li>Disinfection</li>
                            </a>
                            <a class="text-muted" href="about">
                                <li>Storage</li>
                            </a>
                            <a class="text-muted" href="about">
                                <li>Certificate</li>
                            </a>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5><a class="text-dark" href="certificate">Documents</a></h5>
                        <ul class="list-unstyled text-small">
                            <a class="text-muted" href="certificate">
                                <li>Certificate</li>
                            </a>
                            <a class="text-muted" href="certificate">
                                <li>Technical Data</li>
                            </a>
                            <a class="text-muted" href="certificate">
                                <li>Instructions</li>
                            </a>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5><a class="text-dark" href="demos">Videos</a></h5>
                        <ul class="list-unstyled text-small">
                            <a class="text-muted" href="demos">
                                <li>Replace the window</li>
                            </a>
                            <a class="text-muted" href="demos">
                                <li>Adjust the frame</li>
                            </a>
                            <a class="text-muted" href="demos">
                                <li>Our Video</li>
                            </a>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5><a class="text-dark" href="custom">Custom</a></h5>
                        <ul class="list-unstyled text-small">
                            <a class="text-muted" href="custom">
                                <li>Change color</li>
                            </a>
                            <a class="text-muted" href="custom">
                                <li>Branding</li>
                            </a>
                            <a class="text-muted" href="custom">
                                <li>Different package</li>
                            </a>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5><a class="text-dark" href="contacts">Contacts</a></h5>
                        <ul class="list-unstyled text-small">
                            <a class="text-muted" href="contacts">
                                <li>Email: shield@transgraph.eu</li>
                            </a>
                            <a class="text-muted" href="contacts">
                                <li>Phone: +359899904690</li>
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
        $(document).ready(function() {

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar-wrapper').toggleClass('activeNav');
            });

        });

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
    </script>

</body>

</html>