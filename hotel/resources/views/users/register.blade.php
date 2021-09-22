@extends('layouts.master')


@section('styles')

@endsection

@section('header')
    @include('includes.head')
@endsection

@section('content')
<div class="row">
	<div class="col-md-6 mx-auto mt-4">
		@if(Session::has('success'))
				<div class="alert alert-success">
				{{Session::get('success')}}</div>

		@endif
    </div>
</div>

<main>
	 <div class="register">
		 <h1>Register</h1>
		 <form action="{{url('/store')}}" method="post">
			<label>
				<i class="fa fa-user"></i>
				<input type="hidden" name="_token" value="{{Session::token()}}">
			    <input type="text" placeholder="Firstname" name="firstname" id="firstname">
		  </label>
		  <label>
			 <i class="fa fa-envelope"></i>
			 <input type="text" placeholder="LastName" name="lastname" id="lastname">
		  </label>
		  <label>
			 <i class="fa fa-map-marker"></i>
			 <input type="text" placeholder="Adresse" name="adress" id="adress">
		  </label>
		  <label>
			 <i class="fa fa-code"></i>
			 <input type="text" placeholder="Zipcode" name="zipcode" id="zipcode">
		  </label>
		  <label>
			 <i class="fa fa-building"></i>
			 <input type="text" placeholder="City" name="city" id="city">
		  </label>
		   <label>
			 <i class="fa fa-envelope"></i>
			 <input type="email" placeholder="Email" name="email" id="email">
		  </label>
		  <label>
			 <i class="fa fa-lock"></i>
			 <input type="password" placeholder="Password" name="password" id="password">
		  </label>
		  <button name="submit">Register</button>
		 </form>
	 </div>
	</main>

<!-- <div class="row">
	<div class="col-md-6 mx-auto mt-4">
		@if(Session::has('success'))
				<div class="alert alert-success">
				{{Session::get('success')}}</div>

		@endif
		<div class="card bg-danger border-danger">
			<div class="card-body">
				<h3 class="card-titel text-white">Register</h3>
				@foreach($errors->all() as $error)
				   <div class="alert alert-danger">{{$error}}</div>
				@endforeach
				<form action="{{url('/store')}}" method="post">
					<div class="form-group">
						<label for="First Name" class="text-white">First Name</label>
						<input type="hidden" name="_token" value="{{Session::token()}}">
						<input type="text" name="firstname" id="firstname"  class="form-control mt-2" placeholder="First Name">
				   </div>
				   <div class="form-group">
						<label for="Last Name" class="text-white">Last Name</label>
						<input type="text" name="lastname" id="lastname" class="form-control mt-2" placeholder="Last Name">
				   </div>
				   <div class="form-group">
						<label for="Adress" class="text-white">Adress</label>
						<input type="text" name="adress" id="adress" class="form-control mt-2" placeholder="Adress">
				   </div>
				   <div class="form-group">
						<label for="Zip Code" class="text-white">Zip Code</label>
						<input type="number" name="zipcode" id="zipcode" class="form-control mt-2" placeholder="Zip Code">
				   </div>
				   <div class="form-group">
						<label for="City" class="text-white">City</label>
						<input type="text" name="city" id="city" class="form-control mt-2" placeholder="City">
				   </div>
					<div class="form-group">
						<label for="email" class="text-white">Email</label>
						<input type="email" name="email" id="email" class="form-control mt-2" placeholder="Email">
				   </div>
				   <div class="form-group mt-2">
						<label for="password" class="text-white">Password</label>
						<input type="password" name="password" id="password" class="form-control mt-2" placeholder="Password">
				   </div>
				   <div class="form-group">
				   	<button class="btn btn-light btn-block mt-4 col-md-4 general"  name="submit">Register</button>
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