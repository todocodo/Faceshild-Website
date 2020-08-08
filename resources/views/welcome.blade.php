<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">

    <title>Faceshield</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link href="{{ asset('css/product.css') }}" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
        <nav id="sidebar-wrapper" class="activeNav navscroll">
            <ul class="sidebar-nav">
                <li><a href="about">About</a></li>
                <li><a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle dropdown-toggle-side">Media</a></li>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li><a href="image">Images</a></li>
                    <li><a href="#">Videos</a></li>
                    <li><a href="demos">Demos</a></li>
                </ul>
                <li><a href="goal">Goal</a></li>
                <li><a href="order">Order</a></li>
                <li><a href="contacts">Contacts</a></li>
            </ul>
        </nav>
        <div id="page-content-wrapper">
            <div class="page-content">

                <input type="image" src="photo/new_logo_nonbackground.png" id="sidebarCollapse" class="fixed-top-logo" />

                <div class="p-3 p-md-5 m-lg-3 text-center welcome-image-first welcome-size-1">
                    <div class="col-md-5 p-lg-5 mx-auto my-5">
                        <h1 class="display-4 font-weight-normal">Faceshield</h1>
                        <p class="lead font-weight-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple’s marketing pages.</p>
                        <a class="btn btn-outline-secondary" href="#">Coming soon</a>
                    </div>
                    <!-- <div class="product-device shadow-sm d-none d-md-block">Hello</div>
                    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div> -->
                </div>

                <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
                    <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
                        <div class="my-3 py-3">
                            <h2 class="display-5">Another headline</h2>
                            <p class="lead">And an even wittier subheading.</p>
                        </div>
                        <div class="welcome-image-second shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
                    </div>
                    <div class="welcome-image-second mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden  welcome-size-2">
                        <div class="my-3 p-3">
                            <h2 class="display-5">Another headline</h2>
                            <p class="lead">And an even wittier subheading.</p>
                        </div>
                    </div>
                </div>

                <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
                    <div class="welcome-image-third mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden welcome-size-2">
                        <div class="my-3 p-3">
                            <h2 class="display-5">Another headline</h2>
                            <p class="lead">And an even wittier subheading.</p>
                        </div>
                    </div>
                    <div class="welcome-image-forth mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden welcome-size-2">
                        <div class="my-3 py-3">
                            <h2 class="display-5">Another headline</h2>
                            <p class="lead">And an even wittier subheading.</p>
                        </div>
                    </div>
                </div>

                <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
                    <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                        <div class="my-3 p-3">
                            <h2 class="display-5">Another headline</h2>
                            <p class="lead">And an even wittier subheading.</p>
                        </div>
                        <div class="bg-white shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
                    </div>
                    <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                        <div class="my-3 py-3">
                            <h2 class="display-5">Another headline</h2>
                            <p class="lead">And an even wittier subheading.</p>
                        </div>
                        <div class="bg-white shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
                    </div>
                </div>

                <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
                    <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                        <div class="my-3 p-3">
                            <h2 class="display-5">Another headline</h2>
                            <p class="lead">And an even wittier subheading.</p>
                        </div>
                        <div class="bg-white shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
                    </div>
                    <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                        <div class="my-3 py-3">
                            <h2 class="display-5">Another headline</h2>
                            <p class="lead">And an even wittier subheading.</p>
                        </div>
                        <div class="bg-white shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
                    </div>
                </div>

                <footer class="container py-5">
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
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')
    </script>
    <script src="../assets/dist/js/bootstrap.bundle.js"></script>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

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