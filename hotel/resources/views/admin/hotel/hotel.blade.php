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
		<div class="card mx-auto bg-light">
			<div class="card-body">
				<div class="row">
					<div class="col-md-12">
						<div class="mb-3 pull-right">
						    <a href="{{url('/createhotel')}}" class="btn btn-lg btn-primary"><i class="fa fa-plus"></i></a>
						</div>
	            </div>
				</div>
				<table class="table table-striped">
					<thead class='danger'>
						<tr>
							<th scope="col">Image</th>
							<th scope="col">Name</th>
							<th scope="col">Room</th>
							<th scope="col">City</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody class="tabody">
						@foreach($hotels as $hotel)
								<tr>
									<td><img src="{{URL::to('images/'.$hotel->image)}}" class="img-float imgh"></td>
									<td>{{$hotel->name}}</td>
									<td>{{$hotel->room}}</td>
									<td>{{$hotel->city}}</td>
									<td>
										<a href="{{url('/edithotel/'.$hotel->id)}}" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i></a>
										<a href="{{url('/deletehotel/'.$hotel->id)}}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
									</td>
								</tr>	
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
    @include('includes.foot')
@endsection