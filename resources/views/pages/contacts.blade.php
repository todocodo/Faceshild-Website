@extends('layouts.app')

@section('content')

<!-- Certificate Button -->
<div>
    <a class="btn btn-lg rounded-circle fixed-bottom-certificate" href="certificate" style="background-color: #fff">
        <span style="color: #07b0b7; font-size: 30px;">
            <i class="fas fa-award"></i>
        </span>
    </a>
</div>

<div class="container py-4">

    @if (session()->has('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if (session()->has('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif



    <div class="col-lg-10 mb-4 mx-auto">
        <!--Form with header-->
        <div class="card">

            <div class="card-body">
                <!--Header-->
                <div class="form-header text-center blue accent-1">
                    <h3><span style="color: #07b0b7;"><i class="fas fa-envelope"></i></span> Write to us:</h3>
                </div>
                <br>

                <form action="{{ url('contacts') }}" method="POST" id="form">
                    {{ csrf_field() }}
                    <div class="md-form ">
                        <span><i class="fas fa-envelope"></i></span>
                        <label name="email">Email:</label>
                        <input id="email" name="email" class="form-control">
                        @error('email')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="md-form pt-3">
                        <span><i class="fas fa-tag"></i></span>
                        <label name="subject">Subject:</label>
                        <input id="subject" name="subject" class="form-control">
                        @error('subject')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group pt-3">
                        <span><i class="fas fa-pencil-alt"></i></span>
                        <label name="message">Message:</label>
                        <textarea placeholder="Type your message here.." id="message" name="message" class="form-control"></textarea>
                        @error('message')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <!-- The captcha will be generated in this element -->
                    <div>
                        <strong class="text-danger">Please tick the box before sending</strong>
                    </div>
                    <div class="g-recaptcha" data-sitekey="6LfMFMQZAAAAAMPmSfRSNSEoLzBwlcSch8Ze6KEN"></div>

                    <div class="text-center mt-4">
                        <input type="submit" value="Send Message" class="btn shield-blue text-white">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-7 mx-auto">
        <!--Google map-->

        <br>
        <!--Buttons-->
        <div class="row text-center">
            <div class="col-md-4">
                <span style="color: #07b0b7; font-size: 25px;">
                    <i class="fas fa-map-marker-alt"></i>
                </span>
                <p>Sofia, Gara Iskar, 10 Nedelcho Bonchev Str., Warehouse 10</p>
                <p>Bulgaria</p>
            </div>

            <div class="col-md-4">
                <span style="color: #07b0b7; font-size: 25px;"><i class="fas fa-phone"></i></span>
                <p>+359 89990 4690</p>
                <p>Mon - Fri, 8:00-17:00</p>
            </div>

            <div class="col-md-4">
                <span style="color: #07b0b7; font-size: 25px;"><i class="fas fa-envelope"></i></span>
                <p>shield@transgraph.eu</p>
            </div>
        </div>
    </div>

</div>

@endsection