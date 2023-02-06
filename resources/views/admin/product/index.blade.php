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
                <th>longDescription</th>
                <th>price</th>
                <th>stock</th>
                <th>model</th>
                <th>color</th>
                <th>size</th>
                <th>mainImage</th>
                <th>image1</th>
                <th>image2</th>
                <th>image3</th>
                <th>category</th>
                <th>brand</th>
                <th>status</th>
                <th>botton</th>
              </tr>
            </thead>
            <tbody>
              @if (count($product) > 0)
                @foreach ($product as $p)
                  <tr>
                    <td>{{ $p->name }}</td>
                    <td>{{ $p->shortDescription }}</td>
                    <td>{{ $p->longDescription }}</td>
                    <td>{{ $p->price }}</td>
                    <td>{{ $p->stock }}</td>
                    <td>{{ $p->model }}</td>
                    <td style="color: {{ $p->color }}">{{ $p->color }}</td>
                    <td>{{ $p->size }}</td>
                    <td><img src="{{ asset('images/brand.png') }}" alt="" width="55"></td>
                    <td><img src="{{ asset('images/brand.png') }}" alt="" width="55"></td>
                    <td><img src="{{ asset('images/brand.png') }}" alt="" width="55"></td>
                    <td><img src="{{ asset('images/brand.png') }}" alt="" width="55"></td>
                    <td>{{ $p->category->name }}</td>
                    <td>{{ $p->brand->name }}</td>

                    <td>
                      @if ($p->is_delete == 0)
                        <x-Indicators.badges name="active" />
                      @else
                        <x-Indicators.badgesI name="pinding" />
                      @endif
                    </td>
                    <td>
                      @if ($p->is_delete == 0)
                      <form action="product/{{ $p->id }}" method="Post">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-danger text-white" type="submit" value="Delete">
                      </form>
                      <form action="/admin/product/hide/{{ $p->id }}" method="Post">
                        @csrf
                        <input class="btn btn-warning text-white" type="submit" value="hide">
                      </form>
                      @else
                      <form action="/admin/product/approve/{{ $p->id }}" method="Post">
                        @csrf
                        <input class="btn btn-success text-white" type="submit" value="Approve">
                      </form>
                      @endif
                      <a class="btn btn-info text-white" type="button" href="/admin/product/{{ $p->id }}/edit">Edit</a>
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
