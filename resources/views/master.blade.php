<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>{{ Lang::get('home.title') }}</title>
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
        <div class="container-fluid">
            <div class="row">
                <div class="left-container col-xs-3 col-md-3 hidden-menu">
                    <div class="signup">
                        <a href="javascript:void(0);" class="btn btn-danger">{{ Lang::get('home.sign_up') }}</a>
                    </div>

                    <div class="left-menu">
                        <ul class="list-unstyled top-list">
                            @foreach($leftNav->roots() AS $nav)
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
                                    <a href="">{{$nav->title}} 
                                        @if($nav->title == 'account')
                                            <span class="pull-right text-muted">{{$name}}</span>
                                        @endif 
                                    </a>
                                </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>

                    <div class="signup">
                        <a href="javascript:void(0);" class="btn btn-danger">Sign Out</a>
                    </div>
                </div>
                <div class="right-container col-xs-12 col-md-12 no-left">
                   @include('component.top-menu')
                    {{--@include('component.bottom-menu')--}}
                    <div class="body">
                         <!-- Section -->
                         @yield('content')
                         @yield('footer')
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
