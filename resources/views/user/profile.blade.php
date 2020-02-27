@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1 style="color:white">User Profile</h1>
            <div class="card w-100 mb-2">
                <div class="card bg-dark">
                    <div class="card-body text-secondary">
                        <h5 class="card-title" style="color:#dcdcdc">Username: {{ $user->name }}</h5>
                        <h5 class="card-title" style="color:#dcdcdc">Email: {{ $user->email }}</h5>
                    </div>
                </div>
            </div>
            <hr>
            @foreach($orders as $order)
                <div class="card w-100 mb-2">
                    <div class="card bg-dark">
                        <div class="card-body text-secondary">
                            <h5 class="card-title" style="color:#dcdcdc">Order: # {{ $order->id }}</h5>
                            <ul class="list-group">
                                @foreach($order->cart->items as $item)
                                    <li class="list-group-item border-white bg-dark" style="color:#dcdcdc">
                                        <span class="badge float-right"
                                              style="color:#dcdcdc">{{ $item['price'] }} KM</span>
                                        {{ $item['item']['title'] }} | {{ $item['qty'] }} Units.
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="card-footer bg-transparent border-white">
                            <strong style="color:#dcdcdc">Total Price: {{ $order->cart->totalPrice }} KM</strong>
                            <strong style="color:#ffcc00" class="float-right">Order status:
                                @if ($order->status == 0)
                                    <span class="text-warning">waiting</span>
                                @elseif($order->status==1)
                                    <span class="text-info">accepted</span>
                                @elseif($order->status==2)
                                    <span class="text-success">complete</span>
                                @else
                                    <span class="text-danger">rejected</span>
                                @endif
                            </strong>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>s
@endsection
