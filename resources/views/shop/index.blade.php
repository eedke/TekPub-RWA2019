@extends('layouts.app')

@section('content')
    @if(Session::has('success'))
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-4">
                <div id="charge-message" class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            </div>
        </div>
    @endif
    <div class="container">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail border border-dark rounded p-2 m-2">
                        <img src="{{$product->imagePath}}" alt="..." class="img-thumbnail img-fluid">
                        <div class="caption">
                            <h3>{{ $product->title }}</h3>
                            <p class="description">{{$product->description}}</p>
                            <div class="clearfix">
                                <div class="float-left price">{{ $product->price }} KM</div>
                                <a href="{{ route('product.addToCart', ['id' => $product->id]) }}"
                                   class="btn btn-success float-right" role="button">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection

