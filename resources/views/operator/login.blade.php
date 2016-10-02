@extends('operator.master')

@section('content')
    <div class="content-wrapper">
        <div class="header-wrapper clearfix">
            <div class="image-header">
                <img src="{{ URL::asset('img/transport.jpg') }}">
            </div>
            <div class="tag-line">
                <h2>
                    Login to your Guru Account
                </h2>
                <div class="tag-description">
                    <div class="tag-description">
                        If you don't have a registered account with Guru Technologies, please
                        <a href="{{ url('operator') }}">Register</a> with us today.
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix sign-up-box"
             style="border-radius:10px;margin-top:10px; padding:30px; border-left:1px solid #ddd; min-height:200px;">
            <h3 style="margin-top: 0">Account Details</h3>
            <div class="form-wrapper clearfix" style="padding:10px;">
                <div class="alert alert-danger hide" role="alert">

                </div>
                <form id="registrationForm" method="POST" action="{{ url('operator/signin') }}">
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                               placeholder="{{ $faker->email }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="At least 5 characters">
                    </div>
                    <button type="submit" class="btn btn-info btn-arrow-right">Login</button>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ URL::asset('js/register-form.js') }}"></script>
@endsection
