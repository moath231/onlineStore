<x-back.back :title="$title">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
      <p></p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-6 col-lg-3">
      <div class="widget-small primary coloured-icon">
        <i class="icon fa fa-users fa-3x"></i>
        <div class="info">
          <a class="linkDashboradAdmin" href="{{ route('product.index') }}">
            <h4>product</h4>
          </a>
          <p><b>{{ $ProductCount }}</b></p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="widget-small info coloured-icon">
        <i class="icon fa fa-thumbs-o-up fa-3x"></i>
        <div class="info">
          <a class="linkDashboradAdmin" href="{{ route('category.index') }}">
            <h4>category</h4>
          </a>
          <p><b>{{ $categoryCount }}</b></p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="widget-small warning coloured-icon">
        <i class="icon fa fa-files-o fa-3x"></i>
        <div class="info">
          <a class="linkDashboradAdmin" href="">
            <h4>Users</h4>
          </a>
          <p><b>{{ $UserCount }}</b></p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="widget-small danger coloured-icon">
        <i class="icon fa fa-star fa-3x"></i>
        <div class="info">
          <a class="linkDashboradAdmin" href="{{ route('brand.index') }}">
            <h4>Brand</h4>
          </a>
          <p><b>{{ $brandCount }}</b></p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="widget-small danger coloured-icon">
        <i class="icon fa fa-star fa-3x"></i>
        <div class="info">
          <a class="linkDashboradAdmin" href="">
            <h4>order</h4>
          </a>
          <p><b>{{ $orderCount }}</b></p>
        </div>
      </div>
    </div>
  </div>
</x-back.back>
