<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf_token" ="{{ csrf_token() }}" />
    <title>{{ Lang::get('home.guru') }} - {{ Lang::get('home.catch_phrase') }}</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ URL::asset('/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('/font-awesome/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/operator.css') }}">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

    <script type="text/javascript" src="{{ URL::asset('js/min/guru.min.js') }}"></script>
</head>
<body>
<div class="body">
    <div class="header">
        <h2>Guru <span class="small-header"> Technologies</span></h2>
    </div>
    <div class="content">
        @yield('content')
    </div>
</div>
</body>
