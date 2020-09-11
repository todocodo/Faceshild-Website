@extends('layouts.app')

@section('content')
<div class="">
    <!-- Carousel with images -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../realphotos/brand_red_carousel_1.jpg" alt="brand_red" style="height: 100%; width: 100%;">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1 class="text_custom_carousel">Brand your Faceshield</h1>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../realphotos/purple_upwards.jpg" alt="purple_upwards" style="height: 100%; width: 100%;">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1 class="text_custom_carousel">Change the color</h1>
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

    <div class="container">
        <!-- COLOR  -->
        <div class="row mt-5">
            <div class="col-sm-6">
                <h3 class="text_custom_main font-weight-bold mb-0">Color</h3>
                <p class="text_custom_secondary">Use the buttons to change the color</p>
                <p class="text-center button_position"><a id="btn-original" class="btn btn-lg text-white" role="button" style="width: 90px; background-color: #60C3A7;">Original</a></p>

                <div class="row text-center">
                    <div class="col-6">
                        <a id="btn-grey" class="btn btn-lg btn-secondary text-white" role="button" style="width: 90px;">Grey</a><br><br>
                        <a id="btn-red" class="btn btn-lg btn-danger text-white" role="button" style="width: 90px;">Red</a><br><br>
                        <a id="btn-blue" class="btn btn-lg btn-primary text-white mb-4" role="button" style="width: 90px;">Blue</a>
                    </div>
                    <div class="col-6">
                        <a id="btn-purple" class="btn btn-lg text-white" role="button" style="background-color: purple; width: 90px;">Purple</a><br><br>
                        <a id="btn-yellow" class="btn btn-lg btn-warning text-dark" role="button" style="width: 90px;">Yellow</a><br><br>
                        <a id="btn-orange" class="btn btn-lg text-white" role="button" style="background-color: orange; width: 90px;">Orange</a>
                    </div>
                </div>

            </div>
            <!-- pictures -->
            <div class="col-sm-6 text-center mt-3">
                <img id="color-img" class="img-fluid custom_collage" src="realphotos/custom_collage_green.jpg" alt="collage">
            </div>
        </div>
        <!-- Branding -->
        <div class="py-5">
            <h3 class="text_custom_main font-weight-bold mb-0">Branding</h3>
            <p class="text_custom_secondary font-italic text-muted mb-4">You can brand the Facesheild how you want.</p>
            <div class="row">
                <!-- Branding Item-->
                <div class="col-lg-6 mb-3 mb-lg-0">
                    <div class="hover hover-1 text-white rounded"><img src="realphotos/brand_yellow.jpg" alt="">
                        <div class="hover-overlay"></div>
                        <div class="hover-1-content px-5 py-4">
                            <h3 class="hover-1-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Image </span>Caption</h3>
                            <p class="hover-1-description font-weight-light mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <!-- Branding Item-->
                <div class="col-lg-6">
                    <div class="hover hover-1 text-white rounded"><img src="https://res.cloudinary.com/mhmd/image/upload/v1570786257/hoverSet-4_fbtjks.jpg" alt="">
                        <div class="hover-overlay"></div>
                        <div class="hover-1-content px-5 py-4">
                            <h3 class="hover-1-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Image </span>Caption</h3>
                            <p class="hover-1-description font-weight-light mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Package-->
        <div class="py-5">
            <h3 class="text_custom_main font-weight-bold mb-0">Package</h3>
            <p class="text_custom_secondary font-italic text-muted mb-4">Make the box in your style!</p>
            <div class="row">
                <!-- Package Item-->
                <div class="col-lg-6 mb-3 mb-lg-0">
                    <div class="hover hover-2 text-white rounded"><img src="https://res.cloudinary.com/mhmd/image/upload/v1570786258/hoverSet-2_lt7geh.jpg" alt="">
                        <div class="hover-overlay"></div>
                        <div class="hover-2-content px-5 py-4">
                            <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Image </span>Caption</h3>
                            <p class="hover-2-description text-uppercase mb-0">Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit.</p>
                        </div>
                    </div>
                </div>

                <!-- Package Item-->
                <div class="col-lg-6">
                    <div class="hover hover-2 text-white rounded"><img src="https://res.cloudinary.com/mhmd/image/upload/v1570786261/hoverSet-1_pha5qe.jpg" alt="">
                        <div class="hover-overlay"></div>
                        <div class="hover-2-content px-5 py-4">
                            <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Image </span>Caption</h3>
                            <p class="hover-2-description text-uppercase mb-0">Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#btn-original').click(function() {
            // Change src attribute of image
            $('#color-img').attr("src", "realphotos/custom_collage_green.jpg");
        });

        $('#btn-grey').click(function() {
            // Change src attribute of image
            $('#color-img').attr("src", "realphotos/custom_collage_grey.jpg");
        });

        $('#btn-red').click(function() {
            // Change src attribute of image
            $('#color-img').attr("src", "realphotos/custom_collage_red.jpg");
        });

        $('#btn-blue').click(function() {
            // Change src attribute of image
            $('#color-img').attr("src", "realphotos/custom_collage_blue.jpg");
        });

        $('#btn-purple').click(function() {
            // Change src attribute of image
            $('#color-img').attr("src", "realphotos/custom_collage_purple.jpg");
        });

        $('#btn-yellow').click(function() {
            // Change src attribute of image
            $('#color-img').attr("src", "realphotos/custom_collage_yellow.jpg");
        });

        $('#btn-orange').click(function() {
            // Change src attribute of image
            $('#color-img').attr("src", "realphotos/custom_collage_orange.jpg");
        });
    });
</script>

@endsection