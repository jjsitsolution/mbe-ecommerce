<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <script src="{{ asset('js/app.js') }}"></script>




</head>
<body>
@include('layouts.header')

@include('layouts.nav')

@section('sidebar')

@show

<div class="container">
    @yield('content')
</div>

@include('layouts.footer')

</body>
</html>