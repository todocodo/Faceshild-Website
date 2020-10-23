@extends('layouts.app')

@section('content')
<!-- Main content -->
<div class="p-3 p-md-5 m-lg-3 line-size" style="background-color: #fff;">
    <div class="row">
        <div class="col-md-5 p-lg-5 mx-auto my-5 text-dark">
            <div class="row">
                <div class="col-xl-8 text-center">
                    <h1 class="font-weight-normal" style="color: #f59f0d;">{{ __('One Set consists of:') }}</h1>
                </div>
                <div class="col-xl-4 text-center">
                    <img src="../icon/icon - lightwaight.png" alt="icon-splash" class="icon-size-content">
                </div>
            </div>
            <br><br>
            <p class="lead"><span style="color: #07b0b7;"><i class="fas fa-circle mr-2"></i></i></span><strong>{{ __('1 Frame') }}</strong> {{ __('made of PP with protector of EVA and a strap with width 10.5mm') }} </p>
            <p class="lead"><span style="color: #07b0b7;"><i class="fas fa-circle mr-2"></i></i></span><strong>{{ __('5 Front Protective Windows') }}</strong> {{ __('that are 0.2mm thick and made of PET') }}</p>
        </div>
        <div class="col-md-4 text-center">
            <img src="../realphotos/5in1.JPG" alt="package" class="image_about">
        </div>
    </div>
</div>

<!-- GREY -->

<div class="p-3 p-md-5 m-lg-3 text-center line-size" style="background-color: #F3F2F3;">
    <div class="row">
        <div class="col-md-6 order-md-12 p-lg-5 mx-auto my-3">
            <div class="row">
                <div class="col-xl-6 order-xl-12">
                    <h1 class="font-weight-normal" style="color: #f59f0d">{{ __('Frame and Window') }}</h1>
                </div>
                <div class="col-xl-6 order-xl-1">
                    <img src="../icon/icon - reusable.png" alt="icon-reusable" class="icon-size-content">
                    <img src="../icon/icon - lightwaight.png" alt="icon-lightwaight" class="icon-size-content ml-3">
                    <img src="../icon/icon - fog.png" alt="icon-fog" class="icon-size-content ml-3">
                </div>
            </div>
            <br><br>
            <p class="lead font-weight-normal">{{ __('Extremely lightweight and elegant frame in which through a click system a reusable screen is installed. The frame is placed on the head with the help of an eraser that can be adjusted individually. For additional comfort a mellow protector for the forehead is placed.') }} </p>
        </div>
        <div class="col-md-4 order-md-1">
            <img src="../realphotos/big_welcome_2_biglow.jpg" alt="welcome_2" class="image_about">
        </div>
    </div>
</div>
<!-- GREY -->

<!-- ICONS -->
<div class="container-fluid py-4 w-75 text-center">
    <div class="row mt-3">
        <div class="col-sm-2 col-6">
            <img src="../icon/icon - dust.png" alt="icon-dust" class="icon-size">
            <h5 id="icon-font">{{ __('Anti Dust') }}</h5>
        </div>
        <div class="col-sm-2 col-6">
            <img src="../icon/icon - splash.png" alt="icon-splash" class="icon-size">
            <h5 id="icon-font">{{ __('Anti splash') }}</h5>
        </div>
        <div class="col-sm-2 col-6">
            <img src="../icon/icon - virus.png" alt="icon-virus" class="icon-size">
            <h5 id="icon-font">{{ __('Anti virus') }}</h5>
        </div>
        <div class="col-sm-2 col-6">
            <img src="../icon/icon - fog.png" alt="icon-fog" class="icon-size">
            <h5 id="icon-font">{{ __('Anti fog') }}</h5>
        </div>
        <div class="col-sm-2 col-6">
            <img src="../icon/icon - lightwaight.png" alt="icon-lightwaight" class="icon-size">
            <h5 id="icon-font">{{ __('Weight: 46 g') }}</h5>
        </div>
        <div class="col-sm-2 col-6">
            <img src="../icon/icon - reusable.png" alt="icon-reusable" class="icon-size">
            <h5 id="icon-font">{{ __('Reusable') }}</h5>
        </div>
    </div>
</div>

<div class="p-3 p-md-5 text-center bg-light line-size">
    <div class="row">
        <div class="col-md-6 p-lg-5 mx-auto my-3">
            <div class="row">
                <div class="col-xl-6">
                    <h1 class="font-weight-normal" style="color: #f59f0d">{{ __('Protect the eyes nose and face') }}</h1>
                </div>
                <div class="col-xl-6">
                    <img src="../icon/icon - dust.png" alt="icon-dust" class="icon-size-content">
                    <img src="../icon/icon - splash.png" alt="icon-splash" class="icon-size-content ml-3">
                    <img src="../icon/icon - virus.png" alt="icon-virus" class="icon-size-content ml-3">
                </div>
            </div>
            <br><br>
            <p class="lead font-weight-normal">{{ __('nTr Professional Faceshield guarantee the protection of the eyes, nose and face from drops and splashes of liquids, responding to the European Regulation (ЕС) 2016/425, European Standard EN166:2001 point 7.2.4 b, EN168:2008 objection 12.2 and the requirements for EN166:2001 point 6.1, 6.2, 6.3;') }}</p>
        </div>
        <div class="col-md-4">
            <img src="../realphotos/kitchen.jpg" alt="kitchen" class="image_about">
        </div>
    </div>
