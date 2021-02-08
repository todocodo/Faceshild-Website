@extends('layouts.app')

@section('title', 'Packages')

@section('content')

<!-- <img class="img-fluid" src="../realphotos/120_pack_opened_front.jpg" alt="12_pack"> -->
<div class="superpack_image">
    <h1 class="text-center pt-4 video-text">{{ __('Packages') }}</h1>
    <h4 class="text-center text-pack">{{ __('3 Different Packages For Any Occasion') }}</h4>
</div>
<br><br>

<div class="container py-4">
    <div id="carousel_pack" class="row">
        <div class="col-lg-4 pt-5">
            <div id="packing_card" class="card shadow">
                <!-- Carousel 1 -->
                <div id="card_carousel_1" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#card_carousel_1" data-slide-to="0" class="active"></li>
                        <li data-target="#card_carousel_1" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active inner">
                            <img src="../realphotos/package_front_1.jpg" alt="1_pack">
                        </div>
                        <div class="carousel-item inner">
                            <img src="../realphotos/big_welcome_2_mobile_low_72_wide_1.jpg" alt="1_pack_opened">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#card_carousel_1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#card_carousel_1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="card-body mb-4">
                    <h4 class="card-title">{{ __('OnePack  ') }}<span style="color: #f59f0d;"><i class="fas fa-arrow-right"></i></span> 1 + 5</h4>
                    <p class="card-text">
                        {{ __('Consists of 1 frame and 5 protective shields. For individual usage or small group of people.') }}
                    </p>
                    <!-- <a href="#!" class="btn text-white" style="background-color: #07b0b7;">{{ __('For more Info') }}</a> -->
                </div>
            </div>
        </div>
        <div class="col-lg-4 pt-5">
            <div id="packing_card" class="card shadow">
                <!-- Carousel 12-->
                <div id="card_carousel_12" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#card_carousel_12" data-slide-to="0" class="active"></li>
                        <li data-target="#card_carousel_12" data-slide-to="1"></li>
                        <li data-target="#card_carousel_12" data-slide-to="2"></li>
                        <li data-target="#card_carousel_12" data-slide-to="3"></li>
                        <li data-target="#card_carousel_12" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active inner">
                            <img src="../realphotos/12_pack_front.jpg" alt="12_pack">
                        </div>
                        <div class="carousel-item inner">
                            <img src="../realphotos/12_pack_side.jpg" alt="12_pack">
                        </div>
                        <div class="carousel-item inner">
                            <img src="../realphotos/12_pack_back.jpg" alt="12_pack">
                        </div>
                        <div class="carousel-item inner">
                            <img src="../realphotos/12_pack_side_back.jpg" alt="12_pack">
                        </div>
                        <div class="carousel-item inner">
                            <img src="../realphotos/12_pack_open.jpg" alt="12_pack">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#card_carousel_12" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#card_carousel_12" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="card-body">
                    <h4 class="card-title">{{ __('SuperPack  ') }}<span style="color: #f59f0d;"><i class="fas fa-arrow-right"></i></span> 12 + 36</h4>
                    <p class="card-text">
                        {{ __('Consists of 12 frame and 36 protective shields. Perfect for the whole family and small businesses.') }}
                    </p>
                    <!-- <a href="#!" class="btn text-white" style="background-color: #07b0b7;">{{ __('For more Info') }}</a> -->
                </div>
            </div>
        </div>
        <div class="col-lg-4 pt-5">
            <div id="packing_card" class="card shadow">

                <!-- Carousel 120 -->
                <div id="card_carousel_120" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#card_carousel_120" data-slide-to="0" class="active"></li>
                        <li data-target="#card_carousel_120" data-slide-to="1"></li>
                        <li data-target="#card_carousel_120" data-slide-to="2"></li>
                        <li data-target="#card_carousel_120" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active inner">
                            <img src="../realphotos/120_pack_closed_front.jpg" alt="brand_red">
                        </div>
                        <div class="carousel-item inner">
                            <img src="../realphotos/120_pack_closed_side.jpg" alt="purple_upwards">
                        </div>
                        <div class="carousel-item inner">
                            <img src="../realphotos/120_pack_opened_front.jpg" alt="purple_upwards">
                        </div>
                        <div class="carousel-item inner">
                            <img src="../realphotos/120_pack_opened_side.jpg" alt="purple_upwards">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#card_carousel_120" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#card_carousel_120" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="card-body">
                    <h4 class="card-title">{{ __('MegaPack  ') }}<span style="color: #f59f0d;"><i class="fas fa-arrow-right"></i></span> 120 + 360</h4>
                    <p class="card-text">
                        {{ __('Consists of 120 frame and 360 protective shields. Our pack for big companies and large institutions: schools, universities, etc.') }}
                    </p>
                    <!-- <a href="#!" class="btn text-white" style="background-color: #07b0b7;">{{ __('For more info') }}</a> -->
                </div>
            </div>
        </div>
    </div>

    <!-- <h1 class="text-center mt-4 video-text">{{ __('MegaPack') }}</h1>
    <h4 class="text-center" style="color: black;">{{ __('This pack is specifically designed for big companies and institutions') }}</h4>
    <br>
    <img class="img-fluid" src="../realphotos/120_pack_opened_side.jpg" alt="120_pack">
    <br><br>

    <h1 class="text-center mt-4 video-text">{{ __('SinglePack') }}</h1>
    <h4 class="text-center" style="color: black;">{{ __('') }}</h4>
    <br>
    <img class="img-fluid" src="../realphotos/package_front_1_biglow.jpg" alt="one_pack">
    <br><br> -->
    <br><br>
    <hr>
</div>
@endsection