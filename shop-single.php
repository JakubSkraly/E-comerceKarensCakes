<?php
session_start();
$arregloUsuario = $_SESSION['datos_login'];
  include('./php/conexion.php');
  if( isset($_GET['id'])) {
    $resultado = $conexion ->query("select * from productos where id=".$_GET['id'])or die($conexion->error);
    if(mysqli_num_rows($resultado) > 0 ) {
      $fila = mysqli_fetch_row($resultado);
    } else {
      header("Location: ./index.php");
    }
    
  }else{
    //redireccionar
    header("Location: ./index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tienda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  <?php include("./layouts/header.php"); ?> 
  <div class="site-wrap">
    

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="images/<?php echo $fila[4];?>" alt="<?php echo $fila[1];?>" class="img-fluid">
          </div>
          <div class="col-md-6">
            <h2 class="text-black"><?php echo $fila[1];?></h2>
            <p><?php echo $fila[2];?></p>
            <p><strong class="text-primary h4">S/. <?php echo $fila[3];?></strong></p>
            
            <div class="mb-5">
              <div class="input-group mb-3" style="max-width: 120px;">
              <div class="input-group-prepend">
                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
              </div>
              <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
              <div class="input-group-append">
                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
              </div>
            </div>

            </div>
            <p><a href="cart.php?id=<?php echo $fila[0];?>" class="buy-now btn btn-sm btn-primary">Agregar al carrito</a></p>

          </div>
        </div>
      </div>
    </div>

    <div class="site-section block-3 site-blocks-2" style="background:#EBF1D2">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Productos Favoritos</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="nonloop-block-3 owl-carousel">
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="images/chees1.jpg" alt="Image placeholder" width="500" height="200">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="#">Tortas</a></h3>
                    <p class="mb-0">Con una baja preparación en azucar</p>
                    <p class="text-primary font-weight-bold">S/ 15</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="images/704.jpg" alt="Image placeholder" width="500" height="200">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="#">Pastel</a></h3>
                    <p class="mb-0">Productos a base de estevia</p>
                    <p class="text-primary font-weight-bold">S/ 12</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="images/bocadito1.jpg" alt="Image placeholder" width="500" height="200">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="#">Empanadas</a></h3>
                    <p class="mb-0">Elaborados con insumos organicos</p>
                    <p class="text-primary font-weight-bold">S/ 5</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="images/chees3.jpg" alt="Image placeholder" width="500" height="200">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="#">Torta Heladas</a></h3>
                    <p class="mb-0">Elaboradas a base de Piñas</p>
                    <p class="text-primary font-weight-bold">S/ 30</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="images/dessert-3.jpg" alt="Image placeholder" width="500" height="200">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="#">Postre de Chocolate</a></h3>
                    <p class="mb-0">Cuidamos tu salud</p>
                    <p class="text-primary font-weight-bold">S/ 25</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include("./layouts/footer.php"); ?> 
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>