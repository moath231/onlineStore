@php
  if(session()->has('coupon')){
    $couponCode = Session::get('coupon.code');
    $discountPercentage = Session::get('coupon.discount_percentage');
  } else {
    $discountPercentage = 0;
    $couponCode = '';
  }
@endphp
<x-front.front title="{{ $title }}">
  <x-section.breadcrumb title="shop">
    <li class="breadcrumb-item"><a href="{{ route('shop') }}">shop</a></li>
  </x-section.breadcrumb>

  
  <section class="section-content bg padding-y border-top position-relative">
    <div class="alerterror">
      @if (session('errorcart'))
        <div class="alert alert-danger">
          <button class="close" type="button" data-dismiss="alert">×</button>
            {{ session('errorcart') }} 
        </div>
      @endif
    </div>
    <div class="container">
      <div class="row">
        <main class="col-sm-9">
          <div class="card">
            <table class="table-hover shopping-cart-wrap table">
              <thead class="text-muted">
                <tr>
                  <th scope="col">Product</th>
                  <th scope="col" width="120">Quantity</th>
                  <th scope="col" width="120">Price</th>
                  <th scope="col" class="text-right" width="200">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($cartItems as $cart)
                  <tr>
                    <td style="width: 100px;">
                      <figure class="media">
                        <div class="img-wrap">
                          {{-- <img src="{{ $cart['product']->photos->where('type', 'image1')->first()->src }}" class="img-thumbnail img-sm"> --}}
                        </div>
                        <figcaption class="media-body">
                          <h6 class="title text-truncate">{{ $cart['product']->name }} </h6>
                          <dl class="dlist-inline small">
                            {{-- <dt>Size: </dt>
                            <dd>XXL</dd> --}}
                          </dl>
                          <dl class="dlist-inline small">
                            {{-- <dt>Color: </dt>
                            <dd>Orange color</dd> --}}
                          </dl>
                        </figcaption>
                      </figure>
                    </td>
                    <td>
                      <div class="">
                        <input type="number" name="quantity" id="quantity-{{ $cart['product']->id }}"
                          value="{{ $cart['quantity'] }}" style="width: 100px" class="quantity-input"
                          data-product-id="{{ $cart['product']->id }}">
                      </div>
                    </td>
                    <td>
                      <div class="price-wrap">
                        <var class="price">USD {{ $cart['product']->price * $cart['quantity'] }}</var>
                        <small class="text-muted">(USD7 each)</small>
                      </div>
                      <!-- price-wrap .// -->
                    </td>
                    <td class="cartButton text-right">
                      <form action="">
                        <a data-original-title="Save to Wishlist" title="" href=""
                          class="btn btn-outline-success" data-toggle="tooltip"> <i class="fa fa-heart"></i></a>
                      </form>
                      <form action="/cart/distroy/{{ $cart['product']->id }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger"> × Remove</button>
                      </form>
                    </td>
                  </tr>
                @endforeach

              </tbody>
            </table>
          </div>

        </main>
        <aside class="col-sm-3">
          <p class="alert alert-success">
            Add USD 5.00 of eligible items to your order to qualify for FREE Shipping.
          </p>
          <dl class="dlist-align">
            <dt>Total price: </dt>
            <dd class="text-right">USD {{ $totalPrice }}</dd>
          </dl>
          <dl class="dlist-align">
            <dt>Discount:</dt>
            <dd class="text-right">USD {{ ($discountPercentage / 100) * $totalPrice }}</dd>
          </dl>
          <dl class="dlist-align h4">
            <dt>Total:</dt>
            <dd class="text-right"><strong>USD {{ $totalPrice - ($discountPercentage / 100) * $totalPrice }}</strong>
            </dd>
          </dl>
          <hr>
          <div class="form-group coupon">
            <label>Have coupon?</label>
            <form action="{{ route('applycoupon') }}" method="post">
              @csrf
              <div class="input-group">
                <input type="text" class="form-control" name="coupon_code" placeholder="Coupon code"
                  value="{{ $couponCode }}">
                <span class="input-group-append">
                  <button class="btn btn-success">Apply</button>
                </span>
              </div>

              @if ($errors->any())
                <div class="alert alert-danger mt-3">
                  @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                  @endforeach
                </div>
              @endif

              @if (session('success'))
                <div id="success-message" class="alert alert-success mt-3">
                  {{ session('success') }}
                </div>
              @endif

            </form>
          </div>
          <figure class="itemside mb-3">
            <aside class="aside"><img src="images/icons/pay-visa.png"></aside>
            <div class="text-wrap small text-muted">
              Pay 84.78 AED ( Save 14.97 AED ) By using ADCB Cards
            </div>
          </figure>

          <figure class="itemside mb-3">
            <aside class="aside"> <img src="images/icons/pay-mastercard.png"> </aside>
            <div class="text-wrap small text-muted">
              Pay by MasterCard and Save 40%.
              <br> Lorem ipsum dolor
            </div>
          </figure>
          <form action="/checkout" method="POST">
            @csrf
            <input type="hidden" value="{{ $cartItems }}" name="cartitem">
            <input type="hidden" value="{{ $totalPrice }}" name="totalPrice">
            <input type="hidden" value="{{ $totalPrice - ($discountPercentage / 100) * $totalPrice }}" name="totalamount">
            <button href="{{ route('checkout.index') }}" type="submit" class="btn btn-success btn-lg btn-block">Proceed To Checkout</button>
          </form>
        </aside>
        <!-- col.// -->
      </div>

    </div>
  </section>

  @push('updateQuantity')
    <script>
      $(document).ready(function() {
        $('.quantity-input').on('change', function() {
          var productId = $(this).data('product-id');
          var quantity = $(this).val();
          $.ajax({
            type: "POST",
            url: "/cart/update-quantity",
            data: {
              _token: '{{ csrf_token() }}',
              productId: productId,
              quantity: quantity
            },
            success: function() {
              location.reload();
            }
          });
        });
      });

      // Hide the success message after 5 seconds
      setTimeout(function() {
        document.getElementById('success-message').style.display = 'none';
      }, 2000);
    </script>
  @endpush

</x-front.front>
