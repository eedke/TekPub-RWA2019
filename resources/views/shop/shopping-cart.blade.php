@extends('layouts.app')

@section('navbar')
    <li class="nav-item">
        <a href="{{ route('product.index') }}" class="nav-link">
            <i class="fas fa-book-open"></i>
            Menu
        </a>
    </li>

    <form action="/search" method="POST" role="search">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" class="form-control" name="q"
                placeholder="Pretraži... "> <span class="input-group-btn">
                <button type="submit" class="btn btn-default">
                    <i class="fas fa-search"></i>
                </button>
            </span>
        </div>
    </form>

    <div class="dropdown show">
        <a class="btn btn-secondary btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Kategorije
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="{{route('productCategory.search', $val = '1') }}">Hrana</a>
          <a class="dropdown-item" href="{{route('productCategory.search', $val = '11') }}">Piće</a>
        </div>
      </div>
@endsection

@section('content')
    <div class="container">
        @if(Session::has('cart'))
            <div class="row justify-content-center">
                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                    <ul class="list-group">
                        @foreach($products as $product)
                            <li class="list-group-item">
                            <img src="{{ $product['item']['imagePath']}}" style="max-height:60px;">&nbsp;
                                <span class="badge badge-secondary float-right">{{ $product['qty'] }}</span>
                                <strong>{{ $product['item']['title'] }}</strong>
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
                    <strong>Total: {{ $totalPrice }} KM</strong>

                 </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                    <a href="{{ route('checkout') }}" type="button" class="btn btn-success">Checkout</a>
                    <a href="{{ route('product.removeAll')}}" type="button" class="btn btn-danger" onclick="myFunction()">Isprazni košaricu</a>
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
