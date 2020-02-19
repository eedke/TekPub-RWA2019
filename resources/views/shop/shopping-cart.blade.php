@extends('layouts.app')

@section('navbar')
    <li class="nav-item">
        <a href="{{ route('product.index') }}" class="nav-link">
            <i class="fas fa-book-open" style="color:white"></i>
            Menu
        </a>
    </li>

    <form action="{{route('product.search') }}" method="POST" role="search">
        {{ csrf_field() }}
        <div class="input-group bg-dark">
            <input type="text" style="color:white" class="form-control bg-dark" name="q"
                placeholder="Search... "> <span class="input-group-btn">
                <button type="submit" class="btn btn-default">
                    <i class="fas fa-search"></i>
                </button>
            </span>
        </div>
    </form>

    <div class="dropdown show bg-dark">
        <a class="btn btn-secondary bg-dark btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Categories
        </a>

        <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item bg-dark" href="{{route('productCategory.search', $val = 'Food') }}" style="color:white">Food</a>
            <a class="dropdown-item bg-dark" href="{{route('productCategory.search', $val = 'Drinks') }}" style="color:white">Drinks</a>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        @if(Session::has('cart'))
            <div class="row justify-content-center">
                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                    <ul class="list-group bg-dark">
                        @foreach($products as $product)
                            <li class="list-group-item bg-dark border-warning">
                            <img src="{{ $product['item']['imagePath']}}" style="max-height:60px;">&nbsp;
                                <span class="badge badge-secondary float-right">{{ $product['qty'] }}</span>
                                <strong><span style="color: #DCDCDC; ">{{ $product['item']['title'] }}</span></strong>
                                <span class="badge badge-success">{{ $product['price'] }} KM</span>
                                <div class="btn-group">
                                    &nbsp
                                    <a href="{{ route('product.increaseByOne', ['id' => $product['item']['id']]) }}"><i
                                            class="fas fa-plus-circle">&nbsp</i></a>
                                    <a href="{{ route('product.reduceByOne', ['id' => $product['item']['id']]) }}"><i
                                            class="fas fa-minus-circle">&nbsp</i></a>
                                    <a href="{{ route('product.removeItem', ['id' => $product['item']['id']]) }}"><i
                                            class="fas fa-trash-alt">&nbsp</i></a>

                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                    <h4><span style="color: #DCDCDC; ">Total: {{ $totalPrice }} KM</span></h4>

                 </div>
            </div>
            <hr style="border-top: 1px solid orange;">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                    <a href="{{ route('product.removeAll')}}" type="button" class="btn btn-danger" onclick="myFunction()">Remove All Items from Cart</a>
                    <a href="{{ route('checkout') }}" type="button" class="btn btn-success">Checkout</a>
                    <a href="{{ route('product.index') }}" class="btn btn-primary">Return to Menu</a>
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                    <h2 style="color:white">No items in cart.</h2>
                </div>
            </div>
        @endif
    </div>
@endsection
