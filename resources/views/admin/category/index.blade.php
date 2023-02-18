<x-back.back :title="$title">

  <x-back.headerpage tablename="producr table" tablediscrption="Table to display all product" />

  @if(session('success'))
    <div class="alert alert-success">
        <x-Indicators.alertS success="{{ session('success') }}"/>
    </div>
  @endif


  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <table class="table-hover table-bordered table" id="sampleTable">
            <thead>
              <tr>
                <th>Name</th>
                <th>Description</th>
                <th>image</th>
                <th>button</th>
              </tr>
            </thead>
            <tbody>
              @if (count($category) > 0)
                @foreach ($category as $c)
                  <tr>
                    <td>{{ $c->name }}</td>
                    <td>{{ $c->description }}</td>
                    <td><img src="{{ asset($c->photos->where('type', 'logo')->first()->src) }}" alt="" width="55"></td>

                    <td>
                      <form action="/admin/category/{{ $c->id }}" method="Post">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-danger text-white" type="submit" value="Delete">
                      </form>
                      <a class="btn btn-info text-white" type="button" href="/admin/category/{{ $c->id }}/edit">Edit</a>
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
