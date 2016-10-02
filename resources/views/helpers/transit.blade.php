@extends('master')

@section('content')
    <div class="transit-board">
        <div class="single-return">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default">
                    One Way
                    <span class="pull-right">
                        <i class="fa fa-long-arrow-right"></i>
                    </span>
                </button>
                <button type="button" class="btn btn-default">
                    Return
                    <span class="pull-right">
                        <i class="fa fa-exchange"></i>
                    </span>
                </button>
            </div>

            <div class="booking" style="padding-top:20px;">
                <form>
                    <div class="form-group input-group">
                        <input type="text" data-transit="true" data-url="{{ url('api/googlePlaces') }}" class="form-control" id="exampleInputEmail1" placeholder="FROM">
                        <span class="input-group-addon" id="basic-addon2">
                            <i class="fa fa-map-marker"></i>
                        </span>
                    </div>
                    <div class="form-group input-group">
                        <input type="text" data-transit="true" data-url="{{ url('api/googlePlaces') }}" class="form-control" id="exampleInputPassword1" placeholder="TO">
                        <span class="input-group-addon" id="basic-addon2">
                            <i class="fa fa-map-marker"></i>
                        </span>
                    </div>
                    <div class="form-group input-group">
                        <input type="date" class="form-control" id="exampleInputPassword1"
                               placeholder="{{ date('Y m j') }}">
                        <span class="input-group-addon" id="basic-addon2">
                            <i class="fa fa-calendar"></i>
                        </span>
                    </div>
                    <button type="submit" class="btn btn-default btn-danger" style="width:100%;">{{ @isset($submitText) ? $submitText : 'Search' }}</button>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{ URL::asset('js/transit.js') }}"></script>
@endsection
