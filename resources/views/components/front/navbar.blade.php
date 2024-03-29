<?php
use App\Http\Controllers\CartController;
$cartCount = CartController::cartItem();
?>
<section class="header-main">
  <div class="container">
    <div class="row align-items-center">

      <div class="col-lg-3">
        <div class="brand-wrap">
          <a href="{{ route('home') }}"><img class="logo" src="{{ asset('images/logos/logo.svg') }}"></a>
        </div>
      </div>

      <div class="col-lg-6 col-sm-6">
      </div>

      <div class="col-lg-3 col-sm-6">
        <div class="widgets-wrap d-flex justify-content-end">

          @if (Auth::check() && $cartCount > 0)
            <div class="dropdown cartStyle">
              <a href="{{ route('cart') }}" class="icontext">
                <div class="icon-wrap icon-xs position-top cart-color">
                  {{-- <i class="fas fa-shopping-basket shopping-basket"></i> --}}
                  <i class="fas fa-shopping-cart shopping-basket"></i>
                </div>
                <div class="text-wrap position-absolute position-topright cart-color">
                  <span>{{ $cartCount }}</span>
                </div>
              </a>
            </div>
          @endif

          <div class="widget-header dropdown">
            <a href="#" class="icontext ml-3" data-toggle="dropdown" data-offset="100,15">
              <div class="icon-wrap round">
                <img src="{{ asset('images/avatars/avatar1.jpg') }}" alt="" width="50" class="round">
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              @auth
                <div class="px-1 pt-3">
                  <div class="form-group dropDown">
                    <li>
                      <i class="fa-solid fa-user"></i>
                      <a class="logout" href="">account</a>
                    </li>
                    <li>
                      <i class="fas fa-store"></i>
                      <a class="logout" href="{{ route('shop') }}">shop</a>
                    </li>
                    <li>
                      <i class="fa-regular fa-star-shooting"></i>
                      <a class="logout" href="">Wishlist</a>
                    </li>
                    <li>
                      <i class="fa fa-sign-out"></i>
                      <a class="logout" href="/logout">logout</a>
                    </li>
                  </div>
                </div>
              @else
                <form class="px-4 py-3" method="POST" action="/login">
                  @csrf
                  <div class="form-group">
                    <label>Email address</label>
                    <input name="email" type="email" class="form-control" placeholder="email@example.com"
                      autocomplete="off">
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
                <a class="dropdown-item" href="{{ route('register') }}">Have account? Sign up</a>
                <a class="dropdown-item" href="#">Forgot password?</a>
              @endauth
            </div>
          </div>

          @guest
            <div class="dropdown">
              <a href="#" class="icontext ml-3" data-toggle="dropdown" data-offset="70,29">
                <div class="icon-wrap burgericon">
                  <i class="fa-light fa-list-ul"></i>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <div class="px-1 pt-3">
                  <div class="form-group dropDown">
                    <li>
                      <i class="fa fa-shopping-basket"></i>
                      <a class="logout" href="{{ route('shop') }}">shop</a>
                    </li>
                  </div>
                </div>
              </div>
            </div>
          @endguest

        </div>
      </div>

    </div>
  </div>
</section>
