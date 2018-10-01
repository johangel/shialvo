<script>
    $(document).ready( function () {
      $('#table').DataTable({
        "autoWidth": false,
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
