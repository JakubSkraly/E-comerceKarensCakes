<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Karen's Cakes | Registro</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./admin/dashboard/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="./admin/dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./admin/dashboard/dist/css/adminlte.min.css">
  
  <!-- -->

</head>



<body class="hold-transition login-page" style="background-size: cover;background-image: url('images/login.jpg');background-repeat: no-repeat;background-attachment: fixed;">
<div class="login-box">
  <div class="login-logo">
     <img src="images/logoN.png" style="width:220px;height:210px;text-align:center"> <br>
     <a href="./index.php" style="color:white;font-weight: bold"><b>Tienda Online</b></a>
  </div>  
  
  <!-- ----------------------------------------------------->

  
 
<!---------------------------------------------------------------------------------------- --->
  
  <!-- /.login-logo -->

  <div> 
  <center>
    <div class="card-body login-card-body" class="card" style="border-radius: 30px;background:white;border: 10px solid transparent;
  width: 350px;">
       <div class="login-logo">  
      <!--<p class="login-box-msg" style="color:#cdeac0;font-size:25px;">Iniciar sesion</p> <br>
        <a href="./index.php" style="color:#cdeac0;font-weight: bold"><b>Tienda Online</b></a> -->
    
        </div>
      
      <?php   if (isset($_GET['complete'])) {  ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?php echo $_GET['complete']; ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php   } ?>
        
        <?php   if (isset($_GET['error'])) {  ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?php echo $_GET['error']; ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php   } ?>

      <form action="./php/insertarusuario.php" method="post">
        <div class="input-group mb-3">
          <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre Completo" required>
          <div class="input-group-append">
            <div class="input-group-text"style="background:#fec3a6;color:white">
              <span class="fas fa-user" ></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="number" name="telefono" id="telefono" class="form-control" placeholder="Número de Telefono" required>
          <div class="input-group-append">
            <div class="input-group-text"style="background:#fec3a6;color:white">
              <span class="fas fa-phone" ></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text"style="background:#fec3a6;color:white">
              <span class="fas fa-envelope" ></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
          <div class="input-group-append">
            <div class="input-group-text" style="background:#fec3a6;color:white">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <center>
            <button type="submit" class="btn btn-block" style="background-image: linear-gradient(355deg, #ffacba 0, #ff9db1 25%, #ff8ba8 50%, #f17a9f 75%, #e56b99 100%);border:none;color:white">Registrate</button>
            </center>
          </div><br><br><br>
      </div>
      </form>
</center>
    </div> 
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="./admin/dashboard/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./admin/dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./admin/dashboard/dist/js/adminlte.min.js"></script>
</body>
</html>