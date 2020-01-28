@extends('layouts.app')

@section('content')
    <div class="container">
        @if(Session::has('cart'))
            <div class="row justify-content-center">
                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                    <ul class="list-group">
                        @foreach($products as $product)
                            <li class="list-group-item">
                                <span class="badge badge-secondary float-right">{{ $product['qty'] }}</span>
                                <strong>{{ $product['item']['title'] }}</strong>
                                <span class="badge badge-success">{{ $product['price'] }} KM</span>
                                <div class="btn-group">
                                    &nbsp
                                            <a href="{{ route('product.increaseByOne', ['id' => $product['item']['id']]) }}"><i class="fas fa-plus-circle">&nbsp</i></a>
                                            <a href="{{ route('product.reduceByOne', ['id' => $product['item']['id']]) }}"><i class="fas fa-minus-circle">&nbsp</i></a>
                                            <a href="{{ route('product.removeItem', ['id' => $product['item']['id']]) }}"><i class="fas fa-trash-alt">&nbsp</i></a>

                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                    <strong>Total: {{ $totalPrice }} KM</strong>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                    <a href="{{ route('checkout') }}" type="button" class="btn btn-success">Checkout</a>
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                    <h2>No items in cart.</h2>
                </div>
            </div>
        @endif
    </div>
@endsection
