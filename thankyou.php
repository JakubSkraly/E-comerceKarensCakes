<?php
session_start();
$arregloUsuario = $_SESSION['datos_login'];
if(isset($_GET['id_venta']) && isset($_GET['metodo'])){
    include "./php/conexion.php";
    $conexion->query("insert into pagos (id_venta,metodo) values (".$_GET['id_venta'].",'".$_GET['metodo']."')")or die($conexion->error);
    header("Location: ./thankyou.php?id_venta=".$_GET['id_venta']);
}

?>

<!DOCTYPE html>
<html lang="en">
  <?php include("./layouts/head.php");?>
  <body>
      <!-- REDES SOCIALES-->

          <div class="social-bar">
				<a href="https://www.facebook.com/Karens-Cakes-Pasteler%C3%ADa-104709098484054" class="icon icon-facebook" id="iconoR" target="_blank"></a>
				<a href="https://twitter.com/KarenPasteleria"  class="icon icon-twitter"  id="iconoR" target="_blank"></a>
				<a href="https://www.youtube.com/channel/UCXHX6QCvZuUopnLTBnW8Wmw" class="icon icon-youtube" id="iconoR" target="_blank"></a>
				<a href="https://www.instagram.com/pasteleriakarenscakes/" class="icon icon-instagram" id="iconoR" target="_blank"></a>
				<a href="https://www.pinterest.com/gutierrezramoskarencecilia" class="icon icon-pinterest" id="iconoR" target="_blank"></a>
				<a href="#" class="icon icon-whatsapp" id="iconoR" target="_blank"></a>
				
			</div>
			

      
      <!-- -->
  
  <div class="site-wrap">
   <?php include("./layouts/header.php"); ?> 

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <span class="icon-check_circle display-3 text-success"></span>
            <h2 class="display-3 text-black">Muchas Gracias!</h2>
            <p class="lead mb-5">Su pedido se completó correctamente.</p>
            <p><a href="index.php" class="btn btn-sm btn-primary">Regresar a la tienda</a></p>
          </div>
        </div>
      </div>
    </div>

    <?php include("./layouts/footer.php"); ?> 

  </div>

   <?php include("./layouts/script.php"); ?>
   
 <?php include("./layouts/chatbot.php"); ?>
    
  </body>
</html>