@extends('layouts.master')


@section('styles')

@endsection

@section('header')
    @include('includes.head')
@endsection

@section('content')

<div class="row">
	<div class="col-md-6 mx-auto mt-4">
		@if(Session::has('sucesse'))
				<div class="alert alert-success">
				{{Session::get('sucesse')}}</div>

		@endif
		<div class="card bg-danger border-danger">
			<div class="card-body">
				<h3 class="card-titel text-white">Edit Room</h3>
				@foreach($errors->all() as $error)
				   <div class="alert alert-danger">{{$error}}</div>
				@endforeach
				<form action="{{url('/updatehotel/'.$hotel->id)}}" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="Image" class="text-white">Image</label>
						<input type="file" name="image" id="image" class="form-control mt-2" value="{{$hotel->image}}">
				   </div>
					<div class="form-group">
						<label for="Name" class="text-white">Name</label>
						<input type="hidden" name="_token" value="{{Session::token()}}">
						<input type="text" name="name" id="name"  class="form-control mt-2" value="{{$hotel->name}}">
				   </div>
				   <div class="form-group">
						<label for="City" class="text-white">City</label>
						<input type="text" name="city" id="city" class="form-control mt-2" value="{{$hotel->city}}">
				   </div>
				   <div class="form-group">
						<label for="Room" class="text-white">Room</label>
						<input type="number" name="room" id="room" class="form-control mt-2" value="{{$hotel->room}}">
				   </div>
				   <div class="form-group">
				   	<button class="btn btn-light btn-block mt-4 col-md-4 general"  name="submit">Edit Hotel</button>
				   </div>
				
		       </form>
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