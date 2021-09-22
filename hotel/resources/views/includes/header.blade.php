
<nav class="navbar navbar-expand-lg navbar-light bg-danger main_nav">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Hotel IKRAM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/booking')}}">Reservation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/listhotel')}}" tabindex="-1" aria-disabled="true">Hotel</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Compte
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            @if(!Auth::user())
            <li><a class="dropdown-item" href="{{url('/login')}}">Login</a></li>
            <li><a class="dropdown-item" href="{{url('/register')}}">Register</a></li>
            @else
              @if(Auth::user()->is_admin)
               <li><a class="dropdown-item" href="{{url('/admin')}}">Admin</a></li>
              @endif
            <li><a class="dropdown-item" href="{{url('/profil')}}">{{Auth::user()->firstname}} {{Auth::user()->lastname}}</a></li>
            <li><a class="dropdown-item" href="{{url('/logout')}}">Log out</a></li>
            @endif
          </ul>
        </li>
        
      </ul>
      <form class="d-flex" action="{{url('/search')}}">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="hotel">
        <input type="hidden" name="_token" value="{{Session::token()}}">
        <button class="btn btn-danger" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
      </form>
    </div>
  </div>
</nav>