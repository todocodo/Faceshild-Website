@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="text-center mt-4 video-text">{{ __('How to replace the protective window') }}</h1>
    <br>
    <video controls="controls" width="100%" poster="realphotos/big_welcome_2_biglow.jpg" style="border-radius: 25px; outline: none;">
        <source src="../video/NTR FaceShied New-cut-adjustment.mp4" type="video/mp4">
        <source src="../video/NTR FaceShied New-cut-adjustmert.webm" type="video/webm">
    </video>
    <br><br>

    <h1 class="text-center video-text">{{ __('How to adjust the faceshield') }}</h1>
    <br>
    <video controls="controls" width="100%" style="border-radius: 25px; outline: none;">
        <source src="../video/NTR FaceShied New-cut-replacment.mp4" type="video/mp4">
        <source src="../video/NTR FaceShied New-cut-replacment.webm" type="video/webm">
    </video>
    <br><br>

    <h1 class="text-center video-text">{{ __('Whole Video') }}</h1>
    <br>
    <div class="embed-responsive embed-responsive-16by9" style="border-radius: 25px; outline: none;">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tnrcvLiFh6s" allowfullscreen></iframe>
    </div>
    <br><br>
</div>
@endsection