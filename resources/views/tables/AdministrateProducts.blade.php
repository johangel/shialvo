<div class="table-responsive">
  <table id="table" class="table table-striped" width="100%">
      <thead class="">
          <tr>
              <th class="text-center">foto</th>
              <th class="text-center">Descripcion</th>
              <th class="text-center">Precio</th>
              <th class="text-center">Acciones</th>
          </tr>
      </thead>
      <tbody>
        @if(count($data['products']) > 0)
          @foreach($data['products'] as $products)
          <tr>
              <td class="text-center align-middle">
                <img src="{{asset('assets/imgs/products/default.jpg')}}" class="img-min" alt="">
              </td>
              <td class="text-center align-middle">
                {{$products->name}}
              </td>
              <td class="text-center align-middle">
                {{$products->price}}.00$
              </td>
              <td class="text-center align-middle">
                <i class="material-icons icons-clickeable" onClick="confirmProduct()">edit</i>
                <!-- <i class="material-icons icons-clickeable" onClick="confirmProduct()">done</i> -->
              </td>
          </tr>
          @endforeach
        @endif
      </tbody>
  </table>
</div>

@include('scripts.dataTableAllProducts')