</div>

<!-- GREY -->
<div class="p-3 p-md-5 m-lg-3 text-center bg-white line-size">
    <div class="row">
        <div class="col-md-5 order-md-12 p-lg-5 mx-auto my-3 lead">
            <div class="row">
                <div class="col-xl-8 order-xl-12 text-center">
                    <h1 class="font-weight-normal" style="color: #f59f0d;">{{ __('Easy window replacement') }}</h1>
                </div>
                <div class="col-xl-4 order-xl-1 text-center">
                    <img src="../icon/icon - reusable.png" alt="icon-reusable" class="icon-size-content">
                </div>
            </div>
            <br><br>
            <p class="lead font-weight-normal">{{ __('nTr Professional Faceshield has an innovative window fastening system that help you to easily replace the window anytime and anywhere without the help of any adjustments. Click the button below to see the video') }}</p>
            <a class="btn btn-lg mt-3" style="background-color: #07b0b7; color:white;" href="demos">{{ __('Demonstration') }}</a>
        </div>
        <div class="col-md-4 order-md-1">
            <img src="../realphotos/package_front_1.png" alt="package" class="image_2_package">
        </div>
    </div>
</div>
<!-- GREY -->
<a name="masks">
    <div class="p-3 p-md-5 m-lg-3 text-center bg-light line-size">
        <div class="row">
            <div class="col-md-5 p-lg-5 mx-auto my-3">
                <div class="row">
                    <div class="col-xl-6">
                        <h1 class="font-weight-normal" style="color: #f59f0d">{{ __('Masks and Glasses') }}</h1>
                    </div>
                    <div class="col-xl-6">
                        <img src="../icon/icon - lightwaight.png" alt="icon-lightwaight" class="icon-size-content">
                        <img src="../icon/icon - fog.png" alt="icon-fog" class="icon-size-content ml-3">
                    </div>
                </div>
                <br><br>
                <p class="lead font-weight-normal">{{ __('nTr Professional Faceshield is incredibly lightweight – only 46 g. it does not disturb the eye vision or the free movement of the head. It allows the usage of mask and glasses under the Faceshield and can be worn for hours without fatigue.') }}</p>
            </div>
            <div class="col-md-4">
                <img src="../realphotos/dentist_low.jpg" alt="dentist" class="image_about">
            </div>
        </div>
    </div>
</a>

<!-- GREY -->
<a name='size'>
    <div class="p-3 p-md-5 m-lg-3 bg-white line-size">
        <div class="row">
            <div class="col-md-5 order-md-12 p-lg-5 mx-auto lead">
                <div class="row">
                    <div class="col-xl-8 order-xl-12 text-center">
                        <h1 class="font-weight-normal" style="color: #f59f0d;">{{ __('Size and Adjustment') }}</h1>
                    </div>
                    <div class="col-xl-4 order-xl-1 text-center">
                        <img src="../icon/icon - lightwaight.png" alt="icon-splash" class="icon-size-content">
                    </div>
                </div>
                <br><br>
                <p class="lead font-weight-normal text-center">{{ __('Easy adjustment of the eraser for a personalized and secure fit.') }}</p>
                <p class="lead"><span style="color: #07b0b7;"><i class="fas fa-circle mr-2"></i></span> {{ __('Moderate size, suitable for most face shapes.') }}</p>
                <p class="lead"><span style="color: #07b0b7;"><i class="fas fa-circle mr-2"></i></span> {{ __('Suitable for men and women.') }}</p>
                <p class="text-center"><a class="btn btn-lg mt-3" style="background-color: #07b0b7; color:white;" href="demos">{{ __('Demonstration') }}</a></p>
            </div>
            <div class="col-md-4 order-md-1 text-center">
                <img src="../realphotos/gersi_face_blur.jpg" alt="gersi_face" class="image_about">
            </div>
        </div>
    </div>
</a>
<!-- GREY -->
<a name='disinfection'>
    <div class="p-3 p-md-5 m-lg-3 text-center bg-light line-size">
        <div class="row">
            <div class="col-md-5 p-lg-5 mx-auto my-3">
                <div class="row">
                    <div class="col-xl-8">
                        <h1 class="font-weight-normal" style="color: #f59f0d">{{ __('Disinfection and Storage') }}</h1>
                    </div>
                    <div class="col-xl-4">
                        <img src="../icon/icon - virus.png" alt="icon-virus" class="icon-size-content">
                    </div>
                </div>
                <br><br>
                <p class="lead font-weight-normal">{{ __('nTr Professional Faceshield – is not disinfected. Before usage disinfect the faceshield. Suitable for disinfection are all disinfectors containing ethanol. Avoid solvents, ketones, strong acids and alkaline elements.') }}</p>
            </div>
            <div class="col-md-4">
                <img src="../realphotos/reception_1_biglow.jpg" alt="reception" class="image_about">
            </div>
        </div>
    </div>
</a>
<h1 class="text-center mb-3 bottom-text" style="color: #f59f0d;">{{ __('Store in a dry place with temperature from -25°C to +50°C in its box for no longer than 5 years.') }}</h1>
@endsection