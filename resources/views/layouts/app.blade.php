<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TekPub') }}</title>


    <!-- Scripts -->
    <link rel="stylesheet" href="{{ URL::to('css/bootstrap.min.css') }}">
    <script src="https://kit.fontawesome.com/9f101af870.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ URL::to('js/bootstrap.min.js') }}"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body style="background-color:#353942">
<div id="app">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm fixed-top" style="border-bottom: 3px solid #ffcc00;">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="https://i.ibb.co/GCf1kKs/logo.png" height="35px" alt="TekPub">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    @yield('navbar')
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a href="{{ route('product.shoppingCart') }}" class="nav-link" style="color:#ffcc00">
                            <i class="fa fa-shopping-cart" style="color:#ffcc00" aria-hidden="true"></i>
                            Shopping Cart
                            <span
                                class="badge badge-warning">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
                        </a>
                    </li>
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}" style="color:#ffcc00">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}"
                                   style="color:#ffcc00">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown bg-dark ">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle bg-dark" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre
                               style="color:#ffcc00; ">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right bg-dark border-warning"
                                 aria-labelledby="navbarDropdown">
                                <a class="border-warning dropdown-item bg-dark" href="{{ route('user.profile') }}"
                                   style="color:#ffcc00">
                                    {{ __('Profile') }}
                                </a>
                                @can('manage-users')
                                    <a class="border-warning dropdown-item bg-dark" href="{{ route('allOrders.view') }}"
                                       style="color:#ffcc00; ">
                                        All orders
                                    </a>
                                    <a class="border-warning dropdown-item bg-dark"
                                       href="{{ route('admin.users.index') }}" style="color:#ffcc00; ">
                                        User Management
                                    </a>
                                @endcan
                                <hr style="border-top: 1px solid #ffcc00;">
                                <a class="dropdown-item bg-dark" href="{{ route('logout') }}" style="color:#ffcc00"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4 mt-5">
        @yield('content')
    </main>
</div>
</body>
</html>
