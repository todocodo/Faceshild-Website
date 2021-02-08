@extends('layouts.app')

@section('title', 'Certificate')

@section('content')
<div class="container py-4">
    <!-- Certificate -->
    <div class="text-center">
        <img class="img-fluid img-size" src="../documents/TG_Certificate_CE_en.jpg" alt="test-certificate">
    </div>
    <div class="text-center mt-2">
        <a class="download-text mt-1 text-center" style="color: #f59f0d; text-decoration: none;" href="../documents/TG_Certificate_CE_en.pdf" download><span style="color: #f59f0d; font-size: 30px;"><i class="mr-3 fas fa-download"></i></span>{{ __('Download in pdf') }}</a>
    </div>
    <div class="text-center">
        <a class="btn btn-lg mt-2" style="background-color: #07b0b7; color:white;" href="../documents/TG_Certificate_CE_en.pdf" download>{{ __('Certificate in EN') }}</a>
        <a class="btn btn-lg mt-2" style="background-color: #07b0b7; color:white;" href="../documents/TG_Certificate_CE_bg.pdf" download>{{ __('Certificate in BG') }}</a>
    </div>

    <!-- Tech Data -->
    <a name="tech-data">
        <div class="border-top mt-3">
            <div class="text-center">
                <img class="img-fluid img-size mt-5" src="../documents/nTrShield_Tech_Data_A4_EN.png" alt="test-certificate">
            </div>
            <div class="text-center">
                <a class="download-text mt-1 text-center" style="color: #f59f0d; text-decoration: none;" href="../documents/nTrShield_Tech_Data_A4_EN.pdf" download><span style="color: #f59f0d; font-size: 30px;"><i class="mr-3 fas fa-download"></i></span>{{ __('Download in pdf') }}</a>
            </div>
            <div class="text-center">
                <a class="btn btn-lg mt-2" style="background-color: #07b0b7; color:white;" href="../documents/nTrShield_Tech_Data_A4_EN.pdf" download>{{ __('Technical Data in EN') }}</a>
                <a class="btn btn-lg mt-2" style="background-color: #07b0b7; color:white;" href="../documents/nTrShield_Tech_Data_A4_BG.pdf" download>{{ __('Technical Data in BG') }}</a>
            </div>
        </div>
    </a>

    <!-- Instructions -->
    <a name="instructions">
        <div class="border-top mt-3">
            <div class="text-center">
                <img class="img-fluid img-size mt-5" src="../documents/nTrShield_Instruction_EN.png" alt="test-certificate">
            </div>
            <div class="text-center">
                <a class="download-text mt-1 text-center" style="color: #f59f0d; text-decoration: none;" href="../documents/nTrShield_Instruction_EN.pdf" download><span style="color: #f59f0d; font-size: 30px;"><i class="mr-3 fas fa-download"></i></span>{{ __('Download in pdf') }}</a>
            </div>
            <div class="text-center">
                <a class="btn btn-lg mt-2" style="background-color: #07b0b7; color:white;" href="../documents/nTrShield_Instruction_EN.pdf" download>{{ __('Instructions in EN') }}</a>
                <a class="btn btn-lg mt-2" style="background-color: #07b0b7; color:white;" href="../documents/nTrShield_Instruction_BG.pdf" download>{{ __('Instructions in BG') }}</a>
            </div>
        </div>
    </a>

    <!-- <div>
        <p class="text-center"><span style="color: #f59f0d; font-size: 30px;"><i class="mt-4 fas fa-arrow-circle-down"></i></span></p>
    </div> -->
    <!-- 
    <a class="btn btn-lg mt-3" style="background-color: #07b0b7; color:white;" href="../documents/TG_Certificate_CE_en.pdf" download>Certificate</a>

    <a class="btn btn-lg mt-3" style="background-color: #07b0b7; color:white;" href="../documents/nTrShield_Instruction_EN.pdf" download>Instructions</a>

    <a class="btn btn-lg mt-3" style="background-color: #07b0b7; color:white;" href="../documents/nTrShield_Tech_Data_A4_EN.pdf" download>Tech Data</a>

 -->

</div>
@endsection