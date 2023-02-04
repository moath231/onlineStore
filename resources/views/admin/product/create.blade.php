<x-back.back :title="$title">

  <x-back.headerpage tablename="add new product" tablediscrption="form to add new product" />

  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">

          <form method="POST" action="#">
            <x-form.input name="Name" placeholder="Name product" />
            <x-form.textarea name="Discrption" placeholder="Short Discrption" />
            <x-form.textarea name="longDiscrption" placeholder="Long Discrption" />
            {{-- price --}}

            

            <div class="row">
              <div class="col-md-3">
                <x-form.input name="Stock" placeholder="stock" />
              </div>
              <div class="col-md-3">
                <x-form.input name="Model" placeholder="model" />
              </div>
              <div class="col-md-3">
                <x-form.input name="Color" placeholder="color" />
              </div>
              <div class="col-md-3">
                <x-form.input name="Size" placeholder="size" />
              </div>
            </div>


            <div class="row">
              <div class="col-md-3">
                <x-form.input name="image1" type="file" />
              </div>
              <div class="col-md-3">
                <x-form.input name="image2" type="file" />
              </div>
              <div class="col-md-3">
                <x-form.input name="image3" type="file" />
              </div>
              <div class="col-md-3">
                <x-form.input name="image4" type="file" />
              </div>
            </div>

            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label class="control-label">Price</label>
                  <div class="form-group">
                    <label class="sr-only" for="price">Amount (in dollars)</label>
                    <div class="input-group">
                      <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                      <input class="form-control" id="price" type="text" name="price" placeholder="Amount">
                      <div class="input-group-append"><span class="input-group-text">.00</span></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="gategory">Gategory</label>
                  <select class="form-control" id="gategory">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="brand">Brand</label>
                  <select class="form-control" id="brand">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
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
