<x-back.back :title="$title">

  <x-back.headerpage tablename="add new product" tablediscrption="form to add new product" />

  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">

          <form method="POST" action="/admin/category/{{ $category->id }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <x-form.input name="name" placeholder="Name category" value="{{ $category->name }}"/>
            <x-form.textarea name="description" placeholder="Discrption">
              {{ $category->description }}
            </x-form.textarea>

            
            <div class="row">
              <div class="col-md-3">
                <x-form.input name="logo" type="file" />
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
