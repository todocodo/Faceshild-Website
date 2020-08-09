@extends('layouts.app')

@section('content')
<div class="container py-4 mt-5">
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Ordering</h1>
        <p class="lead">Here you can easily order faceshields for any occasion. For your home, workplace, business. You can order at bigger scale. For schools, universities, hospitals, governments</p>
    </div>

    <div class="container">
        <form action="orders" method="POST">
            @csrf
            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Single</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ per piece</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>A single set</li>
                            <li>1 frame</li>
                            <li>5 plates</li>
                            <li>And in a beautiful packbox</li>
                        </ul>
                        <input type="number" id="single" name="single" min="1" max="9999" value="1" class="form-control">
                    </div>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Box</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$12 <small class="text-muted">/ per piece</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>99 sets in a box</li>
                            <li>25sm width</li>
                            <li>55sm length</li>
                            <li>30sm tall</li>
                        </ul>
                        <input type="number" id="box" name="box" min="1" max="9999" class="form-control">
                    </div>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Europallet</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$10 <small class="text-muted">/ per piece</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>99 boxes in a europallet</li>
                            <li>255sm tall</li>
                            <li>Packed</li>
                            <li>Full</li>
                        </ul>
                        <input type="number" id="europallet" name="europallet" min="1" max="9999" class="form-control">
                    </div>
                </div>
                <button type="submit" class="btn btn-lg btn-block text-white" style="background-color: #4CB6C1;">Order Now</button>
        </form>
    </div>
</div>

<!-- <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
        <div class="col-12 col-md">
            <img class="mb-2" src="../assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
            <small class="d-block mb-3 text-muted">&copy; 2017-2020</small>
        </div>
        <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">Cool stuff</a></li>
                <li><a class="text-muted" href="#">Random feature</a></li>
                <li><a class="text-muted" href="#">Team feature</a></li>
                <li><a class="text-muted" href="#">Stuff for developers</a></li>
                <li><a class="text-muted" href="#">Another one</a></li>
                <li><a class="text-muted" href="#">Last time</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">Resource</a></li>
                <li><a class="text-muted" href="#">Resource name</a></li>
                <li><a class="text-muted" href="#">Another resource</a></li>
                <li><a class="text-muted" href="#">Final resource</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">Team</a></li>
                <li><a class="text-muted" href="#">Locations</a></li>
                <li><a class="text-muted" href="#">Privacy</a></li>
                <li><a class="text-muted" href="#">Terms</a></li>
            </ul>
        </div>
    </div>
</footer> -->
</div>
@endsection