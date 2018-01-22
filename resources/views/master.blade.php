<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body>
    <div id="app" class="wrapper">
        @include('layouts.header')

        @include('layouts.nav')

        @section('sidebar')

        @show

        <div class="container">
            @yield('content')
        </div>

        @include('layouts.footer')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')

</body>
</html>