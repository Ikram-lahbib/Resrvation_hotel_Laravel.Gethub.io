@extends('layouts.master')


@section('styles')

@endsection

@section('header')
    @include('includes.header')
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
				<form action="{{url('/updateroom/'.$rooms->id)}}" method="post">
					<div class="form-group">
						<label for="Number" class="text-white">Number</label>
						<input type="hidden" name="_token" value="{{Session::token()}}">
						<input type="number" name="number" id="number"  class="form-control mt-2" placeholder="Number" value="{{$rooms->number}}">
				   </div>
				   <div class="form-group">
						<label for="Floor" class="text-white">Floor</label>
						<input type="number" name="floor" id="floor" class="form-control mt-2" placeholder="Floor" value="{{$rooms->floor}}">
				   </div>
				   <div class="form-group">
						<label for="Hotel" class="text-white">Hotel</label>
						<select name="hotel" id="hotel" class="form-control">
							@foreach($hotels as $hotel)
								@if($rooms->id_hotel == $hotel->id)
								    <option value="{{$hotel->id}}" selected>{{$hotel->name}}</option>
								@else
								    <option value="{{$hotel->id}}">{{$hotel->name}}</option>
								@endif
							@endforeach
						</select>
				   </div>
				   <div class="form-group">
						<label for="Desponible" class="text-white">Desponible</label>
						<select name="desponible" id="desponible" class="form-control">
							@if($rooms->desponible==0)
							<option value="0" selected>Disponible</option>
							<option value="1">Reserver</option>
                            @else
                            <option value="0">Disponible</option>
							<option value="1" selected>Reserver</option>
							@endif
						</select>
				   </div>
				   <div class="form-group">
				   	<button class="btn btn-light btn-block mt-4 col-md-4 general"  name="submit">Edit Room</button>
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
    @include('includes.footer')
@endsection