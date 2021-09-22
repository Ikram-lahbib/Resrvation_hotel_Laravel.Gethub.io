@extends('layouts.master')


@section('styles')

@endsection

@section('header')
    @include('includes.head')
@endsection

@section('content')

<div class="row mt-4">
	@if(Session::has('sucesse'))
		<div class="alert alert-success">{{Session::get('sucesse')}}</div>
	@endif
	<div class="col-md-12 mt-4">
		<div class="row">
			<div class="col-md-3">
				<div class="card mx-auto bg-danger text-center">
					<div class="card-body">
						<a href="{{url('/booking')}}" class="text-white"><i class='fa fa-book fa-4x d-bloc mb-3'></i></a>
						<h2><span class="badge bg-light text-dark">{{count($books)}}</span></h2>
					</div>
		        </div>
	        </div>
	        <div class="col-md-3">
				<div class="card mx-auto bg-danger text-center">
					<div class="card-body">
						<a href="{{url('/room')}}" class="text-white"><i class='fa fa-bed fa-4x d-bloc mb-3'></i></a>
						<h2><span class="badge bg-light text-dark">{{count($rooms)}}</span></h2>
					</div>
		        </div>
	        </div>
	        <div class="col-md-3">
				<div class="card mx-auto bg-danger text-center">
					<div class="card-body">
						<a href="{{url('/hotel')}}" class="text-white"><i class='fa fa-home fa-4x d-bloc mb-3'></i></a>
						<h2><span class="badge bg-light text-dark">{{count($hotels)}}</span></h2>
					</div>
		        </div>
	        </div>
	        <div class="col-md-3">
				<div class="card mx-auto bg-danger text-center">
					<div class="card-body">
						<a href="{{url('/listClient')}}" class="text-white"><i class='fa fa-user fa-4x d-bloc mb-3'></i></a>
						<h2><span class="badge bg-light text-dark">{{count($users)-1}}</span></h2>
					</div>
		        </div>
	        </div>

	    </div>
		
	</div>
</div>
@endsection

@section('scripts')

@endsection


@section('footer')
    @include('includes.foot')
@endsection