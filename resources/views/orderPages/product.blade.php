@extends('layouts.app')

@section('title', 'Product')

@section('content')
<div class="container py-4 mt-5">
    <article>
        <div class="row">
            <aside class="col-md-6">
                <h3 class="title-product text-center">{{ $product->name}} - Faceshield</h3>
                <hr>
                <article class="gallery-wrap">
                    <div class="card img-big-wrap">
                        <!-- <a href="#"> <img src="{{ asset('orders-img/'.$product->slug.'.jpg') }}"></a> -->
                        <a href="#"> <img src="{{ productImage($product->image) }}" id="currentImage"></a>
                    </div> <!-- card img-big-wrap.// -->
                    <div class="thumbs-wrap">
                        <div class="item-thumb selected-thumbs"> <img src="{{ productImage($product->image) }}"></div>
                        @if ($product->images)

                        @foreach (json_decode($product->images, true) as $image)
                        <div class="item-thumb "> <img src="{{ productImage($image) }}"></div>
                        @endforeach
                        @endif
                    </div> <!-- thumbs-wrap .// -->
                </article> <!-- gallery-wrap .end// -->
            </aside>
            <main class="col-md-6">
                <article>

                    <!-- <div>
                            <ul class="rating-stars">
                                <li style="width:60%" class="stars-active">
                                    <img src="../images/icons/stars-active.svg" alt="">
                                </li>
                                <li>
                                    <img src="../images/icons/starts-disable.svg" alt="">
                                </li>
                            </ul>
                            <span class="label-rating mr-3 text-muted">7/10</span>
                            <a href="#" class="btn-link  mr-3 text-muted"> <i class="fa fa-heart"></i> Save for
                                later </a>
                            <a href="#" class="btn-link text-muted"> <i class="fa fa-book-open"></i> Compare
                            </a>
                        </div> -->

                    

                    <div class="mb-3 mt-5">
                        <h6>Short description</h6>
                        <ul class="list-dots mb-0">
                            <li>Made in Bulgaria</li>
                            <li>{{ $product->details }}</li>
                            <li>Adjustable to any head</li>
                            <li>Could be customized</li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <h6>Usage</h6>
                        <p>{!! $product->description !!}</p>
                    </div>

                    <div class="form-group">
                        <label class="text-muted">Available sizes</label>
                        <div>
                            <label class="js-check btn btn-check active">
                                <input type="radio" name="option_size" value="option1" checked>
                                <span>Small</span>
                            </label>
                            <label class="js-check btn btn-check">
                                <input type="radio" name="option_size" value="option1">
                                <span>Medium</span>
                            </label>
                            <label class="js-check btn btn-check">
                                <input type="radio" name="option_size" value="option1">
                                <span>Large</span>
                            </label>
                            <label class="js-check btn btn-check disabled">
                                <input type="radio" name="option_size" disabled value="option1">
                                <span>Babies</span>
                            </label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <var class="price">Price: ${{$product->price / 100 }}.00</var> <br>
                    </div> <!-- price-detail-wrap .// -->

                    <div class="mb-4">
                        <!-- <a href="/cart" class="btn btn-primary mb-3">Buy now</a> -->

                        <!-- <a href="#" class="btn btn-light">Add to card</a> -->

                        <form action="{{ route('cart.store', $product) }}" method="POST">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-light">Add to Cart</button>
                        </form>

                    </div>

                </article> <!-- product-info-aside .// -->
            </main> <!-- col.// -->
        </div> <!-- row.// -->
        <!-- card-body.// -->
    </article> <!-- card.// -->
</div>


@endsection

@section('extra-js')
<script>
    (function() {
        const currentImage = document.querySelector('#currentImage');
        const images = document.querySelectorAll('.item-thumb');

        images.forEach((element) => element.addEventListener('click', thumbnailClick));

        function thumbnailClick(e) {

            currentImage.src = this.querySelector('img').src;

            images.forEach((element) => element.classList.remove('selected-thumbs'));
            this.classList.add('selected-thumbs');
        }

    })();
</script>
@endsection