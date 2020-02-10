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
      <a class="dropdown-item" href="{{route('productCategory.search', $val = '1') }}">Hrana</a>
      <a class="dropdown-item" href="{{route('productCategory.search', $val = '11') }}">Piće</a>
    </div>
  </div>
@endsection

@section('content')



    <div class="container">
        <div class="row">
            @if(isset($details))
            <div class="card w-100">
                <p> The Search results for your query <b> {{ $query }} </b> are :</p>
            </div>

                @foreach($details as $product)
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

          @endif




        </div>
    </div>

@endsection

