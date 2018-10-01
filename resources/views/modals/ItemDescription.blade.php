<div class="modal fade" id="ProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Modal_title">Nombre de producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7">
            <img src="{{asset('assets/imgs/products/default.jpg')}}" width="100%" alt="">
          </div>

          <div class="col-md-5 d-flex flex-column justify-content-between">
            <div class="mb-2">
              <small class="text-muted">precio unitario</small>
              <h3 id="Uprice" class="red"></h3>
              <small class="text-muted">Precio Mayor a partir de 15 Unidades</small>
              <h3 id="Mprice" class="red"></h3>
              <hr>
              <h4><strong>Sobre el producto</strong></h4>
              <p id="productDescription"></p>
              <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label">Cantidad</label>
                <div class="col-sm-8">
                  <input type="number" value=1 id="amountItem" class="form-control">
                </div>
              </div>

              <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label">Color</label>
                <div class="col-sm-8">
                  <select id="attrItem" class="custom-select">
                    <option selected disabled>Seleciona un color</option>
                    <option value="Negro">Negro</option>
                    <option value="Blanco">Blanco</option>
                    <option value="Azul">Azul</option>
                  </select>
                </div>
              </div>

            </div>

            <div width="100%">
              <button onClick="confirmProduct()" type="button" class="btn btn-info col-md-12 text-white d-flex align-center justify-content-center" name="button">Añadir a carrito <i class="material-icons">add_shopping_cart</i> </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@include('scripts.modal.itemDescriptionScript')
