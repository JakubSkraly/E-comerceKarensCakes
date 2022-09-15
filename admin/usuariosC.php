<?php
session_start();
include "../php/conexion.php";
if (!isset($_SESSION['datos_login'])){
  header("Location: ../index.php");
}
$arregloUsuario = $_SESSION['datos_login'];
if ($arregloUsuario['nivel']=='cliente') {
    $resultado =$conexion->query("select * from usuario where id=".$arregloUsuario['id_usuario'])or die($conexion->error);
  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Karen's Cakes</title>

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

 <!-- Preloader -->
  <?php include "../layouts/cargar.php" ?>

  <?php include "./layouts/header.php" ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"  style="background:#FDF1DB">
    <!-- Content Header (Page header) -->
    <div class="content-header">
            <h1 class="m-0"  class="m-0" style="text-align:center;color:#84253E;font-weight: bold;">Mi Perfil</h1>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
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
            Se ha insertado correctamente
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
        <thead style="background:#F65C78;color:white">
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Imagen Perfil</th>
            <th>Nivel</th>
            <th>Acciones</tr>  
          </tr>    
        </thead>
        <tbody>
          <?php 
            while ($f = mysqli_fetch_array($resultado)) {
              
            
             ?>
          <tr>            
            <td><?php echo $f['id']; ?> </td>
            <td><?php echo $f['nombre']; ?> </td>
            <td><?php echo $f['telefono']; ?> </td>
            <td><?php echo $f['email']; ?> </td>
            <td>
              <img src="../images/users/<?php echo $f['img_perfil']; ?>" width="20px" height="20px" alt="" >
            </td>
            <td><?php echo $f['nivel']; ?> </td>
            <td>

              <button class="btn btn-outline-warning btn-small btnEditar" 
              data-id="<?php echo $f['id']; ?>"
              data-nombre="<?php echo $f['nombre']; ?>"
              data-telefono="<?php echo $f['telefono']; ?>"
              data-email="<?php echo $f['email']; ?>"
              data-password="<?php echo $f['password']; ?>"
              data-nivel="<?php echo $f['nivel']; ?>"
              data-toggle="modal" data-target="#modalEditar">
                <i class="fa fa-edit"></i>
              </button>

            </tr>  
          </tr>  

        <?php } ?>
        </tbody>
      
      </table>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>



    <!-- Modal Editar -->
      <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="modalEditar" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form action="../php/editarusuario.php" method="post" enctype="multipart/form-data"> 
            <div class="modal-header">
              <h5 class="modal-title" id="modalEditar">Editar Mi Perfil</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <input type="hidden" id="idEdit" name="id">

               <div class="form-group" >
                 <label for="nombreEdit">Nombre </label>
                 <input type="text" name="nombre" placeholder="Nombre" id="nombreEdit" class="form-control" required>
               </div>
               <div class="form-group" >
                 <label for="descripcionEdit">Telefono </label>
                 <input type="text" name="telefono" placeholder="Telefono" id="telefonoEdit" class="form-control" required>
               </div>
               <div class="form-group" >
                 <label for="descripcionEdit">Email </label>
                 <input type="text" name="email" placeholder="Email" id="emailEdit" class="form-control" required readonly>
               </div>
               <div class="form-group" >
                 <label for="precioEdit">Password </label>
                 <input type="text" name="password" placeholder="password" id="passwordEdit" class="form-control">
               </div>
               <div class="form-group" >
                 <label for="imagen">Imagen Perfil</label>
                 <input type="file" name="imagen" id="imagen" class="form-control"  >
               </div>
               <div class="form-group" >
                 <label for="precioEdit">Nivel </label>
                 <input type="text" name="nivel" value="cliente" id="niveldEdit" class="form-control" readonly>
               </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary editar"  >Guardar </button>
            </div>
            </form>
          </div>
        </div>
      </div>

 <?php include "./layouts/footer.php" ?>
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
      idEliminar=$(this).data('id');
      fila=$(this).parent('td').parent('tr');
    });
    $(".eliminar").click(function(){
      $.ajax({
        url: '../php/eliminarproducto.php',
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
      var telefono=$(this).data('telefono');
       var email=$(this).data('email');
      var password=$(this).data('password');
      var nivel=$(this).data('nivel');
      $("#nombreEdit").val(nombre);
      $("#telefonoEdit").val(telefono);
      $("#emailEdit").val(email);
      $("#passwordEdit").val(password);
      $("#nivelEdit").val(nivel);
      $("#idEdit").val(idEditar);


    });
  });

</script>
</body>
</html>