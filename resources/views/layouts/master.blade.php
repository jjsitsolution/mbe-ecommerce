<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>
    <link href="css/app.css" rel="stylesheet">
    <style>
        @yield('styles')
    </style>
</head>
<body>

@section('sidebar')

@show

<div class="container">
    @yield('content')
</div>
</body>
<script src="js/app.js"></script>
</html>