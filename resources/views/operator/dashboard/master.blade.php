<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf_token"
    ="{{ csrf_token() }}" />
    <title>{{ Lang::get('home.guru') }} - {{ Lang::get('home.catch_phrase') }}</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ URL::asset('/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('/font-awesome/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/dashboard.css') }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Chonburi">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

    <link rel="stylesheet" href="/css/style.css">

    <script type="text/javascript" src="{{ URL::asset('js/min/guru.min.js') }}"></script>
</head>
<body>
<div class="container-fluid no-padding">
    <div class="body no-margin dashboard no-background">
        <div class="operator-container" style="display:table;width:100%;">
            @include('component.top-menu')
            @if(false)
                <div id="left-nav">
                    <div class="header">
                        <i class="fa fa-google"></i>
                    </div>
                    <div style="padding: 18px 18px 10px 18px;color:#fff;" class="clearfix">
                        <div class="image-holder" style="float:left;">
                            <img src="{{ $faker->imageUrl(80, 80, 'business') }}" class="img-circle"
                                 style="padding-right:3px;border: 3px solid #fff;">
                        </div>
                        <div style="float:left;padding:15px;">
                            <h4 style="color:#9E9E9E;;">Welcome,</h4>
                            <div>{{ $user->name }}</div>
                        </div>
                    </div>
                    <div class="clearfix" style="padding:0px 10px;background-color: #fff;">
                        <i class="fa fa-tags" style="padding-right: 5px;"></i><label>Corporate Account</label>
                    </div>
                    <div class="operator-menu">
                        <ul class="list-unstyled top-list">
                            @foreach($operatorNav->roots() AS $nav)
                                @if($nav->hasChildren())
                                    <li class="embeded-list">
                                        <ul class="list-unstyled">
                                            @foreach($nav->children() AS $childNav)
                                                <li><a>{{$childNav->title}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @else
                                    <li>
                                        <a class="{{ isset($nav->attributes['class']) ? $nav->attributes['class'] : '' }}"
                                           href="{{ $nav->url() }}">{{$nav->title}}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>

                </div>
                <div id="right-nav">
                    <div class="content clearfix">
                        <div class="nav clearfix">
                            <ul class="list-unstyled list-inline">
                                <li><a href=""><i class="fa fa-star"> </i> 30 </a></li>
                                <li>
                                    <a href="" class="notification">
                                        <i class="fa fa-bell"></i>
                                        <span class="badge">3</span>
                                    </a>
                                </li>
                                <li class="dropdown-controller">
                                    <a href="" data-toggle="dropdown"> <i class="fa fa-cog"></i> </a>
                                    <ul class="list-unstyled dropdown-menu pull-right">
                                        <li>
                                            <a><i class="fa fa-user"></i>Profile</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('operator/logout') }}"><i class="fa fa-power-off"></i>Logout</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        {{--<div class="infozone clearfix">--}}
                        {{--<h3 style="margin:0;display: inline-block;">{{ $user->name }}</h3> &mdash; Dashboard--}}
                        {{--</div>--}}
                        @yield('content')
                    </div>
                </div>
            @endif
            <div style="display:table-row">
                @include('operator.dashboard.left-navigation')
               <div id="right-nav">
                   @include('component.bottom-menu')
               </div>
            </div>
        </div>
    </div>
</div>
</body>
