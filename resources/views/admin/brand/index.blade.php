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
              @if (count($brand) > 0)
                @foreach ($brand as $b)
                  <tr>
                    <td>{{ $b->name }}</td>
                    <td>{{ $b->description }}</td>
                    <td><img src="{{ asset($b->logo) }}" alt="" width="55"></td>

                    <td>
                      <form action="/admin/brand/{{ $b->id }}" method="Post">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-danger text-white" type="submit" value="Delete">
                      </form>
                      <a class="btn btn-info text-white" type="button" href="/admin/brand/{{ $b->id }}/edit">Edit</a>
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
