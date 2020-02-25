@extends('layouts.app')

@section('navbar')
<form action="{{route('product.search') }}" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group bg-dark">
        <input type="text" style="color:#a17f1a" class="form-control bg-dark border-warning" name="q"
            placeholder="Search... "> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <i class="fas fa-search" style="color:#ffcc00"></i>
            </button>
        </span>
    </div>
</form>

<div class="dropdown show bg-dark">
    <a class="btn btn-secondary bg-dark border-warning btn-sm dropdown-toggle" style="color:#ffcc00" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Categories
    </a>

    <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuLink">
        <a class="dropdown-item bg-dark" href="{{route('productCategory.search', $val = 'Food') }}" style="color:#ffcc00">Food</a>
        <a class="dropdown-item bg-dark" href="{{route('productCategory.search', $val = 'Drinks') }}" style="color:#ffcc00">Drinks</a>
    </div>
</div>
@endsection

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
                    <div class="card-deck">
                    <div class="card bg-dark border-warning mb-3" style="width: 22rem; height:31rem">
                        <img class="card-img-top" src="{{$product->imagePath}}" alt="{{$product->title}}">
                        <div class="card-body">
                            <h3 class="card-title text-white">{{ $product->title }}</h3>
                            <p class="card-text"><span style="color:#dcdcdc; ">{{$product->description}}</span></p>
                            <div class="card-footer bg-transparent border-warning" style=" position:absolute; bottom:0px; left:0; width:100%; height:60px;">
                                <h5 class="float-left text-white"><span>{{$product->price}}KM</span></h5>
                            <a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn float-right btn-warning">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            @endforeach
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        {{ $products->links()}}
                    </div>
                </div>
        </div>
    </div>

@endsection



