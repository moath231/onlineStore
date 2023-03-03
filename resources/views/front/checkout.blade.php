<x-front.front title="{{ $title }}">
  <x-section.breadcrumb title="checkout">
    <li class="breadcrumb-item"><a href="{{ route('checkout.index') }}">checkout</a></li>
  </x-section.breadcrumb>
  <section class="section-content bg padding-y">
    <div class="container">
      <form action="{{ route('placeorder') }}" method="POST">
        @csrf
        <input type="hidden" value="{{ $data }}" name="cartitem">
        <input type="hidden" value="{{ $totalamount }}" name="totalPrice">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <header class="card-header">
                <h4 class="card-title mt-2">address Details</h4>
              </header>
              <article class="card-body">
                  <div class="form-row">
                    <div class="col form-group">
                      <label>*First name</label>
                      <input type="text" class="form-control" placeholder="First name" name="first_name" value="{{ old('first_name') }}">
                    </div>
                    <div class="col form-group">
                      <label>*Last name</label>
                      <input type="text" class="form-control" placeholder="Last name" name="last_name" value="{{ old('last_name') }}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>*Address Line 1</label>
                    <input type="text" class="form-control" placeholder="address" name="address" value="{{ old('address') }}">
                  </div>
                  <div class="form-group">
                    <label>Address Line 2 (Optional)</label>
                    <input type="text" class="form-control" placeholder="Address Line 2 (Optional)" name="addressO" value="{{ old('address0') }}">
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label>*state</label>
                      <input type="text" class="form-control" placeholder="state" name="state" value="{{ old('state') }}">
                    </div>
                    <div class="form-group col-md-6">
                      <label>*zipcode</label>
                      <input type="text" class="form-control" placeholder="zipcode" name="zipcode" value="{{ old('zipcode') }}">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label>*City</label>
                      <input type="text" class="form-control" placeholder="city" name="city" value="{{ old('city') }}">
                    </div>
                    <div class="form-group col-md-6">
                      <label>*Country</label>
                      <select id="inputState" class="form-control" name="country">
                        <option disabled selected> Choose...</option>
                        @foreach ($country as $Count)
                          <option value="{{ $Count->name }}">{{ $Count->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>*Phone Number</label>
                    <input type="text" class="form-control" placeholder="Phone Number" name="phone" value="{{ old('phone') }}">
                  </div>
                  <div class="form-group">
                    <label>*Email Address</label>
                    <input type="email" class="form-control" placeholder="Email Address" name="email" value="{{ old('email') }}">
                    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                    <label>Order Notes</label>
                    <textarea class="form-control" placeholder="Order Notes" name="notes" rows="6"></textarea>
                  </div>
              </article>
            </div>
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <header class="card-header">
                    <h4 class="card-title mt-2">Your Order</h4>
                  </header>
                  <article class="card-body">
                    <dl class="dlist-align">
                      <dt>Items Subtotal: </dt>
                      <dd class="text-right">{{ $totalamount }}</dd>
                    </dl>
                    <dl class="dlist-align">
                      <dt>Tax total:</dt>
                      <dd class="text-right">{{ $totalamount * 0.02 }}</dd>
                    </dl>
                    <dl class="dlist-align">
                      <dt>Shipping:</dt>
                      <dd class="text-right">Free</dd>
                    </dl>
                    <dl class="dlist-align">
                      <dt>Total cost: </dt>
                      <dd class="h5 b text-right"> USD {{ $totalamount }}</dd>
                    </dl>
                  </article>
                </div>
              </div>

              <div class="col-md-12 mt-4">
                <div class="card">
                  <header class="card-header">
                    <h4 class="card-title mt-2">Shipment Type</h4>
                  </header>
                  <article class="card-body">
                    <label class="form-check">
                      <input class="form-check-input" type="radio" name="Shipment" value="13">
                      <span class="form-check-label">
                        4 - 6 Business days shipping time
                      </span>
                    </label>
                    <label class="form-check">
                      <input class="form-check-input" type="radio" name="Shipment" value="34">
                      <span class="form-check-label">
                        14 - 28 Business days shipping time
                      </span>
                    </label>
                    <label class="form-check">
                      <input class="form-check-input" type="radio" name="Shipment" value="113">
                      <span class="form-check-label">
                        15 - 29 Business days shipping time
                      </span>
                    </label>
                  </article>
                </div>
              </div>
              <div class="col-md-12 mt-4">
                <div class="card">
                  <header class="card-header">
                    <h4 class="card-title mt-2">Payment Method</h4>
                  </header>
                  <article class="card-body">
                    <label class="form-check">
                      <input class="form-check-input" type="radio" name="Payment" value="visa">
                      <span class="form-check-label">
                        visa
                      </span>
                    </label>
                    <label class="form-check">
                      <input class="form-check-input" type="radio" name="Payment" value="visa">
                      <span class="form-check-label">
                        bitcoin
                      </span>
                    </label>
                    <label class="form-check">
                      <input class="form-check-input" type="radio" name="Payment" value="visa">
                      <span class="form-check-label">
                        paypal
                      </span>
                    </label>
                  </article>
                </div>
              </div>
              <div class="col-md-12 mt-4">
                <button class="subscribe btn btn-success btn-lg btn-block" type="submit">Place Order</button>
              </div>
            </div>
          </div>
        </div>
      </form>


      {{-- @php
        $carts = json_decode($data);
      @endphp
      <div class="container mt-2">
        <div class="row">
          <main class="col-sm-8">
            <div class="card">
              <table class="table-hover shopping-cart-wrap table">
                <tbody>
                    @foreach ($carts as $cart)
                      <tr>
                        <td style="width: 100px;">
                          <figure class="media">
                            <div class="img-wrap">
                              <img src="{{ $cart->product->photos[0]->src }}" class="img-thumbnail img-sm">
                            </div>
                            <figcaption class="media-body">
                              <h6 class="title text-truncate">{{ $cart->product->name }} </h6>
                              <h6 class="title text-truncate">{{ $cart->product->shortDescription }} </h6>
                            </figcaption>
                          </figure>
                        </td>
                        <td>
                          <div class="quantity-wrap">
                            <var class="price">Q {{ $cart->quantity }}</var>
                          </div>
                        </td>
                        <td>
                          <div class="price-wrap">
                            <var class="price">USD {{ $cart->product->price * $cart->quantity }}</var>
                          </div>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </main>
        </div>
      </div> --}}

    </div>
  </section>

</x-front.front>
