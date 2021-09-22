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
							<th scope="col">Numero</th>
							<th scope="col">Floor</th>
							<th scope="col">User</th>
							<th scope="col">Date Debut</th>
                            <th scope="col">Date Fin</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody class="tabody">
						@foreach($books as $book)
								<tr>
									<td>{{$book->room->number}}</td>
									<td>{{$book->room->floor}}</td>
									<td>{{$book->user->firstname}} {{$book->user->lasttname}}</td>
									<td>{{$book->date_in}}</td>
									<td>{{$book->date_out}}</td>
									<td><a href="{{url('/deletebook/'.$book->id)}}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a></td>
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