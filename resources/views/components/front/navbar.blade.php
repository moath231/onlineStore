<section class="header-main">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-3">
        <div class="brand-wrap">
          <a href="{{ route('home') }}"><img class="logo" src="{{ asset('images/logos/logo.svg') }}"></a>
          {{-- <h2 class="logo-text">LOGO</h2> --}}
        </div>
        <!-- brand-wrap.// -->
      </div>
      <div class="col-lg-6 col-sm-6">
        <form action="#" class="search-wrap">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search">
            <div class="input-group-append">
              <button class="btn btonstyle" type="submit">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </div>
        </form>
        <!-- search-wrap .end// -->
      </div>
      <!-- col.// -->
      <div class="col-lg-3 col-sm-6">
        <div class="widgets-wrap d-flex justify-content-end">
          <div class="widget-header">
            <a href="#" class="icontext position-relative">
              <div class="icon-wrap icon-xs cart-color"><i class="fa fa-shopping-cart"></i></div>
              <div class="text-wrap position-absolute position-topright cart-color">
                <span>3</span>
              </div>
            </a>
          </div>
          <!-- widget .// -->
          <div class="widget-header dropdown">
            <a href="#" class="icontext ml-3" data-toggle="dropdown" data-offset="20,10">
              <div class="icon-wrap icon-xs bg2 round text-secondary"><i class="fa fa-user"></i></div>
              <div class="text-wrap loginPopupColor">
                @auth
                  <small>Welcome</small>
                  <span>{{ Auth::user()->FirstName }} <i class="fa fa-caret-down"></i></span>
                @else
                  <small>Welcome</small>
                  <span>login<i class="fa fa-caret-down"></i></span>
                @endauth
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">

              @auth
                <div class="form-group">
                  <a class="logout" href="/logout">logout</a>
                </div>
              @else
                <form class="px-4 py-3" method="post" action="/login">
                  @csrf
                  <div class="form-group">
                    <label>Email address</label>
                    <input name="email" type="email" class="form-control" placeholder="email@example.com" autocomplete="off">
                    @error('email')
                      <div class="errorMessage mt-2">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input name="password" type="password" class="form-control" placeholder="Password" autocomplete="off">
                  </div>
                  <button type="submit" class="btn btonstyle">Sign in</button>

                </form>
                <hr class="dropdown-divider">
                <a class="dropdown-item" href="{{ route('regster') }}">Have account? Sign up</a>
                <a class="dropdown-item" href="#">Forgot password?</a>
              @endauth

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav"
      aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="main_nav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link pl-0" href="{{ route('shop') }}"> <strong>All category</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Fashion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Supermarket</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Electronics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Baby &amp Toys</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Fitness sport</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown07" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">More</a>
          <div class="dropdown-menu" aria-labelledby="dropdown07">
            <a class="dropdown-item" href="#">Foods and Drink</a>
            <a class="dropdown-item" href="#">Home interior</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Category 1</a>
            <a class="dropdown-item" href="#">Category 2</a>
            <a class="dropdown-item" href="#">Category 3</a>
          </div>
        </li>
      </ul>
    </div>
    <!-- collapse .// -->
  </div>
  <!-- container .// -->
</nav>
