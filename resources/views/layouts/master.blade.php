<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ URL::to('css/bootstrap.min.css') }}">
    <script src="https://kit.fontawesome.com/9f101af870.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ URL::to('css/app.css') }}">
    @yield('styles')
</head>
<body>
@include('layouts.app')

<div class="container">
    @yield('content')
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ URL::to('js/bootstrap.min.js') }}"></script>
@yield('scripts')
</body>
</html>
