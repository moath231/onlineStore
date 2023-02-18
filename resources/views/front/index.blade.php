<x-front.front title="{{ $title }}">

  <section class="section-main">
    <div class="containe">
      <div class="row">
        <div class="col-md-12">
          <div class="slidermain slider-main">
            @if (!empty($slider))
              <div class="item-slide">
                <img src="{{ $slider->image1 }}">
              </div>
              <div class="item-slide rounded">
                <img src="{{ $slider->image2 }}">
              </div>
              <div class="item-slide rounded">
                <img src="{{ $slider->image3 }}">
              </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-content padding-y-sm pt-5 pb-5" style="background-color: #F8F9FA;">
    <div class="container">
      <article class="card-body">
        <div class="row">
          <div class="col-md-4 text-center">
            <figure>
              <span class="servecicon">
                <i class="fa fa-2x fa-truck"></i>
              </span>
              <figcaption class="pt-3">
                <h5 class="servectitle">Fast delivery</h5>
                <p class="servecp">The first benefit is represented by a truck icon and the text "Fast delivery". The
                  accompanying text
                  explains that the product/service is delivered quickly and efficiently.</p>
              </figcaption>
            </figure>
          </div>
          <div class="col-md-4 text-center">
            <figure>
              <span class="servecicon"><i class="fas fa-2x fa-plug"></i></span>
              <figcaption class="pt-3">
                <h5 class="servectitle">Creative Strategy</h5>
                <p class="servecp">The second benefit is represented by a plug icon and the text "Creative Strategy".
                  The accompanying
                  text explains that the product/service has a creative and effective strategy for solving problems or
                  achieving goals.</p>
              </figcaption>
            </figure>
          </div>
          <div class="col-md-4 text-center">
            <figure>
              <span class="servecicon"><i class="fa fa-2x fa-lock"></i></span>
              <figcaption class="pt-3">
                <h5 class="servectitle">High secured</h5>
                <p class="servecp">The third benefit is represented by a lock icon and the text "High secured". The
                  accompanying text
                  explains that the product/service has a high level of security and can be trusted to protect sensitive
                  information or assets.</p>
              </figcaption>
            </figure>
          </div>
        </div>
      </article>
    </div>
  </section>

  <section class="section-content padding-y-sm pt-5 pb-5">
    <div class="container">
      <header class="section-heading">
        <h3 class="section-title">category</h3>
      </header>
      <div class="row categoryslider">
        @if (count($categorys) > 0)
          @foreach ($categorys as $category)
            <div class="col-md-4">
              <div class="card-banner" style="height:250px; background-image: url('{{ $category->logo }}');">
                <article class="overlay overlay-cover d-flex align-items-center justify-content-center">
                  <div class="text-center">
                    <h5 class="card-title">{{ $category->name }}</h5>
                    <a href="{{ asset('/shop?category=' . $category->slug) }}" class="btn categorybtn btn-sm"> show All
                    </a>
                  </div>
                </article>
              </div>
            </div>
          @endforeach
        @endif
      </div>
    </div>
  </section>

  <section class="bgsectionimage mt-5 mb-5">
  </section>

  <section class="section-content padding-y-sm">
    <div class="container">
      <header class="section-heading heading-line">
        <h4 class="title-section">FEATURED PRODUCTS</h4>
      </header>
      <div class="row">
        <div class="col-md-4">
          <figure class="card card-product">
            <div class="img-wrap"><img src="images/items/1.jpg"></div>
            <figcaption class="info-wrap">
              <h4 class="title">Another name of item</h4>
              <p class="desc">Some small description goes here</p>
              <div class="rating-wrap">
                <ul class="rating-stars">
                  <li style="width:80%" class="stars-active">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                      class="fa fa-star"></i><i class="fa fa-star"></i>
                  </li>
                  <li>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                      class="fa fa-star"></i><i class="fa fa-star"></i>
                  </li>
                </ul>
                <div class="label-rating">132 reviews</div>
                <div class="label-rating">154 orders </div>
              </div>
            </figcaption>
            <div class="bottom-wrap">
              <a href="" class="btn btn-sm btn-primary float-right">Add To Cart</a>
              <div class="price-wrap h5">
                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
              </div>
            </div>
          </figure>
        </div>
        <div class="col-md-4">
          <figure class="card card-product">
            <div class="img-wrap"><img src="images/items/2.jpg"> </div>
            <figcaption class="info-wrap">
              <h4 class="title">Good product</h4>
              <p class="desc">Some small description goes here</p>
              <div class="rating-wrap">
                <ul class="rating-stars">
                  <li style="width:80%" class="stars-active">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                      class="fa fa-star"></i><i class="fa fa-star"></i>
                  </li>
                  <li>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                      class="fa fa-star"></i><i class="fa fa-star"></i>
                  </li>
                </ul>
                <div class="label-rating">132 reviews</div>
                <div class="label-rating">154 orders </div>
              </div>
            </figcaption>
            <div class="bottom-wrap">
              <a href="" class="btn btn-sm btn-primary float-right">Add To Cart</a>
              <div class="price-wrap h5">
                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
              </div>
            </div>
          </figure>
        </div>
        <div class="col-md-4">
          <figure class="card card-product">
            <div class="img-wrap"><img src="images/items/3.jpg"></div>
            <figcaption class="info-wrap">
              <h4 class="title">Product name goes here</h4>
              <p class="desc">Some small description goes here</p>
              <div class="rating-wrap">
                <ul class="rating-stars">
                  <li style="width:80%" class="stars-active">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                      class="fa fa-star"></i><i class="fa fa-star"></i>
                  </li>
                  <li>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                      class="fa fa-star"></i><i class="fa fa-star"></i>
                  </li>
                </ul>
                <div class="label-rating">132 reviews</div>
                <div class="label-rating">154 orders </div>
              </div>
            </figcaption>
            <div class="bottom-wrap">
              <a href="" class="btn btn-sm btn-primary float-right">Add To Cart</a>
              <div class="price-wrap h5">
                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
              </div>
            </div>
          </figure>
        </div>
      </div>
    </div>
  </section>

  <section class="section-request padding-y-sm">
    <div class="container">
      <header class="section-heading heading-line">
        <h4 class="title-section text-uppercase">Recently Added</h4>
      </header>
      <div class="row">
        <div class="col-md-3">
          <figure class="card card-product">
            <div class="img-wrap"><img src="images/items/1.jpg"></div>
            <figcaption class="info-wrap">
              <h4 class="title">Another name of item</h4>
              <p class="desc">Some small description goes here</p>
              <div class="rating-wrap">
                <ul class="rating-stars">
                  <li style="width:80%" class="stars-active">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                      class="fa fa-star"></i><i class="fa fa-star"></i>
                  </li>
                  <li>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                      class="fa fa-star"></i><i class="fa fa-star"></i>
                  </li>
                </ul>
                <div class="label-rating">132 reviews</div>
                <div class="label-rating">154 orders </div>
              </div>
              <!-- rating-wrap.// -->
            </figcaption>
            <div class="bottom-wrap">
              <a href="" class="btn btn-sm btn-primary float-right">Add To Cart</a>
              <div class="price-wrap h5">
                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
              </div>
              <!-- price-wrap.// -->
            </div>
            <!-- bottom-wrap.// -->
          </figure>
        </div>
        <!-- col // -->
        <div class="col-md-3">
          <figure class="card card-product">
            <div class="img-wrap"><img src="images/items/2.jpg"> </div>
            <figcaption class="info-wrap">
              <h4 class="title">Good product</h4>
              <p class="desc">Some small description goes here</p>
              <div class="rating-wrap">
                <ul class="rating-stars">
                  <li style="width:80%" class="stars-active">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                      class="fa fa-star"></i><i class="fa fa-star"></i>
                  </li>
                  <li>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                      class="fa fa-star"></i><i class="fa fa-star"></i>
                  </li>
                </ul>
                <div class="label-rating">132 reviews</div>
                <div class="label-rating">154 orders </div>
              </div>
              <!-- rating-wrap.// -->
            </figcaption>
            <div class="bottom-wrap">
              <a href="" class="btn btn-sm btn-primary float-right">Add To Cart</a>
              <div class="price-wrap h5">
                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
              </div>
              <!-- price-wrap.// -->
            </div>
            <!-- bottom-wrap.// -->
          </figure>
        </div>
        <!-- col // -->
        <div class="col-md-3">
          <figure class="card card-product">
            <div class="img-wrap"><img src="images/items/3.jpg"></div>
            <figcaption class="info-wrap">
              <h4 class="title">Product name goes here</h4>
              <p class="desc">Some small description goes here</p>
              <div class="rating-wrap">
                <ul class="rating-stars">
                  <li style="width:80%" class="stars-active">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                      class="fa fa-star"></i><i class="fa fa-star"></i>
                  </li>
                  <li>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                      class="fa fa-star"></i><i class="fa fa-star"></i>
                  </li>
                </ul>
                <div class="label-rating">132 reviews</div>
                <div class="label-rating">154 orders </div>
              </div>
              <!-- rating-wrap.// -->
            </figcaption>
            <div class="bottom-wrap">
              <a href="" class="btn btn-sm btn-primary float-right">Add To Cart</a>
              <div class="price-wrap h5">
                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
              </div>
              <!-- price-wrap.// -->
            </div>
            <!-- bottom-wrap.// -->
          </figure>
        </div>
        <!-- col // -->
        <!-- col // -->
        <div class="col-md-3">
          <figure class="card card-product">
            <div class="img-wrap"><img src="images/items/3.jpg"></div>
            <figcaption class="info-wrap">
              <h4 class="title">Product name goes here</h4>
              <p class="desc">Some small description goes here</p>
              <div class="rating-wrap">
                <ul class="rating-stars">
                  <li style="width:80%" class="stars-active">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                      class="fa fa-star"></i><i class="fa fa-star"></i>
                  </li>
                  <li>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                      class="fa fa-star"></i><i class="fa fa-star"></i>
                  </li>
                </ul>
                <div class="label-rating">132 reviews</div>
                <div class="label-rating">154 orders </div>
              </div>
              <!-- rating-wrap.// -->
            </figcaption>
            <div class="bottom-wrap">
              <a href="" class="btn btn-sm btn-primary float-right">Add To Cart</a>
              <div class="price-wrap h5">
                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
              </div>
              <!-- price-wrap.// -->
            </div>
            <!-- bottom-wrap.// -->
          </figure>
        </div>
        <!-- col // -->
      </div>
      <!-- row.// -->
      <div class="row">
        <div class="col-md-3">
          <figure class="card card-product">
            <div class="img-wrap"><img src="images/items/1.jpg"></div>
            <figcaption class="info-wrap">
              <h4 class="title">Another name of item</h4>
              <p class="desc">Some small description goes here</p>
              <div class="rating-wrap">
                <ul class="rating-stars">
                  <li style="width:80%" class="stars-active">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                      class="fa fa-star"></i><i class="fa fa-star"></i>
                  </li>
                  <li>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                      class="fa fa-star"></i><i class="fa fa-star"></i>
                  </li>
                </ul>
                <div class="label-rating">132 reviews</div>
                <div class="label-rating">154 orders </div>
              </div>
              <!-- rating-wrap.// -->
            </figcaption>
            <div class="bottom-wrap">
              <a href="" class="btn btn-sm btn-primary float-right">Add To Cart</a>
              <div class="price-wrap h5">
                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
              </div>
              <!-- price-wrap.// -->
            </div>
            <!-- bottom-wrap.// -->
          </figure>
        </div>
        <!-- col // -->
        <div class="col-md-3">
          <figure class="card card-product">
            <div class="img-wrap"><img src="images/items/2.jpg"> </div>
            <figcaption class="info-wrap">
              <h4 class="title">Good product</h4>
              <p class="desc">Some small description goes here</p>
              <div class="rating-wrap">
                <ul class="rating-stars">
                  <li style="width:80%" class="stars-active">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                      class="fa fa-star"></i><i class="fa fa-star"></i>
                  </li>
                  <li>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                      class="fa fa-star"></i><i class="fa fa-star"></i>
                  </li>
                </ul>
                <div class="label-rating">132 reviews</div>
                <div class="label-rating">154 orders </div>
              </div>
              <!-- rating-wrap.// -->
            </figcaption>
            <div class="bottom-wrap">
              <a href="" class="btn btn-sm btn-primary float-right">Add To Cart</a>
              <div class="price-wrap h5">
                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
              </div>
              <!-- price-wrap.// -->
            </div>
            <!-- bottom-wrap.// -->
          </figure>
        </div>
        <!-- col // -->
        <div class="col-md-3">
          <figure class="card card-product">
            <div class="img-wrap"><img src="images/items/3.jpg"></div>
            <figcaption class="info-wrap">
              <h4 class="title">Product name goes here</h4>
              <p class="desc">Some small description goes here</p>
              <div class="rating-wrap">
                <ul class="rating-stars">
                  <li style="width:80%" class="stars-active">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                      class="fa fa-star"></i><i class="fa fa-star"></i>
                  </li>
                  <li>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                      class="fa fa-star"></i><i class="fa fa-star"></i>
                  </li>
                </ul>
                <div class="label-rating">132 reviews</div>
                <div class="label-rating">154 orders </div>
              </div>
              <!-- rating-wrap.// -->
            </figcaption>
            <div class="bottom-wrap">
              <a href="" class="btn btn-sm btn-primary float-right">Add To Cart</a>
              <div class="price-wrap h5">
                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
              </div>
              <!-- price-wrap.// -->
            </div>
            <!-- bottom-wrap.// -->
          </figure>
        </div>
        <!-- col // -->
        <!-- col // -->
        <div class="col-md-3">
          <figure class="card card-product">
            <div class="img-wrap"><img src="images/items/3.jpg"></div>
            <figcaption class="info-wrap">
              <h4 class="title">Product name goes here</h4>
              <p class="desc">Some small description goes here</p>
              <div class="rating-wrap">
                <ul class="rating-stars">
                  <li style="width:80%" class="stars-active">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                      class="fa fa-star"></i><i class="fa fa-star"></i>
                  </li>
                  <li>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                      class="fa fa-star"></i><i class="fa fa-star"></i>
                  </li>
                </ul>
                <div class="label-rating">132 reviews</div>
                <div class="label-rating">154 orders </div>
              </div>
              <!-- rating-wrap.// -->
            </figcaption>
            <div class="bottom-wrap">
              <a href="" class="btn btn-sm btn-primary float-right">Add To Cart</a>
              <div class="price-wrap h5">
                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
              </div>
              <!-- price-wrap.// -->
            </div>
            <!-- bottom-wrap.// -->
          </figure>
        </div>
        <!-- col // -->
      </div>
      <!-- row.// -->

    </div>
    <!-- container // -->
  </section>

  <section class="padding-y-sm pb-5 pt-5">
    <div class="container">
      <header class="section-heading">
        <h3 class="section-title">Our Brands</h3>
      </header>
      <div class="row sliderBrand">
        @if (count($brands) > 0)
          @foreach ($brands as $brand)
            <div class="col-md-12">
              <figure class="boxBrand item-logo">
                <a href="{{ asset('/shop?brand='.$brand->slug) }}"><img src="{{ asset($brand->logo) }}" width="130" style="margin: 10px auto"></a>
                <figcaption class="border-top pt-2 text-center">36 Products</figcaption>
              </figure>
            </div>
          @endforeach
        @endif
      </div>
    </div>
  </section>

</x-front.front>
