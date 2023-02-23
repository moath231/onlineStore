<x-back.back :title="$title">

  <x-back.headerpage tablename="add new coupon" tablediscrption="form to add new coupon" />

  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <form method="POST" action="" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-md-4">
                <x-form.input name="code" placeholder="code" value=""/>
              </div>
              <div class="col-md-4">
                <x-form.input name="discount_percentage" placeholder="discount percentage" value=""/>
              </div>
              <div class="col-md-4">
                <x-form.input name="expiration_date" placeholder="expiration date" value=""/>
              </div>
            </div>
            <div class="tile-footer">
              <x-Indicators.buttonS name="Create" type="submit" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-back.back>