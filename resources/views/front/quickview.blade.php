<section class="section-content bg padding-y border-top">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="row no-gutters">
            <aside class="col-sm-5 border-right">
              <article class="gallery-wrap">
                <div class="img-big-wrap">
                  <div>
                    <a href="{{ asset($productview->photos->where('type', 'image1')->first()->src) }}" data-fancybox="">
                      <img src="{{ asset($productview->photos->where('type', 'image1')->first()->src) }}"
                        width="20"></a>
                  </div>
                </div>
                <div class="img-small-wrap">
                  @if ($productview->photos->where('type', 'image2')->count() > 0)
                    <a href="{{ asset($productview->photos->where('type', 'image2')->first()->src) }}" data-fancybox="">
                      <div class="item-gallery"> <img
                          src="{{ asset($productview->photos->where('type', 'image2')->first()->src) }}"></div>
                    </a>
                  @endif
                  @if ($productview->photos->where('type', 'image3')->count() > 0)
                    <a href="{{ asset($productview->photos->where('type', 'image3')->first()->src) }}" data-fancybox="">
                      <div class="item-gallery"> <img
                          src="{{ asset($productview->photos->where('type', 'image3')->first()->src) }}"></div>
                    </a>
                  @endif
                  @if ($productview->photos->where('type', 'image4')->count() > 0)
                    <a href="{{ asset($productview->photos->where('type', 'image4')->first()->src) }}" data-fancybox="">
                      <div class="item-gallery"> <img
                          src="{{ asset($productview->photos->where('type', 'image4')->first()->src) }}"></div>
                    </a>
                  @endif
                </div>
              </article>
            </aside>
            <aside class="col-sm-7">
              <article class="p-5">
                <h3 class="title mb-3">{{ $productview->name }}</h3>
                <div class="mb-3">
                  <var class="price h3 text-warning">
                    <span class="currency">US $</span><span class="num">{{ $productview->price }}</span>
                  </var>
                  <span>/per kg</span>
                </div>
                <dl>
                  <dt>Description</dt>
                  <dd>
                    <p>{{ $productview->longDescription }}</p>
                  </dd>
                </dl>
                <dl class="row">
                  <dt class="col-sm-3">Model#</dt>
                  <dd class="col-sm-9">{{ $productview->model }}</dd>
                  <dt class="col-sm-3">Color</dt>
                  <dd class="col-sm-9">{{ $productview->color }} </dd>
                  <dt class="col-sm-3">Delivery</dt>
                  <dd class="col-sm-9">Russia, USA, and Europe </dd>
                </dl>
                <div class="rating-wrap">
                  <ul class="rating-stars">
                    <li style="width:80%" class="stars-active">
                      <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </li>
                    <li>
                      <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </li>
                  </ul>
                  <div class="label-rating">132 reviews</div>
                  <div class="label-rating">154 orders </div>
                </div>
                <hr>
                <form action="/addToCart" method="POST">
                  @csrf
                  <input type="hidden" name="productId" value="{{ $productview->id }}">
                  <div class="row">
                    <div class="col-sm-5">
                      <dl class="dlist-inline">
                        <dt>Quantity: </dt>
                        <input type="number" name="quantity" style="width:120px;" value="1">
                        <x-form.error name="quantity"/>
                      </dl>
                    </div>
                    <div class="col-sm-7">
                      <dl class="dlist-inline">
                        <dt>Size:</dt>
                        <dd>
                          <label class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="inlineRadio2" value="option2">
                            <span class="form-check-label">SM</span>
                          </label>
                          <label class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="inlineRadio2" value="option2">
                            <span class="form-check-label">MD</span>
                          </label>
                          <label class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="inlineRadio2" value="option2">
                            <span class="form-check-label">XXL</span>
                          </label>
                        </dd>
                      </dl>
                    </div>
                  </div>
                  <hr>
                  <button type="submit" class="btn btn-outline-primary"> <i class="fas fa-shopping-cart"></i> Add to cart</button>
                </form>
              </article>
            </aside>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
