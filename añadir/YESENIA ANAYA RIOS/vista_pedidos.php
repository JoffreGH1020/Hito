<?php 
include '../bd/autoload.php';
include '../controlador/ControladorPedidos.php';
include './header.php';
if (isset($_POST['guardar'])) {
    $GrabarPedido = new ControladorPedidos();
    $GrabarPedido->GuardarPedido($_POST);
}
if (isset($_POST['actualizar'])) {
    $GrabarPedido = new ControladorPedidos();
    $GrabarPedido->GuardarPedido($_POST);
}
if (isset($_POST['eliminar'])) {
    $EliminarPedidos = new ControladorPedidos();
    $EliminarPedidos->EliminarPedido($_POST);
}

?>
 


<div class="content-wrapper">
    <section class="content">
       
    
   
    <h1 class="col-xs-12">
        PEDIDOS 
        <a href="GestionarPedidos.php" class="btn btn-info"> + NUEVO</a>
    </h1

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">

                </div>
                <form  method="POST" action="GestionarPedidos.php" >   
             <?php 
            if(isset($_GET['id'])){
                 $buscadorid = new ControladorPedidos();
                    $pedido=$buscadorid->BuscarPedido($_GET['id']);
                    foreach ($pedido as $ped) {
                  ?> 
                    <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="">EMISOR</label>
                  <input type="text" class="form-control" name="pedido_envia" placeholder="Ingrese emisor pedido" value="">
                </div>
                   <div class="form-group col-md-4">
                  <label for="">DESTINO</label>
                  <input type="text" class="form-control" name="pedido_destino" placeholder="Ingrese destino de pedido" required="" value="">
                </div>
                   <div class="form-group col-md-4">
                  <label for="">DESTINATARIO</label>
                  <input type="text" class="form-control" name="pedido_destinatario" placeholder="Ingrese destinatario" required="" value="">
                </div>
                   <div class="form-group col-md-4">
                  <label for="">Referencia</label>
                  <input type="text" class="form-control" name="pedido_referencia" placeholder="Ingrese referencia" required="" value="">
                </div>
                  
                </div>
                   
                  
                 </div>   
                <div class="form-group col-md-4">
                  <label for="">Acción</label>
                  <button type="submit" name="guardar" class="form-control btn btn-primary">Guardar</button>
                </div>
                    
                <?php
            }
             ?>
                          
            </form> 
                 
     
  </div>
<?php
include './footer.php';
?>
<script>
        $(function () {
            //$('#example1').DataTable()
            $('#example1').DataTable({
             
            'buttons': [
                'excel', 'pdf', 'print'
    ],
                'paging': true,
                'lengthChange': true,
                'searching': true,
                'ordering': true,
                'info': false,
                'autoWidth': true,
                'dom': 'Bfrtip',
                'language': {
                    "lengthMenu": "Mostrar _MENU_ registros por página.",
                    "zeroRecords": "Lo sentimos. No se encontraron registros.",
                    "sInfo": "Mostrando: _START_ de _END_ - Total registros: _TOTAL_ ",
                    "infoEmpty": "No hay registros aún.",
                    "infoFiltered": "(filtrados de un total de _MAX_ registros)",
                    "search": "Búsqueda",
                    "LoadingRecords": "Cargando ...",
                    "Processing": "Procesando...",
                    "SearchPlaceholder": "Comience a teclear...",
                    "paginate": {
                        "previous": "Anterior",
                        "next": "Siguiente",
                    }}
            })
                  $( "#datepicker" ).datepicker();
        })
    </script>	
