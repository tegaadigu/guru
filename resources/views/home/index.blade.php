@extends('master')

@section('content')
	<div class="clearfix" style="width:100%;margin:0 auto;padding:30px 0px;text-align:center;float:none;">
		<div class="home-trip-container" style="width:30%;margin:0px auto;color:#fff;">
			<div style="background-color:#232222;padding:10px 0px;border-radius:2px;">
				BOOK A TRIP
			</div>

			<form id="home-trip-form">
				<div class="form-group has-feedback">
				  <input type="text" class="form-control input-lg" placeholder="From">
				  <span class="fa fa-map-marker form-control-feedback" aria-hidden="true"></span>
				</div>

				<div class="form-group has-feedback">
				  <input type="text" class="form-control input-lg" placeholder="To">
				  <span class="fa fa-map-marker form-control-feedback" aria-hidden="true"></span>
				</div>

				<div class="form-group has-feedback">
				  <input type="text" class="form-control input-lg" placeholder="Date">
				  <span class="fa fa-calendar form-control-feedback" aria-hidden="true"></span>
				</div>

				<button type="submit" class="btn btn-danger" style="width:100%;padding:10px 12px;">Find Trips</button>
			</form>
		</div>
    </div>
@stop

@section('footer')
	@include('home.footer')
@stop
