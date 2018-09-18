@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-3">

            <div class="m-0 rounded">
                <input type="text" class="form-control border-rounded" id="exampleFormControlInput1" placeholder="buscar">
            </div>

            <div class="shadow-sm mt-2 bg-white rounded">
                @include('inc.sidebar')
            </div>

        </div>
        <div class="col-md-9 ">
          <div class="mb-2">
            <h1 class="font-weight-bold">Bienvenido a Chialvo</h1>
            <small>Caterogia: nombre categoria</small>
          </div>
            <div class="shadow mb-5 p-2 bg-white rounded">
                <table id="table" class="table table-striped table-bordered" style="width:100%">
                    <thead class="">
                        <tr>
                            <th class="text-center">foto</th>
                            <th class="text-center">Descripcion</th>
                            <th class="text-center">Precio</th>
                            <th class="text-center">cantidad</th>
                            <th class="text-center">atributos</th>
                            <th class="text-center">subtotal</th>
                            <th class="text-center">accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center align-middle">
                              <img src="{{asset('assets/imgs/products/default.jpg')}}" class="img-min" alt="">
                            </td>
                            <td class="text-center align-middle">lorem ipsum dolor sit amet..</td>
                            <td class="text-center align-middle">
                              400.00$
                            </td>
                            <td class="text-center align-middle">
                              <input class="form-control" type="number" name="" value="">
                            </td>
                            <td class="text-center align-middle">
                              <select class="custom-select">
                                <option selected>List attr</option>
                                <option value="1">attr 1</option>
                                <option value="2">attr 2</option>
                                <option value="3">attr 3</option>
                              </select>
                            </td>
                            <td class="text-center align-middle">Amet</td>
                            <td class="text-center align-middle">
                              <i class="material-icons icons-clickeable">done</i>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<script>
    $(document).ready( function () {
      $('#table').DataTable({
        "language": {
          "lengthMenu": "Mostrar _MENU_ por páginas",
          "info": "Mostrando página _PAGE_ de _PAGES_",
          "sSearch":         "Buscar:",
          "sZeroRecords":    "No se encontraron resultados",
          "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
          "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
          "oPaginate": {
            "sFirst":    "Primero",
            "sLast":     "Último",
            "sNext":     "Siguiente",
            "sPrevious": "Anterior"
          },
        }
      });
    });
</script>
@endsection
