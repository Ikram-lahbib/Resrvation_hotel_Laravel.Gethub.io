@extends('layouts.master')


@section('styles')

@endsection

@section('header')
    @include('includes.header')
@endsection

@section('content')

<div class="row mt-4">
	@if(Session::has('sucesse'))
		<div class="alert alert-success">{{Session::get('sucesse')}}</div>
	@endif
	<div class="col-md-12 mt-4">
		<div class="card mx-auto bg-light">
			<div class="card-body">
				<div class="row">
					<div class="col-md-12">
						<div class="mb-3 pull-right">
						    <a href="{{url('/createroom')}}" class="btn btn-lg btn-primary"><i class="fa fa-plus"></i></a>
						</div>
	            </div>
				</div>
				<table class="table table-striped">
					<thead class='danger'>
						<tr>
							<th scope="col">Numero</th>
							<th scope="col">Disponible</th>
							<th scope="col">Floor</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody class="tabody">
						@foreach($rooms as $room)
						   @if($room->is_deleted == 0)
								<tr>
									<td>{{$room->number}}</td>
									@if($room->desponible == 0)
									<td><div class="dispo">Disponible</div></td>
									@else
									<td><div class="reserv">Reserve</div></td>
									@endif
									<td>{{$room->floor}}</td>
									<td>
										<a href="{{url('/editroom/'.$room->id)}}" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i></a>
										<a href="{{url('/deleteroom/'.$room->id)}}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
										<a href="{{url('/desactive/'.$room->id)}}" class="btn btn-xs btn-info"><i class="fa fa-hand-paper-o"></i></a>
									</td>
								</tr>
							@endif	
						@endforeach
					</tbody>
				</table>
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