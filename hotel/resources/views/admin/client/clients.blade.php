@extends('layouts.master')


@section('styles')

@endsection

@section('header')
    @include('includes.head')
@endsection

@section('content')

<div class="row">
	<div class="col-md-12 mt-4">
		<div class="card mx-auto bg-light">
			<div class="card-body">
				@foreach($errors->all() as $error)
                   <div class='alert alert-danger'>{{$error}}</div>
				@endforeach
				@if(Session::has('success'))
                   <div class='alert alert-success'>{{Session::get('success')}}</div>
				@endif
				<table class="table table-striped">
					<thead class='danger'>
						<tr>
							<th scope="col">First Name</th>
							<th scope="col">Last Name</th>
							<th scope="col">Adress</th>
							<th scope="col">City</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody class="tabody">
						@foreach($users as $user)
							<tr>
								<td>{{$user->firstname}}</td>
								<td>{{$user->lastname}}</td>
								<td>{{$user->adress}}</td>
								<td>{{$user->city}}</td>
								<td><a href="{{url('/destroyuser/'.$user->id)}}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a></td>
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