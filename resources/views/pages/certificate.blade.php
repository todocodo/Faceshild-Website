@extends('layouts.app')

@section('content')
<div class="container py-4 mt-5">
    <div class="text-center">
        <img class="img-fluid img-size" src="../documents/TG Certificat CE en.jpg" alt="test-certificate">
    </div>
    <div>
        <p class="download-text mt-3 text-center" style="color: #ec9a2e;">Download documents in pdf here</p>
    </div>
    <div>
        <p class="text-center"><span style="color: #ec9a2e; font-size: 30px;"><i class="mt-4 fas fa-arrow-circle-down"></i></span></p>
    </div>
    <div class="row">
        <div class="col-sm-4 text-center">
            <a class="btn btn-lg mt-3" style="background-color: #60C3A7; color:white;" href="../documents/TG Certificat CE en.pdf" download>Certificate</a>
        </div>

        <div class="col-sm-4 text-center">
            <a class="btn btn-lg mt-3" style="background-color: #60C3A7; color:white;" href="../documents/nTrShield Instruction EN.pdf" download>Instructions</a>
        </div>

        <div class="col-sm-4 text-center">
            <a class="btn btn-lg mt-3" style="background-color: #60C3A7; color:white;" href="../documents/nTrShield Tech Data A4 EN.pdf" download>Tech Data</a>
        </div>

    </div>



</div>
@endsection