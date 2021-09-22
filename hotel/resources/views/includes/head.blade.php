<header>
    	<aside>
    		<div class="logo">
    			<div class="titel"><h1>H</h1><div class="cercle"></div><h1>TEL</h1></div>
    			<h3>Booking</h3>
    		</div>
    		<nav>
    			<ul>
    				<li><a class="active" href="Home.html">HOME</a></li>
    				<li><a href="{{url('/booking')}}">BOOKING</a></li>
    				<li><a href="{{url('/listhotel')}}">HOTEL</a></li>
    				<li><a>COUNT</a>
                        <ul>
							@if(!Auth::user())
								<li><a href="{{url('/login')}}">Login</a></li>
								<li><a href="{{url('/register')}}">Register</a></li>
							@else
							@if(Auth::user()->is_admin)
								<li><a href="{{url('/admin')}}">Admin</a></li>
							@endif
								<li><a  href="{{url('/profil')}}">{{Auth::user()->firstname}} {{Auth::user()->lastname}}</a></li>
								<li><a href="{{url('/logout')}}">Log out</a></li>
							@endif
                     </ul>
                    </li>
    			</ul>
    		</nav>
			<div class="botton">
				<div class="card bg-light border-warning">
					<div class="card-body">
						<form action="" method="post">
							<div class="form-group">
								<label for="dateDebut">From :</label>
								<input type="date" name="datedebut" class="form-control">
							</div>
							<div class="form-group">
									<label for="dateFin">To :</label>
									<input type="date" name="datefin" class="form-control">
							</div>
							<div class="form-group">
									<label for="dateFin">Person :</label>
									<input type="number" name="person" class="form-control">
							</div>
							<div class="form-group">
									<label for="dateFin">Child :</label>
									<input type="number" name="child" class="form-control">
							</div>
						<div class="form-group">
							<button class="btn btn-warning btn-block mt-4 col-sm-4"  name="submit">Search</button>
						</div>
						
					</form>
					</div>
			    </div>
			</div>
		
			
    		<div class="service">
    			<ul>
    				<li><i class="fa fa-search" aria-hidden="true"></i><a href="#">SEARCH</a></li>
					<li><i class="fa fa-money" aria-hidden="true"></i><a href="#">MDA</a></li>
    			</ul>
    		</div>
    		
    		<div class="media">
    			<ul>
    				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
    				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
    				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
    				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
    			</ul>
    		</div>

    	</aside>
    </header>