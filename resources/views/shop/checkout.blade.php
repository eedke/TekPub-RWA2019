@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                <h1 style="color:#ffcc00">Checkout</h1>
                <h4 style="color:#ffcc00">Your Total: {{ $total }} KM</h4>
                <div id="charge-error" class="alert alert-danger {{ !Session::has('error') ? 'd-none' : '' }}">
                    {{ Session::get('error') }}
                </div>
                <form action="{{ route('checkout') }}" method="post" id="checkout-form">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="name" style="color:#ffcc00">Name</label>
                                <input type="text" id="name" class="form-control bg-dark border-warning" style="color:#ffcc00" required
                                       name="name">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="address" style="color:#ffcc00">Address</label>
                                <input type="text" id="address" class="form-control bg-dark border-warning" style="color:#ffcc00"
                                       required name="address">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="card-name" style="color:#ffcc00">Card Holder Name</label>
                                <input type="text" id="card-name" class="form-control bg-dark border-warning" style="color:#ffcc00"
                                       required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="card-number" style="color:#ffcc00">Credit Card Number</label>
                                <input type="text" id="card-number" class="form-control bg-dark border-warning" style="color:#ffcc00"
                                       required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="card-expiry-month" style="color:#ffcc00">Expiration Month</label>
                                        <input type="text" id="card-expiry-month" class="form-control bg-dark border-warning"
                                               style="color:#ffcc00" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="card-expiry-year" style="color:#ffcc00">Expiration Year</label>
                                        <input type="text" id="card-expiry-year" class="form-control bg-dark border-warning"
                                               style="color:#ffcc00" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="card-cvc" style="color:#ffcc00">CVC</label>
                                <input type="text" id="card-cvc" class="form-control bg-dark border-warning" style="color:#ffcc00"
                                       required>
                            </div>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-success">Buy Now</button>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="https://js.stripe.com/v3/"></script>
    <script type="text/javascript" src="{{ URL::to('js/checkout.js') }}"></script>
@endsection
