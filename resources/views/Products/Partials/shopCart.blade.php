@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Carrito de compras</h2>
  <hr>
  @if(count($items) > 0)
  <div class="card">
    <table class="table table-hover shopping-cart-wrap">
      <thead class="text-muted">
        <tr>
          <th scope="col">Producto</th>
          <th scope="col" width="120">Cantidad</th>
          <th scope="col" width="120">Precio</th>
          <!-- <th scope="col" width="100" class="text-right">Accion</th> -->
        </tr>
      </thead>
      <tbody>
        @foreach($items as $item)
        <tr>
          <td>
            <figure class="media">
              <div class="img-wrap">
                <img src="http://bootstrap-ecommerce.com/main/images/items/2.jpg" class="img-thumbnail img-sm deleteAt768">
              </div>
              <figcaption class="media-body">
                <h6 class="title text-truncate">{{$item->itemName}}</h6>
                <dl class="param param-inline small">
                  <dt>Color: </dt>
                  <dd>{{$item->itemAttr ?? "estandar"}}</dd>
                </dl>
                <dl class="param param-inline small">
                  <dt><a href="#" class="alert-link text-info">eliminar</a></dt>
                </dl>
              </figcaption>
            </figure>
          </td>
          <td>
            <input type="number" name="" class="form-control" value="{{$item->itemAmount}}">
          </td>
          <td>
            <div class="price-wrap">
              <var class="price">USD {{$item->unitPrice * $item->itemAmount}}</var>
              <small class="text-muted">({{$item->unitPrice}}$ c/u)</small>
            </div> <!-- price-wrap .// -->
          </td>
          <!-- <td class="text-right">
            <a href="" class="btn btn-outline-danger"> <i class="material-icons">clear</i> </a>
          </td> -->
        </tr>
        @endforeach
      </tbody>
    </table>
  </div> <!-- card.// -->
  <div class="row">
    <div class="col-md-8">
      <p>texto</p>
    </div>
    <div class="col-md-4">
      <p>texto</p>
    </div>
    <div class="col-md-12">
      <button type="button" class="btn btn-sm btn-success" name="button">confirmar compra</button>
    </div>
  </div>
  @else
  <div class="card p-4">
    <p>No tienes objetos agregados a tu carrito de compras</p>
    <small class="text-muted"> <a  href="{{ url('/') }}">volver a tienda</a> </small>
  </div>
  @endif

</div>


@endsection
