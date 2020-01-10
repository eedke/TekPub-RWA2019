@extends('layouts.app')

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<style>
    body { -webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; font-family: 'Lato', sans-serif; letter-spacing: 0px; font-size: 16px; color: #6e726e; font-weight: 400; line-height: 27px; }
    h1, h2, h3, h4, h5, h6 { color: #121312; margin: 0px 0px 15px 0px; font-weight: 400; font-family: 'Zilla Slab', serif; }
    h1 { font-size: 38px; line-height: 48px; }
    h2 { font-size: 36px; line-height: 42px; }
    h3 { font-size: 26px; line-height: 36px; }
    h4 { font-size: 20px; line-height: 26px; }
    h5 { font-size: 16px; }
    h6 { font-size: 12px; }
    p { margin: 0 0 24px; line-height: 1.6; }
    p:last-child { margin: 0px; }
    ul, ol { list-style: none; margin: 0; padding: 0; }
    a { text-decoration: none; color: #121312; -webkit-transition: all 0.3s; -moz-transition: all 0.3s; transition: all 0.3s; }
    a:focus, a:hover { text-decoration: none; color: #1aa644; }







    .menu-block { margin-bottom: 30px; }
    .menu-title { border-bottom: 3px solid #e0e6e3; margin-bottom: 36px; padding-bottom: 10px; }
    .menu-content { border-bottom: 1px solid #e0e6e3; margin-bottom: 30px; }
    .dish-img { }
    .dish-content { margin-top: 12px; margin-bottom: 40px; }
    .dish-meta { font-size: 12px; text-transform: uppercase; display: block; width: 210px; line-height: 1.7; }
    .dish-title { margin-bottom: 6px; font-size: 15px; text-transform: uppercase; font-weight: 500; position: relative; }
    .dish-price { position: absolute; right: 16px; top: 0px; font-size: 26px; color: #e03c23; font-weight: 500; font-family: 'Zilla Slab', serif; }
    .well-block .dish-meta { width: 100%; }
    .well-block .dish-price { font-size: 26px; color: #e03c23; font-weight: 500; font-family: 'Zilla Slab', serif; position: inherit; }

</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center
                ">
                        <div class="page-section">
                            <h1 class="page-title">Food Menu</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="card-body">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb40">
                        <div class="menu-block">
                            <h3 class="menu-title">Soup</h3>
                    @foreach($products as $product)

                        <div class="menu-content">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="dish-img"><a href="#"><img src="{{ $product->image }}" style="width:70px; height:70px; " alt="" class="img-circle"></a></div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                    <div class="dish-content">
                                        <h5 class="dish-title"><a href="#">{{ $product->name }}</a></h5>
                                        <span class="dish-meta">{{ $product->description }}</span>
                                        <div class="dish-price">
                                            <p>{{ $product->price }}</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb40">
                        <div class="menu-block">
                            <h3 class="menu-title">Soup</h3>
                            @foreach($products as $product)

                                <div class="menu-content">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="dish-img"><a href="#"><img src="{{ $product->image }}" style="width:70px; height:70px; " alt="" class="img-circle"></a></div>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <div class="dish-content">
                                                <h5 class="dish-title"><a href="#">{{ $product->name }}</a></h5>
                                                <span class="dish-meta">{{ $product->description }}</span>
                                                <div class="dish-price">
                                                    <p>{{ $product->price }}</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb40">
                        <div class="menu-block">
                            <h3 class="menu-title">Soup</h3>
                            @foreach($products as $product)
                                @if($product->price>15)
                                <div class="menu-content">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="dish-img"><a href="#"><img src="{{ $product->image }}" style="width:70px; height:70px; " alt="" class="img-circle"></a></div>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <div class="dish-content">
                                                <h5 class="dish-title"><a href="#">{{ $product->name }}</a></h5>
                                                <span class="dish-meta">{{ $product->description }}</span>
                                                <div class="dish-price">
                                                    <p>{{ $product->price }}</p>
                                                </div>
                                                <button>Dugme</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
