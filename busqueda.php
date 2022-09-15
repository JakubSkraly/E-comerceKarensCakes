<?php
session_start();

include('./php/conexion.php');
if(!isset($_GET['texto'])){
    header("Location: ./shop.php");
}
$arregloUsuario = $_SESSION['datos_login'];
?>
<!DOCTYPE html>
<html lang="en">
 <?php include("./layouts/head.php");?>
  <?php	include("./layouts/header.php"); ?>
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
      
      <!------------------------------------------------------------------------- -->
  <!------------------------------------------------------------------------- -->

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Principal</a> <span class="mx-2 mb-0">/</span>
           <strong class="text-black">Catalogo</strong></div>
        </div>
      </div>
    </div>
    
    
    <!--------- -->
  <div class="site-wrap">
     

    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-9 order-2">

    <!--        <div class="row">
              <div class="col-md-12 mb-5">
                <div class="float-md-left mb-4"><h2 class="text-black h5">Buscando resultados para <?php echo $_GET['texto']; ?></h2></div>
                <div class="d-flex">
                  <div class="dropdown mr-1 ml-md-auto">
                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Latest
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                      <a class="dropdown-item" href="#">Men</a>
                      <a class="dropdown-item" href="#">Women</a>
                      <a class="dropdown-item" href="#">Children</a>
                    </div>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuReference" data-toggle="dropdown">Reference</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                      <a class="dropdown-item" href="#">Relevance</a>
                      <a class="dropdown-item" href="#">Name, A to Z</a>
                      <a class="dropdown-item" href="#">Name, Z to A</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Price, low to high</a>
                      <a class="dropdown-item" href="#">Price, high to low</a>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
            <div class="row mb-5">
              <?php
              
              $resultado = $conexion ->query("select productos.* , categorias.nombre as categoria from productos 
              inner join categorias on productos.id_categoria = categorias.id where 
              productos.nombre like '%".$_GET['texto']."%' or
              productos.descripcion like '%".$_GET['texto']."%' or
              categorias.nombre like '%".$_GET['texto']."%' 
              order by id")or die($conexion -> error);
              if(mysqli_num_rows($resultado) > 0){
              
                while ($fila = mysqli_fetch_array($resultado)) {
                 // code...
              
              ?>
              <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                  <figure class="block-4-image">
                    <a href="shop-single.php?id=<?php echo $fila['id'];?>">
                      <img src="images/<?php echo $fila['imagen'];?>" alt="<?php echo $fila['nombre'];?>" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="shop-single.php?id=<?php echo $fila['id'];?>"><?php echo $fila['nombre'];?></a></h3>
                    
                    <p class="text-primary font-weight-bold">S/. <?php echo $fila['precio']; ?></p>
                  </div>
                </div>
              </div>
            <?php  } }else{
            echo '<h2>Sin resultados</h2>';
            } ?>
            </div>
            
          </div>

          <div class="col-md-3 order-1 mb-5 mb-md-0">
            <div class="border p-4 rounded mb-4">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">Categorias</h3>
              <ul class="list-unstyled mb-0">
                <?php
              $re = $conexion ->query("select * from categorias order by nombre "); 
              while ($f = mysqli_fetch_array($re)) {
              
              ?>
                <li class="mb-1">
                  <a href="./busqueda.php?texto=<?php echo $f['nombre']; ?>" class="d-flex">
                    <span> <?php echo $f['nombre']; ?> </span> 
                    <span class="text-black ml-auto">

                      <?php $re2 = $conexion ->query("select count(*) from productos where id_Categoria =".$f['id']); 
                      $fila = mysqli_fetch_row($re2);
                      echo $fila[0];

                      ?>
                      </span>
                  </a></li>
              <?php } ?>
              </ul>
            </div>

            
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="site-section site-blocks-2">
                <div class="row justify-content-center text-center mb-5">
                  <div class="col-md-7 site-section-heading pt-4">
                    <h2>Categoria</h2>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
                    <a class="block-2-item" href="#">
                      <figure class="image">
                        <img src="images/torta2.jpg" alt="" class="img-fluid">
                      </figure>
                      <div class="text">
                        <span class="text-uppercase">Categoria</span>
                        <h3>Tortas</h3>
                      </div>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                    <a class="block-2-item" href="#">
                      <figure class="image">
                        <img src="images/pastel6.jpg" alt="" class="img-fluid">
                      </figure>
                      <div class="text">
                        <span class="text-uppercase">Categoria</span>
                        <h3>Pasteles</h3>
                      </div>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                    <a class="block-2-item" href="#">
                      <figure class="image">
                        <img src="images/bocadito14.jpg" alt="" class="img-fluid">
                      </figure>
                      <div class="text">
                        <span class="text-uppercase">Categoria</span>
                        <h3>Bocaditos</h3>
                      </div>
                    </a>
                  </div>
                </div>
              
            </div>
          </div>
        </div>
        
      </div>
    </div>
    <?php include("./layouts/footer.php"); ?> 
<?php include("./layouts/chatbot.php"); ?>
    
  </div>

   <?php include("./layouts/script.php"); ?> 
    
  </body>
</html>