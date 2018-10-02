<script type="text/javascript">

    var itemId, itemAmount, itemAttr, unitPrice, mayorPrice, itemName;

    function openItemInModal(id){
      var url = "{{  url('/') }}/api/product/" + id;

      axios.get(url).then(response =>{
        var data = response.data;
        unitPrice = data.product.price;
        mayorPrice = data.product.price - 10;
        $('#Modal_title').html(data.product.name);
        $('#Uprice').html(data.product.price+'$');
        $('#Mprice').html((data.product.price - 10)+'$');
        $('#productDescription').html(data.product_Description.description);
        $('#ProductModal').modal('show');
        itemId = id;
        console.log(data);

        }).catch(error=>{

          console.log(error);

      })

    }

  function confirmProduct(){
    itemAmount  = $('#amountItem').val();
    itemAttr    = $('#attrItem').val();
    itemName    = $('#Modal_title').html()
    var url     = "{{  url('/') }}/ShoppingCart/store";

    var item = {
      itemId      : itemId,
      itemAmount : itemAmount,
      itemAttr   : itemAttr,
      unitPrice  : unitPrice,
      mayorPrice : mayorPrice,
      itemName   : itemName
    };

    console.log(item);

    axios.post(url, item).then(response =>{
      console.log(response);
      toastr.success('Item añadido al carrito de compras');
      $('#ProductModal').modal('hide');
    }).catch(error =>{
      console.log('Ocurrio un error');
    })

  }
</script>
