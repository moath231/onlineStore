<x-back.back :title="$title">

  <x-back.headerpage tablename="producr table" tablediscrption="Table to display all product"/>

  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <table class="table table-hover table-bordered" id="sampleTable">
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
              <tr>
                <td>Tiger Nixon</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora tempore ut eligendi. Nulla maiores repudiandae blanditiis, atque dolor rerum accusamus? Ratione explicabo quis asperiores aspernatur incidunt et exercitationem, voluptates dolore!</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit laudantium voluptatum eius obcaecati corporis, porro provident fugiat, perspiciatis officia aperiam dignissimos facilis hic quidem. Error nesciunt hic maiores laborum laboriosam.</td>
                <td>61</td>
                <td>20</td>
                <td>24234</td>
                <td>red</td>
                <td>small</td>
                <td><img src="{{ asset('images/brand.png') }}" alt="" width="55"></td>
                <td><img src="{{ asset('images/brand.png') }}" alt="" width="55"></td>
                <td><img src="{{ asset('images/brand.png') }}" alt="" width="55"></td>
                <td><img src="{{ asset('images/brand.png') }}" alt="" width="55"></td>
                <td>it</td>
                <td>HP</td>
                <td>
                  <x-Indicators.badges name="active"/>
                  <x-Indicators.badgesI name="pinding"/>
                </td>
                <td>
                  <a class="btn btn-success text-white" type="button">Approve</a>
                  <a class="btn btn-danger text-white" type="button">Delete</a>
                  <a class="btn btn-info text-white" type="button">Edit</a>
                </td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</x-back.back>
