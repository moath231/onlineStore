<x-front.front title="{{ $title }}">
  <x-section.breadcrumb title="checkout">
    <li class="breadcrumb-item"><a href="{{ route('checkout.index') }}">checkout</a></li>
  </x-section.breadcrumb>
  <section class="section-content bg padding-y">
    <div class="container">
      <form action="{{ route('placeorder') }}" method="POST" onsubmit="return validateForm()">
        @csrf
        @method('POST')
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
                    <input type="text" class="form-control" placeholder="First name" name="first_name"
                      value="{{ old('first_name') }}">
                    <div class="errorMessage firstname mt-2 text-xs"></div>
                  </div>
                  <div class="col form-group">
                    <label>*Last name</label>
                    <input type="text" class="form-control" placeholder="Last name" name="last_name"
                      value="{{ old('last_name') }}">
                    <div class="errorMessage lastname mt-2 text-xs"></div>
                  </div>
                </div>
                <div class="form-group">
                  <label>*Address Line 1</label>
                  <input type="text" class="form-control" placeholder="address" name="address"
                    value="{{ old('address') }}">
                  <div class="errorMessage address mt-2 text-xs"></div>
                </div>
                <div class="form-group">
                  <label>Address Line 2 (Optional)</label>
                  <input type="text" class="form-control" placeholder="Address Line 2 (Optional)" name="addressO"
                    value="{{ old('address0') }}">
                  <div class="errorMessage addressO mt-2 text-xs"></div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label>*state</label>
                    <input type="text" class="form-control" placeholder="state" name="state"
                      value="{{ old('state') }}">
                    <div class="errorMessage state mt-2 text-xs"></div>
                  </div>
                  <div class="form-group col-md-6">
                    <label>*zipcode</label>
                    <input type="text" class="form-control" placeholder="zipcode" name="zipcode"
                      value="{{ old('zipcode') }}">
                    <div class="errorMessage zipcode mt-2 text-xs"></div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label>*City</label>
                    <input type="text" class="form-control" placeholder="city" name="city"
                      value="{{ old('city') }}">
                    <div class="errorMessage city mt-2 text-xs"></div>
                  </div>
                  <div class="form-group col-md-6">
                    <label>*Country</label>
                    <select id="inputState" class="form-control" name="country">
                      <option disabled selected>Choose...</option>
                      @foreach ($country as $Count)
                        <option value="{{ $Count->name }}">{{ $Count->name }}</option>
                      @endforeach
                    </select>
                    <div class="errorMessage country mt-2 text-xs"></div>
                  </div>
                </div>
                <div class="form-group">
                  <label>*Phone Number</label>
                  <input type="text" class="form-control" placeholder="Phone Number" name="phone"
                    value="{{ old('phone') }}">
                  <div class="errorMessage phone mt-2 text-xs"></div>
                </div>
                <div class="form-group">
                  <label>*Email Address</label>
                  <input type="email" class="form-control" placeholder="Email Address" name="email"
                    value="{{ old('email') }}">
                  <div class="errorMessage email mt-2 text-xs"></div>
                  <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label>Order Notes</label>
                  <textarea class="form-control" placeholder="Order Notes" name="notes" rows="6"></textarea>
                  <div class="errorMessage notes mt-2 text-xs"></div>
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
              {{-- <div class="col-md-12 mt-4">
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
              </div> --}}
              {{-- <div class="col-md-12 mt-4">
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
              </div> --}}
              @php
                $carts = json_decode($data);
              @endphp
              <main class="col-md-12 mt-4">
                <div class="card">
                  <table class="table-hover shopping-cart-wrap table">
                    <tbody>
                      @foreach ($carts as $cart)
                        <tr>
                          <td style="width: 100px;">
                            <figure class="media">
                              <div class="img-wrap">
                                <img src="/images/brand.png" class="img-thumbnail img-sm">
                                {{-- <img src="{{ $cart->product->photos[0]->src }}" class="img-thumbnail img-sm"> --}}
                              </div>
                              <figcaption class="media-body">
                                <h6 class="title text-truncate">{{ $cart->product->name }} </h6>
                                {{-- <h6 class="title text-truncate">{{ $cart->product->shortDescription }} </h6> --}}
                                <var class="price">Q {{ $cart->quantity }}</var>
                                <var class="price">USD {{ $cart->product->price * $cart->quantity }}</var>
                              </figcaption>
                            </figure>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </main>
              <div class="col-md-12 mt-4">
                <button class="subscribe btn btn-success btn-lg btn-block" type="submit">Place Order</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>

  @push('checkout')
    <script>
      function validateForm() {
        var messages = [];
        var error = 0;

        // Get the form inputs
        const firstName = document.getElementsByName('first_name')[0];
        const lastName = document.getElementsByName('last_name')[0];
        const address = document.getElementsByName('address')[0];
        const state = document.getElementsByName('state')[0];
        const zipcode = document.getElementsByName('zipcode')[0];
        const city = document.getElementsByName('city')[0];
        const country = document.getElementsByName('country')[0];
        const phone = document.getElementsByName('phone')[0];
        const email = document.getElementsByName('email')[0];
        const notes = document.getElementsByName('notes')[0];

        console.log(typeof city.value);

        if (firstName.value) {
          document.querySelector('div.firstname').innerHTML = "";
        }
        if (firstName.value === '') {
          messages.push("Please enter your first name.");
          document.querySelector('div.firstname').innerHTML = "*Please enter your first name.";
          error++;
        }


        if (lastName.value) {
          document.querySelector('div.lastname').innerHTML = "";
        }
        if (lastName.value === '') {
          messages.push("Please enter your last name.");
          document.querySelector('div.lastname').innerHTML = "*Please enter your last name.";
          error++;
        }




        if (address.value) {
          document.querySelector('div.address').innerHTML = "";
        }
        if (address.value === '') {
          messages.push("Please enter your address.");
          document.querySelector('div.address').innerHTML = "*Please enter your address.";
          error++;
        }


        if (state.value) {
          document.querySelector('div.state').innerHTML = "";
        }
        if (state.value === '') {
          messages.push("Please enter your state.");
          document.querySelector('div.state').innerHTML = "*Please enter your state.";
          error++;
        }


        if (zipcode.value) {
          document.querySelector('div.zipcode').innerHTML = "";
        }
        if (zipcode.value === '') {
          messages.push("Please enter your zipcode.");
          document.querySelector('div.zipcode').innerHTML = "*Please enter your zipcode.";
          error++;
        }
        if (!(zipcode.value.length == 5) && !(zipcode.value === '')) {
          messages.push("Please must be 5 char zipcode.");
          document.querySelector('div.zipcode').innerHTML = "*Please must be 5 char zipcode.";
          error++;
        }
        if (isNaN(zipcode.value)) {
          messages.push("Zipcode must be only number.");
          document.querySelector('div.zipcode').innerHTML = "*Zipcode must be only number.";
          error++;
        }


        if (city.value) {
          document.querySelector('div.city').innerHTML = "";
        }
        if (city.value === '') {
          messages.push("Please enter your city.");
          document.querySelector('div.city').innerHTML = "*Please enter your city.";
          error++;
        }
        if ((typeof city.value !== 'string' || !/^[a-zA-Z]+$/.test(city.value)) && !(city.value === '')) {
          messages.push("City must be a string.");
          document.querySelector('div.city').innerHTML = "*City must be a string.";
          error++;
        }



        if (country.value) {
          document.querySelector('div.country').innerHTML = "";
        }
        if (country.value === 'Choose...') {
          messages.push("Please select your country.");
          document.querySelector('div.country').innerHTML = "*Please select your country.";
          error++;
        }



        if (phone.value) {
          document.querySelector('div.phone').innerHTML = "";
        }
        if (phone.value === '') {
          messages.push("Please enter your phone number.");
          document.querySelector('div.phone').innerHTML = "*Please enter your phone number.";
          error++;
        }
        const phoneRegex = /^\+(?:[0-9] ?){6,14}[0-9]$/;
        if (!phoneRegex.test(phone.value) && !(phone.value === '')) {
          messages.push("Please enter a valid phone number.");
          document.querySelector('div.phone').innerHTML = "*Please enter a valid phone number.<br>+000xxxxxxxxxx";
          error++;
        }



        if (email.value) {
          document.querySelector('div.email').innerHTML = "";
        }
        if (email.value === '') {
          messages.push("Please enter your email address.");
          document.querySelector('div.email').innerHTML = "*Please enter your email address.";
          error++;
        }
        if (!email.value.match(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/)) {
          messages.push("Please enter a valid email address.");
          document.querySelector('div.email').innerHTML = "*Please enter a valid email address.";
          error++;
        }



        if (notes.value) {
          document.querySelector('div.notes').innerHTML = "";
        }
        if (notes.value === '') {
          messages.push("Please enter your order notes.");
          document.querySelector('div.notes').innerHTML = "*Please enter your order notes.";
          error++;
        }


        if (error > 0) {
          return false;
        }
        // If all inputs are valid, return true to submit the form
        return true;
      }
    </script>
  @endpush

</x-front.front>
