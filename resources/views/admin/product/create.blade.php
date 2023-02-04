<x-back.back :title="$title">

  <x-back.headerpage tablename="add new product" tablediscrption="form to add new product" />

  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">

          <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
            @csrf
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
                  <x-form.error name="price" />
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="category">Category</label>
                  <select name="category" class="form-control" id="category">
                    <option disabled selected value="">choose</option>
                    @foreach (App\Models\Category::all() as $category)
                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                  </select>
                  <x-form.error name="category" />
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="brand">Brand</label>
                  <select name="brand" class="form-control" id="brand">
                    <option disabled selected value="">choose</option>
                    @foreach (App\Models\Brand::all() as $brand)
                      <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach
                  </select>
                  <x-form.error name="brand" />
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
