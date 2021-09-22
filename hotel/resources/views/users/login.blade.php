@extends('layouts.master')


@section('styles')

@endsection

@section('header')
    @include('includes.head')
@endsection

@section('content')
<div class="row">
	<div class="col-md-6 mx-auto mt-4">
	    @foreach($errors->all() as $error)
			<div class="alert alert-danger">{{$error}}</div>
		@endforeach
		@if(Session::has('fail'))
			<div class="alert alert-danger">{{Session::get('fail')}}</div>
		@endif
    </div>
</div>

<main>
        
	 <div class="login">
		 <h1>Login</h1>
		 <form action="{{url('/auth')}}" method="post">
		   <label>
			 <i class="fa fa-envelope"></i>
			 <input type="hidden" name="_token" value="{{Session::token()}}">
			 <input type="email" placeholder="Email" name="email" id="email">
		  </label>
		  <label>
			 <i class="fa fa-lock"></i>
			 <input type="password" placeholder="Password" name="password" id="password">
		  </label>
		  <button name="submit">Login</button>
		 </form>
		 <div class="password">
		  <a href="#">Forgot Password</a>
		  <a href="#">Register</a>
		 </div>
	 </div>
</main>

<!-- <div class="row">
	<div class="col-md-6 mx-auto mt-4">
		@foreach($errors->all() as $error)
			<div class="alert alert-danger">{{$error}}</div>
		@endforeach
		@if(Session::has('fail'))
				<div class="alert alert-danger">
				{{Session::get('fail')}}</div>

		@endif
		<div class="card bg-danger border-danger">
			<div class="card-body">
				<h3 class="card-titel text-white">Conexion</h3>
				<form action="{{url('/auth')}}" method="post">
					<div class="form-group">
						<label for="email" class="text-white">Email</label>
						<input type="hidden" name="_token" value="{{Session::token()}}">
						<input type="email" name="email" id="email" class="form-control mt-2" placeholder="Email">
				   </div>
				   <div class="form-group mt-2">
						<label for="password" class="text-white">Password</label>
						<input type="password" name="password" id="password" class="form-control mt-2" placeholder="Password">
				   </div>
				   <div class="form-group">
				   	<button class="btn btn-light btn-block mt-4 col-md-4 general"  name="submit">Login</button>
				   </div>
				
		       </form>
			</div>
		</div>	
		
	</div>
</div> -->

@endsection

@section('scripts')

@endsection


@section('footer')
    @include('includes.foot')
@endsection