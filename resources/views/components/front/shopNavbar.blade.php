<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="main_nav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link pl-0" href="{{ route('shop') }}"> <strong>All category</strong></a>
        </li>

        @foreach ($category as $cate)
          <li class="nav-item">
            <a class="nav-link" href="{{ route('shop')."/?category=".$cate->slug }}">{{ $cate->name }}</a>
          </li>
        @endforeach

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
  </div>
</nav>
