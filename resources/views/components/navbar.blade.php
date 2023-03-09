<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('homepage')}}">GamingBlog <img src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/null/external-gaming-addiction-flaticons-lineal-color-flat-icons-2.png"/> </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('game.create')}}">Add your videogame</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('consolex.create')}}">Add your console</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('consolex.index')}}">All consoles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact_us')}}">Contact Us</a>
          </li>
          @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome {{Auth::user()->name}}
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector 
                ('#form-logout').submit();">Logout</a></li>
                <form id="form-logout" action="{{route('logout')}}" method="POST" class="d-none">@csrf</form>
              </ul>
            </li>
          @else
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome Guest
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('register')}}">Register</a></li>
                <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>              </ul>
            </li>
          @endauth
        </div>
    </div>
  </nav>