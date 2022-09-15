<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Karen Cakes</title>

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

  <div > 
  <center>
    <div class="card-body login-card-body" class="card" style="border-radius: 30px;background:white;border: 10px solid transparent;
  width: 350px;">
    <div class="login-logo">  
      <!--<p class="login-box-msg" style="color:#cdeac0;font-size:25px;">Iniciar sesion</p> <br>
        <a href="./index.php" style="color:#cdeac0;font-weight: bold"><b>Tienda Online</b></a> -->
    
        </div>
        
    
      <form action="./php/check.php" method="post">
          
          <?php   if (isset($_GET['registro'])) {  ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo $_GET['registro']; ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php   } ?>
          
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text"style="background:#fec3a6;color:white">
              <span class="fas fa-envelope" ></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text" style="background:#fec3a6;color:white">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
        
          <!-- /.col -->
        <div class="col-8" style="margin-left:50px">
            <button type="submit" class="btn btn-block" style="background-image: linear-gradient(355deg, #ffacba 0, #ff9db1 25%, #ff8ba8 50%, #f17a9f 75%, #e56b99 100%);border:none;color:white">Ingresar</button>
          </div><br><br><br>
          <!-- /.col --> 
          <?php 
          if (isset($_GET['error'])) {
            echo '<div class="col-12 alert alert-danger">'.$_GET['error'].'</div>';
          }
          ?>


      </div>
      </form>
      
        <center>
      <p class="mb-0">
        <a href="registrar.php" class="text-center">Registrate</a>
      </p></center>
    </div> 
    </center>
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
