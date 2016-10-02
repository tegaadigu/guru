<div class="bottom-menu clearfix">
    @if(!isset($user))
        <div class="bottom-menu-right clearfix">
            <ul class="list-unstyled list-inline">
                <li><a href="{{ url('home/login') }}">Login</a></li>
                <li><a href=" {{ url('home/signup') }} ">Sign up</a></li>
            </ul>
        </div>
    @else
        <div class="user-info">
            <img src="{{ URL::asset('img/icon/iconmonstr-user-1-240.png') }}">
            <h4> {{ isset($user) ? $user->name : '' }}</h4>
        </div>
    @endif
</div>
