@extends('layouts.master')


@section('styles')

@endsection

@section('header')
    @include('includes.head')
@endsection

@section('content')

<div class='row mt-4'>
	@foreach($hotels as $hotel)
	<div class='col-md-3'>
		<div class="card bg-light">
			<div class="card-body text-center">
				<a href="{{url('/show/'.$hotel->id)}}"><img src="{{URL::to('images/'.$hotel->image)}}" class="img-fluid"></a>
				<h3 class="card-titel text-danger">{{$hotel->name}}</h3>
				<p class="lead">{{$hotel->city}}</p>
			</div>
		</div>
	</div>
	@endforeach
</div>



@endsection

@section('scripts')

@endsection


@section('footer')
    @include('includes.foot')
@endsection