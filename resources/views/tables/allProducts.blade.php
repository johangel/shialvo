<div class="table-responsive">
  <table id="table" class="table table-striped" width="100%">
      <thead class="">
          <tr>
              <th class="align-middle text-center">foto</th>
              <th class="align-middle text-center">Descripcion</th>
              <th class="align-middle text-center">Precio</th>
              <!-- <th>cantidad</th>
              <th>atributos</th> -->
              <th class="align-middle text-center">subtotal</th>
              <th class="align-middle text-center">accion</th>
          </tr>
      </thead>
      <tbody>
        @if(count($data['products']) > 0)
          @foreach($data['products'] as $products)
          <tr>
              <td class="align-middle text-center">
                <img src="{{asset('assets/imgs/products/default.jpg')}}" class="img-min" alt="">
              </td>
              <td class="align-middle text-center">{{$products->name}}</td>
              <td class="align-middle text-center">
                {{$products->price}}.00$
              </td>
              <!-- <td class="align-middle width-100">
                <input class="form-control" type="number" name="" value="">
              </td>
              <td class="align-middle">
                <select class="custom-select">
                  <option selected>List attr</option>
                  <option value="1">attr 1</option>
                  <option value="2">attr 2</option>
                  <option value="3">attr 3</option>
                </select>
              </td> -->
              <td class="align-middle text-center">Amet</td>
              <td class="align-middle text-center">
                <i class="material-icons icons-clickeable" onClick="openItemInModal({{$products->id}})">info</i>
              </td>
          </tr>
          @endforeach
        @endif
      </tbody>
  </table>
</div>

@include('modals.ItemDescription')

@include('scripts.dataTableAllProducts')
