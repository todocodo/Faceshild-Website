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
    </div>
</div>

@endsection