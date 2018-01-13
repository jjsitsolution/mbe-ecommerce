<html>
<head>
    <title>@yield('title')</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
@section('sidebar')

@show

<div class="container">
    @yield('content')
</div>
</body>
</html>