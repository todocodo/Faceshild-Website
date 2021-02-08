@extends('layouts.app')

@section('title', 'Checkout')

@section('extra-head')
<script src="https://js.stripe.com/v3/"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
@endsection

@section('content')

<section class="section-content padding-y bg-white">
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
        <!-- ============================ COMPONENT 2 ================================= -->
        <div class="row">
            <main class="col-md-8">

                <article class="card mb-4">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Review cart</h4>
                        <div class="row">
                            @foreach (Cart::content() as $item)
                            <div class="col-md-6">
                                <figure class="itemside  mb-4">
                                    <div class="aside widget-header">
                                        <img src="{{ productImage($item->model->image) }}" class="border img-sm">
                                        @if (Cart::instance('default')->count() > 0)
                                        <span class="badge badge-pill notify" style="background-color: #f59f0d; color: white;">{{ $item->qty }}</span>
                                        @endif
                                    </div>
                                    <figcaption class="info">
                                        <p>{{ $item->model->name}}</p>
                                        <p>{{ $item->model->details}}</p>
                                        <span class="text-muted">{{ $item->qty }} X {{ $item->model->price}} = {{ $item->subtotal }}</span>
                                    </figcaption>
                                </figure>
                            </div> <!-- col.// -->
                            @endforeach
                        </div> <!-- row.// -->
                        <a href="{{ route('cart.index') }}" class="btn btn-light ">Edit Cart</a>
                    </div> <!-- card-body.// -->
                </article> <!-- card.// -->

                <form action="{{ route('checkout.store') }}" method="POST" id="payment-form">
                    {{ csrf_field() }}
                    <article class="card mb-4">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Contact info</h4>
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label>Frst name</label>
                                    <input type="text" id="first_name" name="first_name" placeholder="Type here" class="form-control" value="{{ old('first_name') }}" required>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Last name</label>
                                    <input type="text" id="last_name" name="last_name" placeholder="Type here" class="form-control" value="{{ old('last_name') }}" required>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Phone</label>
                                    <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone') }}" required>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Email</label>
                                    <input type="email" id="email" name="email" placeholder="example@gmail.com" class="form-control" value="{{ old('email') }}" required>
                                </div>
                            </div> <!-- row.// -->
                            <div class="row">
                                <div class="col">
                                    <label>Company (optional)</label>
                                    <input type="company" id="company" name="company" class="form-control" value="{{ old('company') }}">
                                </div>
                            </div>
                        </div> <!-- card-body.// -->
                    </article> <!-- card.// -->


                    <article class="card mb-4">
                        <div class="card-body">

                            <h4 class="card-title mb-4">Billing Details</h4>

                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label>Country*</label>
                                    <input type="text" placeholder="Type here" id="country" name="country" class="form-control" value="{{ old('country') }}" required>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>City*</label>
                                    <input type="text" placeholder="Type here" id="city" name="city" class="form-control" value="{{ old('city') }}" required>
                                </div>
                                <div class="form-group col-sm-8">
                                    <label>Address*</label>
                                    <input type="text" placeholder="Type here" id="address" name="address" class="form-control" value="{{ old('address') }}" required>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Postal Code*</label>
                                    <input type="text" placeholder="" id="postal_code" name="postal_code" class="form-control" value="{{ old('postal_code') }}" required>
                                </div>
                            </div> <!-- row.// -->

                        </div> <!-- card-body.// -->
                    </article> <!-- card.// -->

                    <!-- accordion end.// -->
                    <div class="card mt-3">
                        <div class="card-body">
                            <h2>Payment Details</h2>

                            <div class="form-group">
                                <label for="name_on_card">Name on Card</label>
                                <input type="text" class="form-control" id="name_on_card" name="name_on_card" value="">
                            </div>

                            <div class="form-group">
                                <label for="card-element">
                                    Credit or debit card
                                </label>
                                <div id="card-element">
                                    <!-- a Stripe Element will be inserted here. -->
                                </div>

                                <!-- Used to display form errors -->
                                <div id="card-errors" role="alert"></div>
                            </div>
                            <div class="spacer"></div>

                            <button type="submit" id="complete-order" class="btn btn-primary">Complete Order</button>

                        </div>
                    </div>
                </form>
            </main> <!-- col.// -->
            <aside class="col-md-4">
                <div class="card shadow overview-section">
                    <div class="card-body">
                        <h4 class="mb-3">Overview</h4>
                        <dl class="dlist-align">
                            <dt class="text-muted">Delivery:</dt>
                            <dd>Pick-up</dd>
                        </dl>
                        <dl class="dlist-align">
                            <dt class="text-muted">Delivery type:</dt>
                            <dd>Standart</dd>
                        </dl>
                        <dl class="dlist-align">
                            <dt class="text-muted">Payment method:</dt>
                            <dd>Cash</dd>
                        </dl>
                        <hr>
                        <dl class="dlist-align">
                            <dt>Total:</dt>
                            <dd class="h5">{{ Cart::total() }}</dd>
                        </dl>
                        <hr>
                        <p class="small mb-1 text-muted">By clicking you are agree with terms of condition </p>
                        <a href="#">See terms of condition</a>
                        <a href="#" class="btn btn-primary btn-block mt-3"> Button </a>

                    </div> <!-- card-body.// -->
                </div> <!-- card.// -->
            </aside> <!-- col.// -->
        </div> <!-- row.// -->

        <!-- <div id="payment-form">
            <div id="card-element">
               
            </div>
            <button id="submit" class="button-payment">
                <div class="spinner hidden" id="spinner"></div>
                <span id="button-text">Pay</span>
            </button>
            <p id="card-error" role="alert"></p>
            <p class="result-message hidden">
                Payment succeeded, see the result in your
                <a href="" target="_blank">Stripe dashboard.</a> Refresh the page to pay again.
            </p>
        </div> -->

        <!-- ============================ COMPONENT 2 END//  ================================= -->
    </div>
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->



@endsection

@section('extra-js')
<script>
    (function() {
        // Create a Stripe client
        var stripe = Stripe("pk_test_51IDXLSAbc08hf80yqfKaralq5dageaqfLu5xAUPXMD1jATAYJ4owqdzTgaVo9DA6ksvg4YFrVKabYjWqkGqF4pCh00voP8bnEi");
        // Create an instance of Elements
        var elements = stripe.elements();
        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)
        var style = {
            base: {
                color: '#32325d',
                lineHeight: '18px',
                fontFamily: '"Roboto", Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };
        // Create an instance of the card Element
        var card = elements.create('card', {
            style: style,
            hidePostalCode: true
        });
        // Add an instance of the card Element into the `card-element` <div>
        card.mount('#card-element');
        // Handle real-time validation errors from the card Element.
        card.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });
        // Handle form submission
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            // Disable the submit button to prevent repeated clicks
            document.getElementById('complete-order').disabled = true;
            var options = {
                name: document.getElementById('name_on_card').value,
                address_country: document.getElementById('country').value,
                address_city: document.getElementById('city').value,
                address_line: document.getElementById('address').value,
                address_zip: document.getElementById('postal_code').value
            }
            stripe.createToken(card, options).then(function(result) {
                if (result.error) {
                    // Inform the user if there was an error
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                    // Enable the submit button
                    document.getElementById('complete-order').disabled = false;
                } else {
                    // Send the token to your server
                    stripeTokenHandler(result.token);
                }
            });
        });

        function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);
            // Submit the form
            form.submit();
        }

    })();
</script>
@endsection