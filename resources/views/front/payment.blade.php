<x-front.front title="{{ $title }}">
  <x-section.breadcrumb title="checkout">
    <li class="breadcrumb-item"><a href="{{ route('checkout.index') }}">checkout</a></li>
  </x-section.breadcrumb>
  <section class="section-content bg padding-y">
    <div class="container">
      <form action="" method="POST">
        @csrf
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <header class="card-header">
                <h4 class="card-title mt-2">Payment Method</h4>
              </header>
              <article class="card-body">
                
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
                      <dd class="text-right">{{ $order[0]->total_amount }}</dd>
                    </dl>
                    <dl class="dlist-align">
                      <dt>Tax total:</dt>
                      <dd class="text-right">{{ $order[0]->total_amount * 0.2 }}</dd>
                    </dl>
                    <dl class="dlist-align">
                      <dt>Shipping:</dt>
                      <dd class="text-right">Free</dd>
                    </dl>
                    <dl class="dlist-align">
                      <dt>Total cost: </dt>
                      <dd class="h5 b text-right"> USD {{ $order[0]->total_amount - $order[0]->total_amount * 0.2 }}</dd>
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
              <div class="col-md-12 mt-4">
                <button class="subscribe btn btn-success btn-lg btn-block" type="submit">Complete Order</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>

</x-front.front>
