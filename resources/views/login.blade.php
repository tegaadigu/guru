<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ Lang::get('home.guru') }} - {{ Lang::get('home.catch_phrase') }}</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ URL::asset('/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('/font-awesome/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}">

    <link rel="icon"
          type="image/png"
          href="{{ URL::asset('img/logo/Logo1.png') }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

    <script type="text/javascript" src="{{ URL::asset('js/min/guru.min.js') }}"></script>

    <script type="text/javascript" src="{{ URL::asset('js/register-form.js') }}"></script>

</head>
<body>
<div class="body">
    <div id="wrapper">
        <div class="mobile-title">
            Online Digital Ticketing
        </div>
        <div class="login-icon">
            <img src=" {{ URL::asset('img/logo/login-icon.png') }}">
        </div>
        <div class="header">
            <img src=" {{ URL::asset('img/logo/logocolortech.png') }}">
        </div>
        <div class="form-dialog">
            <div class="header">
                <h3>Log In To My Guru</h3>
                <small class="text-muted">Dont have an account? <a>Sign up</a></small>
            </div>
            <div class="form-holder">
                <small class="text-muted">All fields are required</small>
                <div class="alert alert-danger hide" role="alert">

                </div>
                <form id="registrationForm" method="POST" action="{{ url('signin') }}">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Account Type</label>
                       <select class="form-control" name="accountType">
                           <option value="{{ \App\User::CUSTOMER }}">Customer</option>
                           <option value="{{ \App\User::OPERATOR }}">Operator</option>
                       </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address OR Phone Number</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                               placeholder="Email address or phone number">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="password">
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember_me"> Remember Me.
                        </label>
                    </div>

                    <div class="clearfix">
                        <button class="btn btn-danger">Log In</button>
                    </div>
                    <p class="text-muted small text-center">Forgot your login details? Get help signing in</p>

                    <div style="padding-top:10px;">
                        <a> Continue as guest ></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="mobile-footer">
        <small> Dont have an account?</small>
        <a href="">sign up.</a>
    </div>
</div>
</body>
