<x-front.front title="{{ $title }}">
  <x-section.breadcrumb title="shop">
    <li class="breadcrumb-item"><a href="{{ route('shop') }}">shop</a></li>
  </x-section.breadcrumb>
  <section class="section-content padding-y">
    <div class="container">
      <div class="row">
        <aside class="col-md-3">
          <div class="card">
            <article class="filter-group">
              <header class="card-header">
                <a href="#" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true" class="">
                  <i class="icon-control fa fa-chevron-down"></i>
                  <h6 class="title">Product type</h6>
                </a>
              </header>
              <div class="filter-content show collapse" id="collapse_1" style="">
                <div class="card-body">
                  <form class="pb-3" method="GET" accept="">
                    @if (request('category'))
                      <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    @if (request('brand'))
                      <input type="hidden" name="brand" value="{{ request('brand') }}">
                    @endif
                    @if (request('min'))
                      <input type="hidden" name="min" value="{{ request('min') }}">
                    @endif
                    @if (request('max'))
                      <input type="hidden" name="max" value="{{ request('max') }}">
                    @endif
                    <div class="input-group">
                      <input type="text" class="form-control" name="search" value="{{ $searchValue ?? '' }}"
                        placeholder="Search">
                      <div class="input-group-append">
                        <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </form>
                  <ul class="list-menu">
                    @foreach ($category as $cate)
                      <li>
                        <a href="?category={{ $cate->slug }}&{{ htmlspecialchars(http_build_query(request()->except('category'))) }}"
                          class="{{ $cate->slug == request('category') ? 'active' : '' }}">{{ $cate->name }}
                        </a>
                      </li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </article>
            <article class="filter-group">
              <header class="card-header">
                <a href="#" data-toggle="collapse" data-target="#collapse_2" aria-expanded="true" class="">
                  <i class="icon-control fa fa-chevron-down"></i>
                  <h6 class="title">Brands </h6>
                </a>
              </header>
              <div class="filter-content show collapse" id="collapse_2" style="">
                <div class="card-body">
                  @foreach ($brands as $brand)
                    <label class="custom-control custom-checkbox">
                      <input type="checkbox" name="brand" value="{{ $brand->slug }}"
                        class="custom-control-input brand-checkbox"
                        {{ $brand->slug == request('brand') ? 'checked' : '' }}>
                      <div class="custom-control-label">{{ $brand->name }}
                        <b class="badge badge-pill badge-light float-right">120</b>
                      </div>
                    </label>
                  @endforeach
                </div>
              </div>
            </article>
            <article class="filter-group">
              <header class="card-header">
                <a href="#" data-toggle="collapse" data-target="#collapse_3" aria-expanded="true" class="">
                  <i class="icon-control fa fa-chevron-down"></i>
                  <h6 class="title">Price range </h6>
                </a>
              </header>
              <div class="filter-content show collapse" id="collapse_3">
                <div class="card-body">
                  <form method="GET" action="">
                    @if (request('category'))
                      <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    @if (request('brand'))
                      <input type="hidden" name="brand" value="{{ request('brand') }}">
                    @endif
                    @if (request('search'))
                      <input type="hidden" name="search" value="{{ request('search') }}">
                    @endif
                    <input type="range" class="custom-range" min="0" max="2000">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label>Min</label>
                        <input class="form-control" placeholder="$0" type="number" name="min"
                          value="{{ $min ?? '' }}">
                      </div>
                      <div class="form-group col-md-6 text-right">
                        <label>Max</label>
                        <input class="form-control" placeholder="$2,0000" type="number" name="max"
                          value="{{ $max ?? '' }}">
                      </div>
                    </div>
                    <button class="btn btn-block btn-primary" type="submit">Apply</button>
                  </form>
                </div>
              </div>
            </article>
            <article class="filter-group">
              <header class="card-header">
                <a href="#" data-toggle="collapse" data-target="#collapse_4" aria-expanded="true"
                  class="">
                  <i class="icon-control fa fa-chevron-down"></i>
                  <h6 class="title">Sizes </h6>
                </a>
              </header>
              <div class="filter-content show collapse" id="collapse_4" style="">
                <div class="card-body">
                  <label class="checkbox-btn">
                    <input type="checkbox">
                    <span class="btn btn-light"> XS </span>
                  </label>
                  <label class="checkbox-btn">
                    <input type="checkbox">
                    <span class="btn btn-light"> SM </span>
                  </label>
                  <label class="checkbox-btn">
                    <input type="checkbox">
                    <span class="btn btn-light"> LG </span>
                  </label>
                  <label class="checkbox-btn">
                    <input type="checkbox">
                    <span class="btn btn-light"> XXL </span>
                  </label>
                </div>
              </div>
            </article>
            <article class="filter-group">
              <header class="card-header">
                <a href="#" data-toggle="collapse" data-target="#collapse_5" aria-expanded="false"
                  class="">
                  <i class="icon-control fa fa-chevron-down"></i>
                  <h6 class="title">More filter </h6>
                </a>
              </header>
              <div class="filter-content show in collapse" id="collapse_5" style="">
                <div class="card-body">
                  <label class="custom-control custom-radio">
                    <input type="radio" name="myfilter_radio" checked="" class="custom-control-input">
                    <div class="custom-control-label">Any condition</div>
                  </label>
                  <label class="custom-control custom-radio">
                    <input type="radio" name="myfilter_radio" class="custom-control-input">
                    <div class="custom-control-label">Brand new </div>
                  </label>
                  <label class="custom-control custom-radio">
                    <input type="radio" name="myfilter_radio" class="custom-control-input">
                    <div class="custom-control-label">Used items</div>
                  </label>
                  <label class="custom-control custom-radio">
                    <input type="radio" name="myfilter_radio" class="custom-control-input">
                    <div class="custom-control-label">Very old</div>
                  </label>
                </div>
              </div>
            </article>
          </div>
        </aside>
        <main class="col-md-9">
          <header class="border-bottom mb-4 pb-3">
            <div class="form-inline">
              <span class="mr-md-auto">{{ count($Product) }} Items found </span>
              <select class="form-control mr-2">
                <option>Latest items</option>
                <option>Trending</option>
                <option>Most Popular</option>
                <option>Cheapest</option>
              </select>
              <div class="btn-group">
                {{-- <a href="#" class="btn btn-outline-secondary" data-toggle="tooltip" title="List view">
                  <i class="fa fa-bars"></i></a> --}}
                <a href="#" class="btn btn-outline-secondary active" data-toggle="tooltip" title="Grid view">
                  <i class="fa fa-th"></i></a>
              </div>
            </div>
          </header>
          <div class="modal fade" id="quickview-modal">
            <div class="modal-dialog modal-lg">
              <div class="modal-content modelContectCusto">
                <div class="modal-header">
                  <h5 class="modal-title">Product details</h5>
                  <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <!-- Product details will be displayed here -->
                </div>
                {{-- <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div> --}}
              </div>
            </div>
          </div>

          <div class="row">
            @if (count($Product) > 0)
              @foreach ($Product as $pro)
                <div class="col-md-4">
                  <figure class="card card-product-grid">
                    <div class="img-wrap">
                      @if ($pro->created_at->diffIndays() <= 3)
                        <span class="badge badge-danger"> NEW </span>
                      @endif
                      <a id="single_image" href="{{ asset($pro->photos->where('type', 'image1')->first()->src) }}">
                        <img src="{{ asset($pro->photos->where('type', 'image1')->first()->src) }}">
                      </a>
                      <a class="btn-overlay" href="shop/{{ $pro->id }}/quickview"
                        data-target="#quickview-modal">
                        <i class="fa fa-search-plus"></i>
                        Quick view
                      </a>
                    </div>
                    <figcaption class="info-wrap">
                      <div class="fix-height">
                        <a href="#" class="title">{{ $pro->name }}</a>
                        <div class="price-wrap mt-2">
                          <span class="price">${{ $pro->price }}</span>
                          <del class="price-old">$1980</del>
                        </div>
                      </div>
                      <form action="/addToCart" method="POST">
                        @csrf
                        <input type="hidden" name="productId" value="{{ $pro->id }}">
                        <button class="btn btn-block btn-primary">Add to cart</button>
                      </form>
                    </figcaption>
                  </figure>
                </div>
              @endforeach
            @endif
          </div>

          {{ $Product->links('vendor.pagination.bootstrap-5') }}
        </main>
      </div>
    </div>
  </section>

  @push('shopPage')
    <script>
      $(document).ready(function() {
        $('input[name="brand"]').on('change', function() {
          var brandValue = $(this).val();

          if (this.checked) {
            // Add the brand parameter to the URL
            var url = new URL(window.location.href);
            url.searchParams.set("brand", brandValue);
            window.history.pushState({
              path: url.href
            }, '', url.href);
            location.reload();
          } else {
            // Remove the brand parameter from the URL
            var url = new URL(window.location.href);
            url.searchParams.delete("brand");
            window.history.pushState({
              path: url.href
            }, '', url.href);
            location.reload();
          }
        });
      });


      $(document).ready(function() {
        var minInput = $('.form-group.col-md-6:first-child input');
        var maxInput = $('.form-group.col-md-6:last-child input');

        $('.custom-range').on('input', function() {
          // minInput.val($(this).val());
          maxInput.val($(this).val());
        });
      });


      $(function() {
        $('.btn-overlay').click(function(event) {
          event.preventDefault();
          var url = $(this).attr('href');
          $.get(url, function(data) {
            $('#quickview-modal .modal-body').html(data);
            $('#quickview-modal').modal('show');
          });
        });
      });

      $(function() {
        $('.quckviewB').click(function(event) {
          event.preventDefault();
          var url = $(this).attr('href');
          $.get(url, function(data) {
            $('#quickview-modal .modal-body').html(data);
            $('#quickview-modal').modal('show');
          });
        });
      });
    </script>
  @endpush
</x-front.front>
