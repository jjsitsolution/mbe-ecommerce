<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        @yield('styles')
    </style>
</head>
<body>
@include('layouts.header')

@include('layouts.nav')

@section('sidebar')

@show

<div id="app" class="container">
    @yield('content')
</div>

@include('layouts.footer')
@yield('scripts')
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>