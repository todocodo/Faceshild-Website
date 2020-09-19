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
                        <h1 class="text_custom_carousel">{{ __('Brand your Faceshield') }}</h1>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../realphotos/purple_upwards.jpg" alt="purple_upwards" style="height: 100%; width: 100%;">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1 class="text_custom_carousel">{{ __('Change the color') }}</h1>
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
                <h3 class="text_custom_main font-weight-bold mb-0">{{ __('Color') }}</h3>
                <p class="text_custom_secondary">{{ __('Use the buttons to change the color') }}</p>
                <p class="text-center button_position"><a id="btn-original" class="btn btn-lg text-white" role="button" style="width: 110px; background-color: #60C3A7;">{{ __('Original') }}</a></p>

                <div class="row text-center">
                    <div class="col-6">
                        <a id="btn-grey" class="btn btn-lg btn-secondary text-white" role="button" style="width: 110px;">{{ __('Grey') }}</a><br><br>
                        <a id="btn-red" class="btn btn-lg btn-danger text-white" role="button" style="width: 110px;">{{ __('Red') }}</a><br><br>
                        <a id="btn-blue" class="btn btn-lg btn-primary text-white mb-4" role="button" style="width: 110px;">{{ __('Blue') }}</a>
                    </div>
                    <div class="col-6">
                        <a id="btn-purple" class="btn btn-lg text-white" role="button" style="background-color: purple; width: 110px;">{{ __('Purple') }}</a><br><br>
                        <a id="btn-yellow" class="btn btn-lg btn-warning text-dark" role="button" style="width: 110px;">{{ __('Yellow') }}</a><br><br>
                        <a id="btn-orange" class="btn btn-lg text-white" role="button" style="background-color: orange; width: 110px;">{{ __('Orange') }}</a>
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
            <h3 class="text_custom_main font-weight-bold mb-0">{{ __('Branding') }}</h3>
            <p class="text_custom_secondary font-italic text-muted mb-4">{{ __('You can brand the Facesheild how you want. Tap on the pictures.') }}</p>
            <div class="row">
                <!-- Branding Item-->
                <div class="col-lg-6 mb-3 mb-lg-0">
                    <div class="hover hover-1 text-white rounded"><img src="realphotos/brand_yellow.jpg" alt="">
                        <div class="hover-1-content px-5 py-4">
                            <p class="hover-1-description font-weight-bold text-dark mb-0" style="font-size: 16px;">{{ __('A logo can be placed on the widest part of the frame.') }}</p>
                        </div>
                        <!-- <div class="hover-overlay"></div> -->
                    </div>
                </div>
                <!-- Branding Item-->
                <div class="col-lg-6">
                    <div class="hover hover-1 text-white rounded"><img src="realphotos/brand_original.jpg" alt="">
                        <div class="hover-1-content px-5 py-4">
                            <p class="hover-1-description font-weight-bold text-dark mb-0" style="font-size: 16px;">{{ __('We can brand even in the side.') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Package-->
        <div class="py-5">
            <h3 class="text_custom_main font-weight-bold mb-0">{{ __('Package') }}</h3>
            <p class="text_custom_secondary font-italic text-muted mb-4">{{ __('Make the box in your style! Tap on the pictures.') }}</p>
            <div class="row">
                <!-- Package Item-->
                <div class="col-lg-6 mb-3 mb-lg-0">
                    <div class="hover hover-2 text-white rounded"><img src="realphotos/custom_2_boxes_purple_green.jpg" alt="">
                        <div class="hover-2-content px-5">
                            <p class="hover-2-description text-uppercase text-dark font-weight-bold mb-0">{{ __('Purple & Red or Green & Red') }}</p>
                        </div>
                    </div>
                </div>

                <!-- Package Item-->
                <div class="col-lg-6">
                    <div class="hover hover-2 text-white rounded"><img src="realphotos/custom_2_boxes_pink_red.jpg" alt="">
                        <div class="hover-2-content px-5">
                            <p class="hover-2-description text-uppercase text-dark font-weight-bold mb-0">{{ __('Blue & Pink or Red & Yellow') }}</p>
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