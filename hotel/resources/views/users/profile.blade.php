@extends('layouts.master')


@section('styles')

@endsection

@section('header')
    @include('includes.header')
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
				<h1 class="text-danger">Client Information</h1>
				<ul class="col-md-6 mx-auto">
					<li class="list-group-item">First Name:{{Auth::user()->firstname}}</li>
					<li class="list-group-item">Last Name:{{Auth::user()->lastname}}</li>
					<li class="list-group-item">Adress:{{Auth::user()->adress}}</li>
					<li class="list-group-item">City:{{Auth::user()->city}}</li>
				</ul>
				<hr>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12 mt-4">
		<div class="card mx-auto bg-light">
			<div class="card-body">
				<table class="table table-striped">
					<thead class='danger'>
						<tr>
							<th scope="col">Numero</th>
							<th scope="col">Floor</th>
							<th scope="col">Date Debut</th>
                            <th scope="col">Date Fin</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody class="tabody">
						@foreach(Auth::user()->booking as $book)
								<tr>
									<td>{{$book->room->number}}</td>
									<td>{{$book->room->floor}}</td>
									<td>{{$book->date_in}}</td>
									<td>{{$book->date_out}}</td>
									<td><a href="{{}}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a></td>
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
    @include('includes.footer')
@endsection