<?php

session_start();
include '../php/conexion.php';
if (!isset($_SESSION['datos_login'])){
  header("Location: ../index.php");
}

$arregloUsuario = $_SESSION['datos_login'];
if ($arregloUsuario['nivel']!='admin') {
  header("Location: ../index.php");
}


$datos = $conexion->query("select ventas.id as id_venta, productos.nombre as nombre_producto, productos.imagen, productos_venta.cantidad, productos_venta.precio , productos_venta.subtotal ,usuario.nombre as nombreUsuario
from productos_venta 
inner join productos on productos_venta.id_producto = productos.id 
inner join ventas on productos_venta.id_venta = ventas.id 
inner join usuario on ventas.id_usuario=usuario.id
 ")or die($conexion ->error);

?>

<!DOCTYPE html>
<html lang="en">

  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Karen's Cakes | Administrador</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./dashboard/plugins/fontawesome-free/css/all.min.css">
  
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="./dashboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
 
  <!-- iCheck -->
  <link rel="stylesheet" href="./dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
 
  <!-- JQVMap -->
  <link rel="stylesheet" href="./dashboard/plugins/jqvmap/jqvmap.min.css">
 
  <!-- Theme style -->
  <link rel="stylesheet" href="./dashboard/dist/css/adminlte.min.css">
 
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="./dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
 
  <!-- Daterange picker -->
  <link rel="stylesheet" href="./dashboard/plugins/daterangepicker/daterangepicker.css">
 
  <!-- summernote -->
  <link rel="stylesheet" href="./dashboard/plugins/summernote/summernote-bs4.min.css">
</head>
  <body class="hold-transition sidebar-mini layout-fixed">
  
  <div class="wrapper">
      
    <?php include "../layouts/cargar.php" ?>
  <?php include("./layouts/header.php"); ?> 

    <div class="content-wrapper" style="background:#FDF1DB" ><br>
      <!-- Content Header (Page header) -->
        <div class="content-header">
            
            <h1 class="m-0" style="text-align:center;color:#84253E;font-weight: bold;" >Pedidos</h1>
          
        </div><br>
        <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">


        <?php   if (isset($_GET['error'])) {  ?>

          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?php echo $_GET['error']; ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>

          </div>
      <?php   } ?>
      <?php   if (isset($_GET['success'])) {  ?>

          <div class="alert alert-success alert-dismissible fade show" role="alert">
            Se ha agregado correctamente
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>

          </div>
      <?php   } ?>
      <?php   if (isset($_GET['modifi'])) {  ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          Se ha actualizado correctamente
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>

        </div>
        <?php   } ?>

      <table class="table table-striped">
        <thead style="background:#FFD31D;color:white">
          <tr>
            <th>ID Venta</th>
            <th>Nombre Producto</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Subtotal</th>
            <th>Usuario Nombre</th>
            <th>Acciones</tr>  
          </tr>    
        </thead>
        <tbody>
          <?php 
            while ($f = mysqli_fetch_array($datos)) {
              
            
             ?>
          <tr>            
            <td><?php echo $f['id_venta']; ?> </td>
            <td>
              <?php echo $f['nombre_producto']; ?></td>
            <td><?php echo $f['cantidad']; ?></td>
            <td>S/ <?php echo number_format($f['precio'],2,'.',''); ?></td>
            <td>S/ <?php echo number_format($f['subtotal'],2,'.',''); ?></td>
            <td><?php echo $f['nombreUsuario']; ?></td>
            <td>

              <button class="btn btn-outline-warning btn-small btnEditar" >
              
                <i class="fa fa-edit"></i>
              </button>

              <button class="btn btn-outline-danger btn-small btnEliminar" 
              data-id="<?php echo $f['id_venta']; ?>"
              data-toggle="modal" data-target="#modalEliminar">
                <i class="fa fa-trash"></i>
              </button>

            </tr>  
          </tr>  

        <?php } ?>
        </tbody>
      
      </table>

      </div><!-- /.container-fluid -->
    </section>
    
        
      </div>
       <!-- Modal Eliminar -->
      <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="modalEliminarLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            
            <div class="modal-header">
              <h5 class="modal-title" id="modalEliminarLabel">Eliminar Pedido</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              多Desea eliminar el pedido?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-danger eliminar" data-dismiss="modal">Eliminar </button>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    <?php include("./layouts/footer.php"); ?> 
  </div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="./dashboard/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="./dashboard/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="./dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="./dashboard/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="./dashboard/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="./dashboard/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="./dashboard/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="./dashboard/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="./dashboard/plugins/moment/moment.min.js"></script>
<script src="./dashboard/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="./dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="./dashboard/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="./dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="./dashboard/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./dashboard/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="./dashboard/dist/js/pages/dashboard.js"></script>

    <script >

  $(document).ready(function(){
    var idEliminar=-1;
    var idEditar=-1;
    var fila;
    $(".btnEliminar").click(function(){
      idEliminar=$(this).data('id_venta');
      fila=$(this).parent('td').parent('tr');
    });
    $(".eliminar").click(function(){
      $.ajax({
        url: '../php/eliminarpedido.php',
        method: 'POST',
        data: {
          id:idEliminar
        }
      }).done(function(res){
      $(fila).fadeOut(1000);
    });

    });

    $(".btnEditar").click(function(){
      idEditar=$(this).data('id');
      var nombre=$(this).data('nombre');
      var descripcion=$(this).data('descripcion');
       var precio=$(this).data('precio');
      var inventario=$(this).data('inventario');
      var categoria=$(this).data('categoria');
      var talla=$(this).data('talla');
      var color=$(this).data('color');
      $("#nombreEdit").val(nombre);
      $("#descripcionEdit").val(descripcion);
      $("#precioEdit").val(precio);
      $("#inventarioEdit").val(inventario);
      $("#categoriaEdit").val(categoria);
      $("#tallaEdit").val(talla);
      $("#colorEdit").val(color);
      $("#idEdit").val(idEditar);


    });
  });

</script>
  </body>
</html>