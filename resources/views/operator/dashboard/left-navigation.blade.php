<div id="left-nav">
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
