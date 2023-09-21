<x-back.back :title="$title">

  <x-back.headerpage tablename="add new payment" tablediscrption="form to add new payment" />

  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <form method="POST" action="" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-md-4">
                <x-form.input name="code" placeholder="code" value="" />
              </div>
              <div class="col-md-4">
                <x-form.input name="discount_percentage" placeholder="discount percentage" type="number" />
              </div>
              <div class="col-md-4">
                <x-form.input name="expiration_date" placeholder="expiration date" type="date" />
              </div>
            </div>
            <div class="tile-footer">
              <x-Indicators.buttonS name="Create" type="submit" />
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <table class="table-hover table-bordered table" id="sampleTable">
            <thead>
              <tr>
                <th>order_id</th>
                <th>amount</th>
                <th>payment_method</th>
              </tr>
            </thead>
            <tbody style="text-align: center">
              @if (count($payments) > 0)
                @foreach ($payments as $payment)
                  <tr>
                    <td><span style="background-color: #eee; padding:5px 10px; border-radius:10px;">{{ $payment->order }}</span></td>
                    <td>{{ $payment->amount }}%</td>
                    <td>{{ $payment->payment_method }}</td>

                    <td style="display: flex; justify-content: center;">
                      <form action="/admin/payment/{{ $payment->id }}" method="POST">
                        @csrf
                        <input class="btn btn-danger text-white" type="submit" value="Delete">
                      </form>
                      <a class="btn btn-info text-white" style="margin-left: 5px" type="button"
                        href="">Edit</a>
                    </td>
                  </tr>
                @endforeach
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</x-back.back>
