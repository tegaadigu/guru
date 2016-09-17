@extends('operator.master')

@section('content')
    <div class="content-wrapper">
        <div class="header-wrapper clearfix">
            <div class="image-header">
                <img src="{{ URL::asset('img/transport.jpg') }}">
            </div>
            <div class="tag-line">
                <h2>
                    Sign up to ride with Guru.
                </h2>
                <div class="tag-description">
                    {{ $faker->paragraph(3, true) }}
                </div>
            </div>
        </div>
        <div class="clearfix sign-up-box"
             style="border-radius:10px;margin-top:10px; padding:30px; border-left:1px solid #ddd; min-height:200px;">
            <h3 style="margin-top: 0">Account Details</h3>
            <div class="form-wrapper clearfix" style="padding:10px;">
                <div class="alert alert-danger hide" role="alert">

                </div>
                <form id="registrationForm" method="POST" action="{{ url('operator/register') }}">
                    {!! csrf_field() !!}

                    <div class="btn-group form-group account_type" role="group">
                        <button type="button" data-value="1" class="btn btn-default btn-success">Private</button>
                        <button type="button" data-value="2" class="btn btn-default">Company</button>
                        <input type="hidden" name="account_type" value="1">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Preferred Names</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                               placeholder="{{ $faker->name }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                               placeholder="{{ $faker->email }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="At least 5 characters">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password Confirmation</label>
                        <input type="password" name="password_confirmation" class="form-control"
                               placeholder="confirm password">
                    </div>
                    <button type="submit" class="btn btn-info btn-arrow-right">Register</button>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ URL::asset('js/register-form.js') }}"></script>
@endsection
