@extends('layouts.master')


@section('styles')

@endsection

@section('header')
    @include('includes.head')
@endsection

@section('content')

<div class='row mt-4'>
	<div class='col-md-8 mx-auto'>
		<div class="card bg-light">
			<div class="card-body text-center">
				<img src="{{URL::to('images/'.$hotel->image)}}" class="img-fluid" style="width: 200px;height: 200px;">
				<h3 class="card-titel text-danger">{{$hotel->name}}</h3>
				<p class="lead">{{$hotel->city}}</p>
			</div>
		</div>
		<table class="table table-striped">
			<thead class='danger'>
				<tr>
					<th scope="col">Numero</th>
					<th scope="col">Disponible</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody class="tabody">
				@foreach($hotel->room()->get() as $room)
						<tr>
							<td>{{$room->number}}</td>
							@if($room->desponible == 0)
							<td><div class="dispo">Disponible</div></td>
							    @if(Auth::user())
							       <td><button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#bookingModal{{$room->number}}">Booking</button></td>
							    @else
							        <td><a href='/login' class="btn btn-outline-danger">Login</a></td>
							    @endif
							@else
							 <td><div class="reserv">Booked</div></td>
							@endif
						</tr>
						<!-- Modal -->
						<div class="modal fade" id="bookingModal{{$room->number}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel">Booking Room Number {{$room->number}}</h5>
						        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						      </div>
						      <div class="modal-body">
						        <div class="card bg-light border-danger">
									<div class="card-body">
										<form action="{{url('/book')}}" method="post">
											<div class="form-group">
												<label for="dateDebut">From :</label>
												<input type="date" name="datedebut" class="form-control">
												<input type="hidden" name="_token" value="{{Session::token()}}">
										   </div>
										   <div class="form-group">
												<label for="dateFin">To :</label>
												<input type="date" name="datefin" class="form-control">
												<input type="hidden" name="room_id" value="{{$room->id}}">
										   </div>
										   <div class="modal-footer">
									        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
									        <button type="submit" class="btn btn-primary">Valid</button>
									      </div>
								       </form>
									</div>
								</div>	
						      </div>
						      
						    </div>
						  </div>
						</div>
				@endforeach	
			</tbody>
		</table>
	</div>
</div>



@endsection

@section('scripts')

@endsection


@section('footer')
    @include('includes.foot')
@endsection