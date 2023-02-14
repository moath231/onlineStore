<x-back.back :title="$title">

  <x-back.headerpage tablename="home" tablediscrption="home admin" />

  @if (session('success'))
    <div class="alert alert-success">
      <x-Indicators.alertS success="{{ session('success') }}" />
    </div>
  @endif

  <div class="row">

    <div class="col-md-6">
      <div class="tile">
        <h3 class="tile-title">Slider</h3>
        <div class="ml-5 mb-5 pl-5">
          <img src="/{{ $slider->image1 }}" alt="image one" width="150">
          <img src="/{{ $slider->image2 }}" alt="image tow" width="150">
          <img src="/{{ $slider->image3 }}" alt="image three" width="150">
        </div>
        <div class="tile-body">
          <form class="form-horizontal" method="POST" action="/admin/homeAdmin/{{ $slider->id }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
              <label class="control-label col-md-3">Image one</label>
              <div class="col-md-8">
                <input class="form-control" name="image01" type="file" />
                <x-form.error name="image01" />
              </div>
            </div>
            <div class="form-group row">
              <label class="control-label col-md-3">Image tow</label>
              <div class="col-md-8">
                <input class="form-control" name="image02" type="file" />
                <x-form.error name="image02" />
              </div>
            </div>
            <div class="form-group row">
              <label class="control-label col-md-3">Image three</label>
              <div class="col-md-8">
                <input class="form-control" name="image03" type="file" />
                <x-form.error name="image03" />
              </div>
            </div>
            <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit">
                    <i class="fa fa-fw fa-lg fa-check-circle"></i>update</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="tile">
        <h3 class="tile-title">Slider</h3>
        
        <div class="tile-body">
          <form class="form-horizontal" method="POST" action="{{ route('storeimage') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
              <label class="control-label col-md-3">Image one</label>
              <div class="col-md-8">
                <input class="form-control" name="image1" type="file" />
                <x-form.error name="image1" />
              </div>
            </div>
            <div class="form-group row">
              <label class="control-label col-md-3">Image tow</label>
              <div class="col-md-8">
                <input class="form-control" name="image2" type="file" />
                <x-form.error name="image2" />
              </div>
            </div>
            <div class="form-group row">
              <label class="control-label col-md-3">Image three</label>
              <div class="col-md-8">
                <input class="form-control" name="image3" type="file" />
                <x-form.error name="image3" />
              </div>
            </div>
            <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit">
                    <i class="fa fa-fw fa-lg fa-check-circle"></i>store image</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="clearix"></div>

    <div class="col-md-6">
      <div class="tile">
        <h3 class="tile-title">Subscribe</h3>
        <div class="tile-body">
          <form class="row">
            <div class="form-group col-md-3">
              <label class="control-label">Name</label>
              <input class="form-control" type="text" placeholder="Enter your name" />
            </div>
            <div class="form-group col-md-3">
              <label class="control-label">Email</label>
              <input class="form-control" type="text" placeholder="Enter your email" />
            </div>
            <div class="form-group col-md-4 align-self-end">
              <button class="btn btn-primary" type="button">
                <i class="fa fa-fw fa-lg fa-check-circle"></i>Subscribe
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    
    <div class="col-md-6">
      <div class="tile">
        <h3 class="tile-title">Subscribe</h3>
        <div class="tile-body">
          <form class="row">
            <div class="form-group col-md-3">
              <label class="control-label">Name</label>
              <input class="form-control" type="text" placeholder="Enter your name" />
            </div>
            <div class="form-group col-md-3">
              <label class="control-label">Email</label>
              <input class="form-control" type="text" placeholder="Enter your email" />
            </div>
            <div class="form-group col-md-4 align-self-end">
              <button class="btn btn-primary" type="button">
                <i class="fa fa-fw fa-lg fa-check-circle"></i>Subscribe
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</x-back.back>
