@if(session('info'))
  <div class="container mt-3">
    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-success">
          {{session('info')}}
        </div>
      </div>
    </div>
  </div>
@endif
