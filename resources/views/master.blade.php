<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Guru - Instant Digital Ticketing.</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="/css/bootstrap.min.css">

        <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">

        <link rel="stylesheet" href="/css/style.css">

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="/js/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="/js/bootstrap.min.js"></script>

         <script type="text/javascript" src="/js/script.js"></script>

        <script type="text/javascript" src="/js/menu.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="left-container col-xs-3 col-md-3 hidden-menu">
                    <div class="signup">
                        <a href="javascript:void(0);" class="btn btn-danger">Sign Up</a>
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
                    <div class="top-menu clearfix">
                        <div class="menu-header clearfix">
                                <div class="menu-header-image">
                                    <img src="/img/ticket-icon.png">
                                </div>
                                <div class="menu-header-text">
                                    INSTANT DIGITAL TICKETING
                                </div>
                        </div>
                        <div class="become-operator clearfix">
                            <div>
                                    WANT TO DRIVE WITH GURU?
                            </div>
                            <button class="btn-danger btn-sm"> BECOME AN OPERATOR</button>
                        </div>
                    </div>
                    <div class="bottom-menu clearfix" >
                        <div class="bottom-menu-left clearfix pull-left">
                            <div class="pull-left menu">
                                <a href="javascript:void(0);" id="toggle-menu" data-show="0">
                                    <i class="fa fa-align-justify"></i>
                                    <span>MENU</span>
                                </a>
                            </div>
                           <div class="mute pull-left menu-desc">
                                YOUR PERSONAL TRAVEL ASSISTANT
                            </div>
                            <div class="menu-title">
                                <a href="/">GURU</a>
                            </div>
                        </div>
                        <div class="bottom-menu-right clearfix pull-left">
                            <ul class="list-unstyled list-inline">
                                <li><a href="">Login</a></li>
                                <li><a href="">Sign up</a></li>
                            </ul>

                            <form class="form-inline">
                              <div class="form-group">
                                <input type="text" class="form-control input-sm" id="exampleInputName2" placeholder="Jane Doe">
                              </div>
                              <div class="form-group">
                                <input type="email" class="form-control input-sm" id="exampleInputEmail2" placeholder="jane.doe@example.com">
                              </div>
                              <button type="submit" class="btn btn-danger">Go</button>
                            </form>
                        </div>
                    </div>
                    <div class="body">
                         <!-- Section -->
                         @yield('content')

                        @if($footer)
                            @include('pages.footer') 
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>