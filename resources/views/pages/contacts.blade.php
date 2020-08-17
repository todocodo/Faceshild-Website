@extends('layouts.app')

@section('content')

<!-- Certificate Button -->
<div>
    <a class="btn btn-lg rounded-circle fixed-bottom-certificate" href="certificate" style="background-color: #fff">
        <span style="color: #4CB6C1; font-size: 30px;">
            <i class="fas fa-award"></i>
        </span>
    </a>
</div>

<div class="container py-4 mt-5">

    @if (session()->has('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif



    <div class="col-lg-10 mb-4 mx-auto">
        <!--Form with header-->
        <div class="card">

            <div class="card-body">
                <!--Header-->
                <div class="form-header text-center blue accent-1">
                    <h3><span style="color: #4CB6C1;"><i class="fas fa-envelope"></i></span> Write to us:</h3>
                </div>
                <br>

                <form action="{{ url('contacts') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="md-form">
                        <span><i class="fas fa-envelope"></i></span>
                        <label name="email">Email:</label>
                        <input id="email" name="email" class="form-control">
                    </div>

                    <div class="md-form pt-3">
                        <span><i class="fas fa-tag"></i></span>
                        <label name="subject">Subject:</label>
                        <input id="subject" name="subject" class="form-control">
                    </div>

                    <div class="form-group pt-3">
                        <span><i class="fas fa-pencil-alt"></i></span>
                        <label name="message">Message:</label>
                        <textarea id="message" name="message" class="form-control">Type your message here..</textarea>
                    </div>

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
                <span style="color: #4CB6C1; font-size: 25px;">
                    <i class="fas fa-map-marker-alt"></i>
                </span>
                <p>Sofia, Gara Iskar, 10 Nedelcho Bonchev Str., Warehouse 10</p>
                <p>Bulgaria</p>
            </div>

            <div class="col-md-4">
                <span style="color: #4CB6C1; font-size: 25px;"><i class="fas fa-phone"></i></span>
                <p>+359 899 9999</p>
                <p>Mon - Fri, 8:00-17:00</p>
            </div>

            <div class="col-md-4">
                <span style="color: #4CB6C1; font-size: 25px;"><i class="fas fa-envelope"></i></span>
                <p>info@gmail.com</p>
                <p>sale@gmail.com</p>
            </div>
        </div>
    </div>

</div>
@endsection