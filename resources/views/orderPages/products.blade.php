@extends('layouts.app')

@section('content')
<div class="container py-4 mt-5">
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Ordering</h1>
        <p class="lead">Here you can easily order faceshields for any occasion. For your home, workplace, business. You can order at bigger scale. For schools, universities, hospitals, governments</p>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($products as $product)
            <div class="col-md-4">
                <a href="{{ route('products.show', $product->slug) }}" class="card card-product-grid" style="text-decoration: none;">
                    <div class="img-wrap"> <img src="{{ asset('orders-img/'.$product->slug.'.jpg') }}" style="height: 220px;"> </div>
                    <figcaption class="info-wrap">
                        <p class="title text-truncate">{{ $product->name }}</p>
                        <small class="text-muted">{{ $product->details }}</small>
                        <div class="price mt-2">$ {{ $product->price }}.00</div>
                    </figcaption>
                </a>
            </div>
            @endforeach
        </div>

        <!-- <form action="orders" method="POST">
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
        </form> -->
    </div>
</div>

@endsection

 