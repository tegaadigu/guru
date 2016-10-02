<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ Lang::get('home.guru') }} - {{ Lang::get('home.catch_phrase') }}</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="/css/style.css">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/js/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="/js/min/guru.min.js"></script>
</head>
<body>
<div id="wrapper">
    <div class="header">
        <img src=" {{ URL::asset('img/logo/logocolortech.png') }}">
    </div>
    <div id="content">
        @yield('content')
    </div>
</div>
@include('footer')
</body>
</html>
