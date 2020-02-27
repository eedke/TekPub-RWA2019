@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h2 style="color:#ffcc00">{{ $user->name }}'s Order List</h2>
            @foreach($orders as $order)
                <div class="card w-100 border-warning mb-3">
                    <div class="card bg-dark border-warning">
                        <div class="card-body text-secondary border-warning">
                            <h5 class="card-title " style="color:#ffcc00">Order: #{{$order->id}}</h5>
                            <ul class="list-group ">
                                @foreach($order->cart->items as $item)
                                    <li class="list-group-item border-warning bg-dark" style="color:#dcdcdc">
                                        <span class="badge float-right"
                                              style="color:orange">{{ $item['price'] }} KM</span>
                                        <span style="color:orange">{{ $item['item']['title'] }} | {{ $item['qty'] }} Units.</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="card-footer bg-transparent border-warning">
                            <strong style="color:orange">Total Price: {{ $order->cart->totalPrice }} KM</strong>

                            <strong style="color:#ffcc00" class="float-right">Order status:
                                @if ($order->status == 0)
                                    <span class="text-warning">waiting</span>
                                    <a href="{{url('orderAccept/'.$order->id) }}"><i style="color:#ffcc00"
                                                                                     class="fas fa-check-square"></i></a>
                                    <a href="{{url('orderReject/'.$order->id) }}"><i style="color:#ffcc00"
                                                                                     class="fas fa-window-close"></i></a>
                                @elseif($order->status==1)
                                    <span class="text-info">accepted</span>
                                    <a href="{{url('orderComplete/'.$order->id) }}"><i style="color:#ffcc00"
                                                                                       class="fas fa-vote-yea"></i></a>
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
    </div>
@endsection
