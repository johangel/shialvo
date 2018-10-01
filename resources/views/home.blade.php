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
