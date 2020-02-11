@extends('layouts.app')

@section('navbar')
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
      <a class="dropdown-item" href="{{route('productCategory.search', $val = 'Food') }}">Hrana</a>
      <a class="dropdown-item" href="{{route('productCategory.search', $val = 'Drinks') }}">Piće</a>
    </div>
  </div>
@endsection

@section('content')



    <div class="container">
        <div class="row">
            @if(isset($details))
                @foreach($details as $product)
                <div class="col-sm-6 col-md-4">
                    <div class="card-deck">
                        <div class="card bg-dark border-warning mb-3 text-white" style="width: 22rem;">
                            <img class="card-img-top" src="{{$product->imagePath}}" alt="{{$product->title}}">
                            <div class="card-body">
                                <h3 class="card-title">{{ $product->title }}</h3>
                                <p class="card-text"><span style="color: #a9a9a9; ">{{$product->description}}</span></p>
                                <div class="card-footer bg-transparent border-warning">
                                    <h6 class="float-left"><span style="color: #DCDCDC; ">{{$product->subtype}}</span></h6>
                                    <a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn float-right btn-primary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

          @endif




        </div>
    </div>

@endsection

