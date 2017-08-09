<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CompuKami</title>
    <link rel="stylesheet" href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}">
    <script src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }}"></script>

</head>
<body>
    <header>
        @include('partials.navbar')
    </header>

    <div class="container">
        
        @notification()

        @yield('content')
    </div>
</body>
</html>
