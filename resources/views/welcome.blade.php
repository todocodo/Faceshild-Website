<!DOCTYPE html>
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

    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">

    <title>Faceshield</title>

    <link rel="icon" href="{{ URL::asset('/photo/new_logo_nonbackground.png') }}" type="image/x-icon" />

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
    @include('partials.navbar')

    <div class="wrapper-wide mx-auto">
        <div id="wrapper">
            <div id="page-content-wrapper">
                <div class="page-content">

                    <!-- Menu - Logo -->
                    <input type="image" src="photo/new_logo_nonbackground.png" id="sidebarCollapse" class="fixed-top" />
                    <a id="menu_button" class="btn btn-lg fixed-top menu_logo border-0 p-0" role="button">
                        <span style="color: #f59f0d;" class="menu_logo_arrow"><i class="fas fa-arrow-up"></i></span>
                        <p style="color: #f59f0d;">{{ __('Menu') }}</p>
                    </a>

                    <!-- Image 1 -->
                    <div class="p-3 p-md-5 mb-lg-3 welcome-image-first welcome-size-1">
                        <!-- <h1 class="text-dark welcome-title"><span style="color: #f59f0d;"><i class="fas fa-arrow-left"></i></span><a id="sidebarCollapse" class="ml-3">Menu</a></h1> -->

                        <div class="p-lg-5 ml-5 text-center my-5">
                            <div class="row">
                                <div class="col-xl-6 col-md-7">
                                    <div class="row">
                                        <div class="col-xl-5">
                                            <h2 id="heading">{{ __('Professional') }}</h2>
                                            <p class="s3">{{ __('Faceshield') }}</p>
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

                    <div class="text-center mb-3">
                        <a href="/products" class="btn text-white mr-3" style="background-color: #f59f0d; width: 200px; border-radius: 30px 30px 30px 30px;">Order Now</a>
                    </div>

                    <!-- Section 2 -->
                    <div class="d-md-flex flex-md-equal w-100">
                        <a href="{{ route('about') }}" style="text-decoration: none; color: black;">
                            <div class="welcome-image-second mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden  welcome-size-2">
                                <div class="my-3 p-3">
                                    <h2 class="display-5" style="color: #f59f0d;">{{ __('1 Frame and 5 Protective Shields') }}</h2>
                                    <p class="lead" style="color: #f59f0d;">{{ __('Easy Replacement.') }}</p>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('about') }}" style="text-decoration: none; color: black;">
                            <div class="welcome-image-third pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden  welcome-size-2">
                                <div class="my-3 p-3">
                                    <h2 class="display-5" style="color: #f59f0d;">{{ __('Only 46 Grams') }}</h2>
                                    <p class="lead" style="color: #f59f0d;">{{ __('Incredibly Lightweight') }}</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Section 3 -->
                    <div class="d-md-flex flex-md-equal w-100 my-md-3">
                        <a href="{{ route('custom') }}" style="text-decoration: none; color: black;">
                            <div class="welcome-image-forth mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden  welcome-size-2">
                                <div class="my-3 p-3">
                                    <h2 class="display-5" style="color: #f59f0d;">{{ __('Customisable Box') }}</h2>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('custom') }}" style="text-decoration: none; color: black;">
                            <div class="welcome-image-fifth pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden  welcome-size-2">
                                <div class="my-3 p-3">
                                    <h2 class="display-5" style="color: #f59f0d;">{{ __('Brand the Faceshield') }}</h2>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Section 4 -->
                    <div class="d-md-flex flex-md-equal w-100 my-md-3">
                        <a href="{{ route('demos') }}" style="text-decoration: none; color: black;">
                            <div class="welcome-image-sixth mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden  welcome-size-2">
                                <div class="my-3 p-3">
                                    <h2 class="display-5" style="color: #f59f0d;">{{ __('How To Set The Protective Shields - Video') }}</h2>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('certificate') }}" style="text-decoration: none; color: black;">
                            <div class="welcome-image-seventh pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden  welcome-size-2">
                                <div class="my-3 p-3">
                                    <h2 class="display-5" style="color: #f59f0d;">{{ __('CE Certificate') }}</h2>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Section 5 -->
                    <div class="d-md-flex flex-md-equal w-100 my-md-3">
                        <a href="{{ route('packing') }}" style="text-decoration: none; color: black;">
                            <div class="welcome-image-eight mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden  welcome-size-2">
                                <div class="my-3 p-3">
                                    <h2 class="display-5" style="color: #f59f0d;">{{ __('Choose Between 3 Different Packages') }}</h2>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('contacts') }}" style="text-decoration: none; color: black;">
                            <div class="welcome-image-ninth pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden  welcome-size-2">
                                <div class="my-3 p-3">
                                    <h2 class="display-5" style="color: #f59f0d;">{{ __('If You Have Any Questions Contact Us') }}</h2>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Carousel Section -->
                    <div id="carousel_welcome" class="d-md-flex flex-md-equal w-100 my-md-3">
                        <div class="mt-1 mr-md-4 mt-md-1 text-center overflow-hidden">
                            <div id="carousel_covid" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel_covid" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel_covid" data-slide-to="1"></li>
                                    <li data-target="#carousel_covid" data-slide-to="2"></li>
                                    <li data-target="#carousel_covid" data-slide-to="3"></li>
                                    <li data-target="#carousel_covid" data-slide-to="4"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div id="image_1" class="carousel-item active">
                                        <img src="../realphotos/covid_matching_blur.jpg" alt="covid" style="height: 100%; width: 100%;">
                                        <div class="container">
                                            <div class="carousel-caption text-left">
                                                <h1 class="text_custom_carousel">{{ __('Perfect for the Hospital') }}</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="image_2" class="carousel-item">
                                        <img src="../realphotos/covid_single.jpg" alt="covid" style="height: 100%; width: 100%;">
                                        <div class="container">
                                            <div class="carousel-caption text-left">
                                                <h1 class="text_custom_carousel">{{ __('Comfortable with glasses') }}</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="image_2" class="carousel-item">
                                        <img src="../realphotos/covid_patient_blur.jpg" alt="covid" style="height: 100%; width: 100%;">
                                        <div class="container">
                                            <div class="carousel-caption text-left">
                                                <h1 class="text_custom_carousel">{{ __('Used by specialists') }}</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="image_2" class="carousel-item">
                                        <img src="../realphotos/covid_second.jpg" alt="covid" style="height: 100%; width: 100%;">
                                        <div class="container">
                                            <div class="carousel-caption text-left">
                                                <h1 class="text_custom_carousel">{{ __('') }}</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="image_2" class="carousel-item">
                                        <img src="../realphotos/marian_2.jpg" alt="covid" style="height: 100%; width: 100%;">
                                        <div class="container">
                                            <div class="carousel-caption text-left">
                                                <h1 class="text_custom_carousel">{{ __('') }}</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carousel_covid" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel_covid" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>

                        <div class="mt-1 mt-md-1 text-center overflow-hidden">
                            <div id="carousel_main" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel_main" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel_main" data-slide-to="1"></li>
                                    <li data-target="#carousel_main" data-slide-to="2"></li>
                                    <li data-target="#carousel_main" data-slide-to="3"></li>
                                    <li data-target="#carousel_main" data-slide-to="4"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div id="image_1" class="carousel-item active">
                                        <img src="../realphotos/barber_biglow.jpg" alt="barber" style="height: 100%; width: 100%;">
                                        <div class="container">
                                            <div class="carousel-caption text-left">
                                                <h1 class="text_custom_carousel">{{ __('Use for any occasion') }}</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="image_2" class="carousel-item">
                                        <img src="../realphotos/dentist_action_wide_biglow.jpg" alt="barber_package" style="height: 100%; width: 100%;">
                                        <div class="container">
                                            <div class="carousel-caption text-left">
                                                <h1 class="text_custom_carousel">{{ __('At the office') }}</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="image_2" class="carousel-item">
                                        <img src="../realphotos/classroom_cut.jpg" alt="classroom" style="height: 100%; width: 100%;">
                                        <div class="container">
                                            <div class="carousel-caption text-left">
                                                <h1 class="text_custom_carousel">{{ __('In the classroom') }}</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="image_3" class="carousel-item">
                                        <img src="../realphotos/gersi_stand_train_carousel_blur.jpg" alt="Gersi_train" style="height: 100%; width: 100%;">
                                        <div class="container">
                                            <div class="carousel-caption text-left">
                                                <h1 class="text_custom_carousel">{{ __('At the public transport') }}</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="image_3" class="carousel-item">
                                        <img src="../realphotos/gersi_stand_shop_carousel.jpg" alt="gersi_shop" style="height: 100%; width: 100%;">
                                        <div class="container">
                                            <div class="carousel-caption text-left">
                                                <h1 class="text_custom_carousel">{{ __('Even in the market') }}</h1>
                                                <!-- <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
                                        metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carousel_main" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel_main" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- END of Carousel -->

                    <!-- Footer -->

                    @include('partials.footer')

                </div>
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
    </script>

</body>

</html>