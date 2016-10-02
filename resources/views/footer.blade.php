<div id="mobile-footer">
    <ul class="list-unstyled list-inline">
        @foreach($customerNav->roots() AS $nav)
                <li>
                    <a class="{{ isset($nav->attributes['class']) ? $nav->attributes['class'] : '' }}"
                       href="{{ $nav->url() }}">
                        <div>
                            <img class="active" src="{{ URL::asset($nav->attributes['imageUrl']) }}">
                            <img src="{{ URL::asset($nav->attributes['imageGreyUrl']) }}">
                        </div>
                        {{$nav->title}}
                    </a>
                </li>
        @endforeach
    </ul>
</div>
