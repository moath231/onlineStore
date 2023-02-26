<x-front.front title="{{ $title }}">
  <x-section.breadcrumb title="checkout">
    <li class="breadcrumb-item"><a href="{{ route('checkout.index') }}">checkout</a></li>
  </x-section.breadcrumb>
  <section class="section-content bg padding-y">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <header class="card-header">
              <h4 class="card-title mt-2">Billing Details</h4>
            </header>
            <article class="card-body">
              <form>
                <div class="form-row">
                  <div class="col form-group">
                    <label>First name</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                  <!-- form-group end.// -->
                  <div class="col form-group">
                    <label>Last name</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                  <!-- form-group end.// -->
                </div>
                <!-- form-row end.// -->
                <div class="form-group">
                  <label>Address</label>
                  <input type="text" class="form-control" placeholder="">
                </div>
                <!-- form-group end.// -->
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label>City</label>
                    <input type="text" class="form-control">
                  </div>
                  <!-- form-group end.// -->
                  <div class="form-group col-md-6">
                    <label>Country</label>
                    <select id="inputState" class="form-control">
                      <option disabled selected> Choose...</option>
                    @foreach ($country as $Count)
                      <option value="{{ $Count->name }}">{{ $Count->name }}</option>
                    @endforeach
                    </select>
                  </div>
                  <!-- form-group end.// -->
                </div>
                <div class="form-group">
                  <label>Phone Number</label>
                  <input type="text" class="form-control" placeholder="">
                </div>
                <!-- form-group end.// -->
                <div class="form-group">
                  <label>Email Address</label>
                  <input type="email" class="form-control" placeholder="">
                  <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <!-- form-group end.// -->
                <div class="form-group">
                  <label>Order Notes</label>
                  <textarea class="form-control" name="notes" rows="6"></textarea>
                </div>
                <!-- form-group end.// -->
              </form>
            </article>
          </div>
          <!-- card.// -->
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
                    <dt>Parameter: </dt>
                    <dd class="text-right">Value name</dd>
                  </dl>
                  <dl class="dlist-align">
                    <dt>Color:</dt>
                    <dd class="text-right">Orange and Black</dd>
                  </dl>
                  <dl class="dlist-align">
                    <dt>Material:</dt>
                    <dd class="text-right">Leather</dd>
                  </dl>
                  <dl class="dlist-align">
                    <dt>Total cost: </dt>
                    <dd class="h5 b text-right"> USD195 </dd>
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
                    <input class="form-check-input" type="radio" name="exampleRadio" value="">
                    <span class="form-check-label">
                      First hand items
                    </span>
                  </label>
                  <label class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadio" value="">
                    <span class="form-check-label">
                      Brand new items
                    </span>
                  </label>
                  <label class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadio" value="">
                    <span class="form-check-label">
                      Some other option
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
                    <input class="form-check-input" type="radio" name="exampleRadio" value="">
                    <span class="form-check-label">
                      First hand items
                    </span>
                  </label>
                  <label class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadio" value="">
                    <span class="form-check-label">
                      Brand new items
                    </span>
                  </label>
                  <label class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadio" value="">
                    <span class="form-check-label">
                      Some other option
                    </span>
                  </label>
                </article>
              </div>
            </div>
            <div class="col-md-12 mt-4">
              <button class="subscribe btn btn-success btn-lg btn-block" type="button">Place Order</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</x-front.front>
