@extends('layouts.app')

@section('title', 'Cart')

@section('content')


<!-- ========================= SECTION PAGETOP ========================= -->
<section class="section-pagetop bg-white">
    <div class="container">
        <h2 class="title-page">Shopping cart</h2>

    </div> <!-- container //  -->

</section>
<!-- ========================= SECTION INTRO END// ========================= -->

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
    <div class="container">

        @if (session()->has('success_message'))
        <div class="alert alert-success">
            {{ session()->get('success_message') }}
        </div>
        @endif

        @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if (Cart::count() > 0)

        <h2>{{ Cart::count() }} item(s) in Shopping Cart</h2>

        <div class="row">
            <main class="col-md-9">
                <div class="card">

                    <table class="table table-borderless table-shopping-cart">
                        <thead class="text-muted">
                            <tr class="small text-uppercase">
                                <th scope="col">Product</th>
                                <th scope="col" width="120">Quantity</th>
                                <th scope="col" width="120">Price</th>
                                <th scope="col" class="text-right" width="200"> </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (Cart::content() as $item)
                            <tr>
                                <td>
                                    <figure class="itemside">
                                        <div class="aside"><a href="{{ route('products.show', $item->model->slug) }}"><img src="{{ productImage($item->model->image) }}" class="img-sm"></a></div>
                                        <figcaption class="info">
                                            <a href="{{ route('products.show', $item->model->slug) }}" class="text-dark">{{ $item->model->name }}</a>
                                            <p class="text-muted small">{{ $item->model->details }}</p>
                                        </figcaption>
                                    </figure>
                                </td>
                                <td>
                                    <select class="form-control quantity" data-id="{{ $item->rowId }}">

                                        @for ($i = 1; $i < 10 + 1; $i++)
                                            <option {{ $item->qty == $i ? 'selected' : '' }}>{{ $i }}</option>
                                        @endfor
                                    </select>
                                </td>
                                <td>
                                    <div class="price-wrap">
                                        <var class="price">${{ presentPrice($item->subtotal) }}</var>
                                        <small class="text-muted"> ${{ presentPrice($item->model->price) }} each </small>
                                    </div> <!-- price-wrap .// -->
                                </td>
                                <td class="text-right">
                                    <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip"> <i class="fa fa-heart"></i></a>

                                    <!-- <a href="" class="btn btn-light"> Remove</a> -->
                                    <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button class="btn btn-light" type="submit">Remove</button>

                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="card-body border-top">
                        <a href="{{ route('checkout.index') }}" class="btn btn-primary float-md-right"> Make Purchase <i class="fa fa-chevron-right"></i> </a>
                        <a href="{{ route('products.index') }}" class="btn btn-light"> <i class="fa fa-chevron-left"></i> Continue shopping </a>
                    </div>
                </div> <!-- card.// -->

                <!-- <div class="alert alert-success mt-3">
                    <p class="icontext"><i class="icon text-success fa fa-truck"></i> Free Delivery within 1-2 weeks</p>
                </div> -->

            </main> <!-- col.// -->
            <aside class="col-md-3">
                
                <div class="card">
                    <div class="card-body">
                        <dl class="dlist-align">
                            <dt>Subtotal price:</dt>
                            <dd class="text-right">{{ presentPrice(Cart::subtotal()) }}лв.</dd>
                        </dl>
                        <dl class="dlist-align">
                            <dt>Tax:</dt>
                            <dd class="text-right">{{ presentPrice(Cart::tax()) }}лв.</dd>
                        </dl>
                        <dl class="dlist-align">
                            <dt>Total:</dt>
                            <dd class="text-right  h5"><strong>{{ presentPrice(Cart::total()) }}лв.</strong></dd>
                        </dl>
                        <hr>

                    </div> <!-- card-body.// -->
                </div> <!-- card .// -->
            </aside> <!-- col.// -->
        </div>

        @else

        <h3>No items in Cart!</h3>
        <div class="spacer"></div>
        <a href="{{ route('products.index') }}" class="btn btn-light">Continue Shopping</a>
        <div class="spacer"></div>

        @endif
    </div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
<hr>
<!-- ========================= SECTION  ========================= -->
<section class="section-name bg-white padding-y">
    <div class="container">
        <h6>Payment and refund policy</h6>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    </div><!-- container // -->
</section>
<!-- ========================= SECTION  END// ========================= -->

@endsection

@section('extra-js')
<script>
    (function() {
        const classname = document.querySelectorAll('.quantity')

        Array.from(classname).forEach(function(element) {
            element.addEventListener('change', function() {
                const  id = element.getAttribute('data-id')
                axios.patch(`/cart/${id}`, {
                        quantity: this.value
                    })
                    .then(function(response) {
                        // console.log(response);
                        window.location.href = '{{ route('cart.index') }}'
                        
                    })
                    .catch(function(error) {
                        // console.log(error);
                        window.location.href = '{{ route('cart.index') }}'
                    });
            })
        })
    })();
</script>
@endsection