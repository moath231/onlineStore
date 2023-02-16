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
                    <a href="{{ asset($productview->mainImage) }}" data-fancybox="">
                      <img src="{{ asset($productview->mainImage) }}" width="270"></a>
                  </div>
                </div>
                <div class="img-small-wrap">
                  <a href="{{ asset($productview->image1) }}" data-fancybox="">
                    <div class="item-gallery"> <img src="{{ asset($productview->image1) }}"></div>
                  </a>
                  <a href="{{ asset($productview->image2) }}" data-fancybox="">
                    <div class="item-gallery"> <img src="{{ asset($productview->image2) }}"></div>
                  </a>
                  <a href="{{ asset($productview->image2) }}" data-fancybox="">
                    <div class="item-gallery"> <img src="{{ asset($productview->image2) }}"></div>
                  </a>
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
                    <p>{{$productview->longDescription}}</p>
                  </dd>
                </dl>
                <dl class="row">
                  <dt class="col-sm-3">Model#</dt>
                  <dd class="col-sm-9">{{$productview->model}}</dd>

                  <dt class="col-sm-3">Color</dt>
                  <dd class="col-sm-9">{{$productview->color}} </dd>

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
                <div class="row">
                  <div class="col-sm-5">
                    <dl class="dlist-inline">
                      <dt>Quantity: </dt>
                      <dd>
                        <select class="form-control form-control-sm" style="width:70px;">
                          <option> 1 </option>
                          <option> 2 </option>
                          <option> 3 </option>
                        </select>
                      </dd>
                    </dl>
                  </div>
                  <div class="col-sm-7">
                    <dl class="dlist-inline">
                      <dt>Size: </dt>
                      <dd>
                        <label class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option2">
                          <span class="form-check-label">SM</span>
                        </label>
                        <label class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option2">
                          <span class="form-check-label">MD</span>
                        </label>
                        <label class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option2">
                          <span class="form-check-label">XXL</span>
                        </label>
                      </dd>
                    </dl>
                  </div>
                </div>
                <hr>
                <a href="#" class="btn btn-primary"> Buy now </a>
                <a href="#" class="btn btn-outline-primary"> <i class="fas fa-shopping-cart"></i> Add to cart </a>
              </article>
            </aside>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>