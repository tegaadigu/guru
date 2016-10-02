@extends('master')

@section('content')
    <div class="dashboard-button">
        <ul class="list-inline list-unstyled">
            @foreach($dashboardButtons->roots() AS $nav)
                <li>
                    <a href="{{ $nav->url() }}">
                        <div class="image">
                            <i class="{{ $nav->attributes['imageUrl'] }}"> </i>
                        </div>
                        {{ $nav->title }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@stop
