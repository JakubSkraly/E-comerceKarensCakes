<?php 

session_start();
include "../php/conexion.php";
if (!isset($_SESSION['datos_login'])){
  header("Location: ../index.php");

}
$arregloUsuario = $_SESSION['datos_login'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Karen's Cakes | Dashboard</title>

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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- 
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="./dashboard/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>Preloader -->

  <?php include "./layouts/header.php" ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background:#FDF1DB">
    <!-- Content Header (Page header) -->
    
    <?php
          if ($arregloUsuario['nivel']=='admin') {
    ?>
    
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12" >
            <!-- 
          <h1 class="m-0" style="text-align:center;color:white">Panel de Control del Administrador</h1> 
              <center><img src="../images/administradorP.png" width="200"></center> -->
            <center><img src="../images/logo2.png" width="450" height="100" max-width="500"></center>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
    <?php } ?>
    
        <?php
          if ($arregloUsuario['nivel']=='cliente') {
    ?>
    
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
           <!-- <h1 class="m-0">Panel del Cliente</h1> -->
            <center><img src="../images/logo2.png" width="450" height="100" max-width="500"></center>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
    <?php } ?>

    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        
    <?php
          if ($arregloUsuario['nivel']=='admin') {
    ?>
        <!--- nuevos Pedidos --->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box" style="background:#EA2C62;color:white">
              <div class="inner">
                
                <?php
                $consulta=$conexion->query("select count(*) from ventas")or die($conexion->error);
                if (mysqli_num_rows($consulta)>0) {
                    $fila =mysqli_fetch_row($consulta);
                    $orden=$fila[0];
                ?>
                <h3><?php echo $orden ?></h3>
                <?php } ?>
                <p>Nuevos Pedidos</p>
                
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="./pedidosA.php" class="small-box-footer">Mas Informacion<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!------- nuevos pedidos----------->
          
          <!-- pagos con mercado pago-->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box" style="background:#A6CB12;color:white">
              <div class="inner">
                <?php
                $consulta2=$conexion->query("select count(*) from pagos where metodo='mercado_pago' ")or die($conexion->error);
                if (mysqli_num_rows($consulta2)>0) {
                    $fila =mysqli_fetch_row($consulta2);
                    $mercado_pago=$fila[0];
                ?>
                <h3><?php echo $mercado_pago ?></h3>
                <?php } ?>
              </div>
              <center>
              <p>Compras realizadas con Mercado Pago</p>
              </center>
              <div class="icon">
                <i class="ion ion-card"></i>
              </div>
              <a href="./pedidosA.php" class="small-box-footer">Mas Informacion<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- pagos con mercado pago -->
          
          <!-- pagos con paypal -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box" style="background:#E00543;color:white">
              <div class="inner">
                <?php
                $consulta3=$conexion->query("select count(*) from pagos where metodo='paypal' ")or die($conexion->error);
                if (mysqli_num_rows($consulta3)>0) {
                    $fila =mysqli_fetch_row($consulta3);
                    $paypal=$fila[0];
                ?>
                <h3><?php echo $paypal ?></h3>
                <?php } ?>
              </div>
              <center>
              <p>Compras realizadas con Paypal</p>
              </center>
              <div class="icon">
                <i class="fa fa-cc-paypal"></i>
              </div>
              <a href="./pedidosA.php" class="small-box-footer">Mas Informacion<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- paypal -->
          
          <!-- Total de Usuario registrados -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box" style="background:#84253E;color:white">
              <div class="inner">
                
                <?php
                $consulta4=$conexion->query("select count(*) from usuario ")or die($conexion->error);
                if (mysqli_num_rows($consulta4)>0) {
                    $fila =mysqli_fetch_row($consulta4);
                    $usuarios_registrados=$fila[0];
                ?>
                <h3><?php echo $usuarios_registrados ?></h3>
                <?php } ?>

                <p>Usuarios Registrados</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">Mas Informacion<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- usuarios registrado --->
    <?php } ?>
          
    <?php
          if ($arregloUsuario['nivel']=='cliente') {
    ?>
          <!--- nuevos Pedidos --->
          <div class="col-lg-3 col-6" style="margin-left:15%">
            <!-- small box -->
            <div class="small-box " style="background:#B2E672;color:white">
              <div class="inner">
                <?php
                $cli=$conexion->query("select count(*) from ventas where id_usuario='". $arregloUsuario['id_usuario']."'")or die($conexion->error);
                if (mysqli_num_rows($cli)>0) {
                    $fila =mysqli_fetch_row($cli);
                    $mis_pedidos=$fila[0];
                ?>
                <h3><?php echo $mis_pedidos ?></h3>
                <?php } ?>
                <p>Mis Pedidos</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="./pedidosC.php" class="small-box-footer">Mas Informacion<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!------- nuevos pedidos----------->
          
          <!-- pagos con mercado pago-->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box"  style="background:#FFD478;color:white">
              <div class="inner">
                <?php
                $cli2=$conexion->query("select count(*), pagos.metodo from ventas
                inner join pagos on ventas.id=pagos.id_venta
                where id_usuario='". $arregloUsuario['id_usuario']."' and pagos.metodo='mercado_pago' ")or die($conexion->error);
                if (mysqli_num_rows($cli2)>0) {
                    $fila =mysqli_fetch_row($cli2);
                    $mercado_pago=$fila[0];
                ?>
                <h3><?php echo $mercado_pago ?></h3>
                <?php } ?>
              </div>
              <center>
              <p>Compras realizadas con Mercado Pago</p>
              </center>
              <div class="icon">
                <i class="ion ion-card"></i>
              </div>
              <a href="./pedidosC.php" class="small-box-footer">Mas Informacion<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- pagos con mercado pago -->
          
          <!-- paypal-->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box" style="background:#F96B85;color:white">
              <div class="inner">
                <?php
                $cli3=$conexion->query("select count(*), pagos.metodo from ventas
                inner join pagos on ventas.id=pagos.id_venta
                where id_usuario='". $arregloUsuario['id_usuario']."' and pagos.metodo='paypal' ")or die($conexion->error);
                if (mysqli_num_rows($cli3)>0) {
                    $fila =mysqli_fetch_row($cli3);
                    $pago_paypal=$fila[0];
                ?>
                <h3><?php echo $pago_paypal ?></h3>
                <?php } ?>
              </div>
              <center>
              <p>Compras realizadas con Paypal</p>
              </center>
              <div class="icon">
                <i class="fa fa-cc-paypal"></i>
              </div>
              <a href="./pedidosC.php" class="small-box-footer">Mas Informacion<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- paypal -->
          
    <?php } ?>
          
          
          
          
          
        </div>
      </div>
    </section>
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
</body>
</html>
