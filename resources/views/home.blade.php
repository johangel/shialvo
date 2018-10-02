@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-12">
          <div class="mt-2">
            <h1 class="font-weight-bold">Bienvenido a Chialvo</h1>
            <small>
              Caterogia: {{$data['category']}}
            </small>
          </div>

          <div class="shadow mb-5 p-2 bg-white rounded">
              @include('tables.allProducts')
          </div>
    </div>

</div>


@endsection
