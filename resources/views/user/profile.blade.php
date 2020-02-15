@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1 style="color:white">User Profile</h1>
            @foreach($orders as $order)
                <div class="card w-100">
                    <div class="card bg-dark">
                        <div class="card-body text-secondary">
                            <h5 class="card-title" style="color:#dcdcdc">My orders</h5>
                            <ul class="list-group">
                                @foreach($order->cart->items as $item)
                                    <li class="list-group-item border-white bg-dark" style="color:#dcdcdc">
                                        <span class="badge float-right" style="color:#dcdcdc">{{ $item['price'] }} KM</span>
                                        {{ $item['item']['title'] }} | {{ $item['qty'] }} Units.
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="card-footer bg-transparent border-white">
                            <strong style="color:#dcdcdc">Total Price: {{ $order->cart->totalPrice }} KM</strong>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
