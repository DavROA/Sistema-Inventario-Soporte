$(document).ready(function() {
    var prov_id, opcion;
    var dataTable = $('#datos_ruta').DataTable({
        "responsive": true,
        "processing": true,
        "serverSide": true,
        "order": [],
        "ajax": {
            url: "obtener_rutas2.php",
            type: "POST"
        },
        "columnsDefs": [{
            "targets": [0,6],
            "orderable": false,
        }, ],
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior"
             },
             "sProcessing":"Procesando...",
        }
    });
    var fila;
    //submit para agregar articulos
    $('#formRutaRed').submit(function(e){                         
        e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
        folio1       = $.trim($('#folio1').val());    
        nombre1      = $.trim($('#nombre1').val());
        marca1       = $.trim($('#marca1').val());    
        modelo1      = $.trim($('#modelo1').val());    
        num_poliza1  = $.trim($('#num_poliza1').val());
        categoria1   = $.trim($('#categoria1').val()); 
        proveedor1   = $.trim($('#proveedor1').val());
        descripcion1 = $.trim($('#descripcion1').val());                           
            $.ajax({
              url: "articulosModel.php",
              type: "POST",
              datatype:"json",    
              data:  {art_id:art_id, folio1:folio1, nombre1:nombre1, marca1:marca1, modelo1:modelo1, num_poliza1:num_poliza1 ,categoria1:categoria1,proveedor1:proveedor1, descripcion1:descripcion1, opcion:opcion},    
              success: function(data) {
                dataTable.ajax.reload(null, false);
               }
            });			        
        $('#modalArticulo').modal('hide');		
        Swal.fire({
            position: 'top-center',
            icon: 'success',
            title: 'Guardado correctamente',
            showConfirmButton: false,
            timer: 1500,
            
          })									     			
    });
  
  // limpiar campos
  $("#limpiarCampos").click(function(){
    opcion = 1; //alta           
    art_id=null;
    $("#formArticulos").trigger("reset");
    $(".modal-header").css( "color", "white" );
    $(".modal-title").text("Agregar Artículo");
    $('#modalArticulo').modal('show');	    
  });

     //EVENTO PARA ENVIAR LOS DATOS DE EQUIPOS AL MODAL EQUIPOS     
  $(document).on("click", ".btnVer", function(){
    var ruta  = $(this).attr("id");	    
    $("#id").val(ruta); 	
    $(".modal-header").css("color", "white" );
    $(".modal-title").text("Equipos de cómputo Asignados");		
    $('#modalEquiposAsignados').modal('show');	
  });
});