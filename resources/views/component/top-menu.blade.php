<div class="top-menu clearfix">
    <span class="site-phrase">
        <img src="/img/ticket-icon.png">
        <span>
             INSTANT DIGITAL TICKETING
        </span>
    </span>
    <span class="title">
       <i class="fa fa-map-marker"></i>
        {{ Lang::get('home.guru') }}
    </span>
    @if(\Illuminate\Support\Facades\Auth::check() === false)
        <span class="operator-span">
        <div class="become-operator">
            {{ Lang::get('home.want_to_drive') }}
            <br/>
            <a href="{{ url('operator') }}"
               class="guru-btn btn-danger btn-sm"> {{ Lang::get('home.become_an_operator') }}</a>
        </div>
        </span>
    @else
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
    @endif
</div>
