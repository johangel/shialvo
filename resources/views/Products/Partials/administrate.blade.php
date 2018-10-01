@extends('layouts.app')

@section('content')

<div class="container">

  <h2 class="mb-2">Seccion adminitracion de productos</h2>

  <div class="shadow mb-3 p-2 bg-white rounded">
    <form class="" action="ImportProducts" method="post" enctype="multipart/form-data">
      <label for="">importar productos por medio de archivo excel</label> <br>
      <input type="file" name="file" />
      <input type="hidden" value="{{ csrf_token()}}" name="_token" />
      <input type="submit" name="Upload" value="Subir archivo" />
    </form>
  </div>

  <h3 class="mb-2">Lista de todos los productos</h3>

  <div class="shadow mb-3 p-2 bg-white rounded">
    @include('tables.AdministrateProducts')
  </div>

@endsection
