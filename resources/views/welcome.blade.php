<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">

    <title>Faceshield</title>

    <!-- 
        REFESH THE CPANEL ---------  CTRL Shift R
     -->

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
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Material Design Bootstrap -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet"> -->

</head>

<body>
    <div id="wrapper">
        <nav id="sidebar-wrapper" class="activeNav navscroll">
            <ul class="sidebar-nav">
                <li><a href="about">About</a></li>
                <li><a href="certificate">Documents</a></li>
                <li><a href="demos">Videos</a></li>
                <li><a href="custom">Custom</a></li>
                <li><a href="contacts">Contacts</a></li>
            </ul>
        </nav>
        <div id="page-content-wrapper">
            <div class="page-content">

                <!-- Menu - Logo -->
                <input type="image" src="photo/new_logo_nonbackground.png" id="sidebarCollapse" class="fixed-top" />
                <span class="fixed-top menu_logo_arrow"><i class="fas fa-arrow-up"></i></span>
                <strong class="fixed-top menu_logo">Menu</strong>

                <!-- Image 1 -->
                <div class="p-3 p-md-5 mb-lg-3 welcome-image-first welcome-size-1">
                    <!-- <h1 class="text-dark welcome-title"><span style="color: #f59f0d;"><i class="fas fa-arrow-left"></i></span><a id="sidebarCollapse" class="ml-3">Menu</a></h1> -->

                    <div class="p-lg-5 ml-5 text-center my-5">
                        <div class="row">
                            <div class="col-xl-6 col-md-7">
                                <div class="row">
                                    <div class="col-xl-5">
                                        <h2 id="heading">Professional</h2>
                                        <p class="s3">Faceshield</p>
                                    </div>
                                    <div class="col-xl-7 ml-1 mt-2">
                                        <img src="realphotos/Logo_5in1_noback.png" alt="5in1_logo" style="height: 120px;">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- <h1 class="display-4 font-weight-normal">Faceshield 5 in 1</h1> -->
                        <!-- <p class="lead font-weight-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple’s marketing pages.</p>
                        <a class="btn btn-outline-secondary" href="#">Coming soon</a> -->
                    </div>
                </div>

                <!-- Section 2 -->
                <div class="d-md-flex flex-md-equal w-100">
                    <a href="{{ route('demos') }}" style="text-decoration: none; color: black;">
                        <div class="welcome-image-second mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden  welcome-size-2">
                            <div class="my-3 p-3">
                                <h2 class="display-5" style="color: #f59f0d;">1 Frame and 5 windows</h2>
                                <p class="lead" style="color: #f59f0d;">Easy replacement.</p>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('about') }}" style="text-decoration: none; color: black;">
                        <div class="welcome-image-third pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden  welcome-size-2">
                            <div class="my-3 p-3">
                            <h2 class="display-5" style="color: #f59f0d;">Only 46 grams</h2>
                                <p class="lead" style="color: #f59f0d;">Incredibly lightweight</p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Section 3 -->
                <div class="d-md-flex flex-md-equal w-100 my-md-3">
                    <a href="{{ route('custom') }}" style="text-decoration: none; color: black;">
                        <div class="welcome-image-forth mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden  welcome-size-2">
                            <div class="my-3 p-3">
                                <h2 class="display-5" style="color: #f59f0d;">Customize the box</h2>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('custom') }}" style="text-decoration: none; color: black;">
                        <div class="welcome-image-third pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden  welcome-size-2">
                            <div class="my-3 p-3">
                                <h2 class="display-5" style="color: #f59f0d;">Brand the Faceshield</h2>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Carousel with images -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div id="image_1" class="carousel-item active">
                            <img src="../realphotos/barber.jpg" alt="barber" style="height: 100%; width: 100%;">
                            <div class="container">
                                <div class="carousel-caption text-left">
                                    <h1 class="text_custom_carousel">Use for any occasion</h1>
                                </div>
                            </div>
                        </div>
                        <div id="image_2" class="carousel-item">
                            <img src="../realphotos/barber_package.jpg" alt="barber_package" style="height: 100%; width: 100%;">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1 class="text_custom_carousel">At the office</h1>

                                </div>
                            </div>
                        </div>
                        <div id="image_3" class="carousel-item">
                            <img src="../realphotos/barber_glasses_1.jpg" alt="barber_glasses_1" style="height: 100%; width: 100%;">
                            <div class="container">
                                <div class="carousel-caption text-right">
                                    <h1 class="text_custom_carousel">Or at home</h1>
                                    <!-- <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
                                        metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!-- END of Carousel -->

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

                <!-- Footer -->

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