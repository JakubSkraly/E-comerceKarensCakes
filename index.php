<?php
session_start();
$arregloUsuario = $_SESSION['datos_login'];
$arreglo = $_SESSION['carrito'];
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
  
  <div class="site-wrap">
      
<!--- ---------------------------------CARRUSEL ------------------------------------------------- -->    
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
      
          <div class="carousel-inner">
            <div class="carousel-item active">
                <!-- CARRUSEL 01  -->
                <div class="site-blocks-cover" style="background-image: url(images/banner_papa.jpg);  background-size: 100% 100%;" data-aos="fade" alt="First slide">
                  <div class="container">
                    <div class="row align-items-start align-items-md-center justify-content-end">
                      <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
                        <h1 class="mb-2" style="color:white">¡¡¡¡FELIZ DIA PAPÁ!!!!</h1>
                        <div class="intro-text text-center text-md-left">
                          <p class="mb-4" style="color:#FFF3ED"><br>"LOS BUENOS MOMENTOS SE COMPARTEN"<br> Celebremos a Papá con los mejores productos y a un increible precio solo por este mes de papá no te lo pierdas</p>
                          <p>
                            <a href="shop.php" class="btn btn-sm btn-primary">Más Información</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-------------------------------- -->
            </div>
            <div class="carousel-item">
                
               <!-- CARRUSEL 02  -->
                <div class="site-blocks-cover" style="background-image: url(images/banner_promo.jpg);background-size: 100% 100%;" data-aos="fade">
                  <div class="container">
                    <div class="row align-items-start align-items-md-center justify-content-end">
                      <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
                        <h1 class="mb-2" style="color:white">No dejes pasar la oportunidad!!!!</h1>
                        <div class="intro-text text-center text-md-left">
                          <p class="mb-4" style="color:#FFF3ED"><br>"AMOR ES CUIDADO Y NOSOTROS TE CUIDAMOS"<br>Enterate de nuestras ofertas y promociones de nuestros productos seleccionados</p>
                          <p>
                            <a href="https://www.facebook.com/Karens-Cakes-Pasteler%C3%ADa-104709098484054" target="_blank" class="btn btn-sm" style="background:#C9E265;color:white">Más Información</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-------------------------------- -->
            </div>
            <div class="carousel-item">
               <!-- CARRUSEL 03  -->
                <div class="site-blocks-cover" style="background-image: url(images/banner_cuponera.jpg);background-size: 100% 100%;" data-aos="fade">
                  <div class="container">
                    <div class="row align-items-start align-items-md-center justify-content-end">
                      <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
                        <h1 class="mb-2" style="color:white">¡No olvides tus cupones!</h1>
                        <div class="intro-text text-center text-md-left">
                          <p class="mb-4" style="color:#545454;">Sorprende con un detalle y a un bajo costo <br> Tenemos cupones de hasta 50% dscto solo por tiempo limitado</p>
                          <p>
                            <a href="https://www.facebook.com/Karens-Cakes-Pasteler%C3%ADa-104709098484054" target="_blank" class="btn btn-sm" style="background:#EF4195;color:white">Más Información</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-------------------------------- -->
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    </div>
    
   
    
    <!-- --------------------------------------------------------------------------   -->
    
    <!--
    <div class="site-blocks-cover" style="background-image: url(images/hero_1.jpg);" data-aos="fade">
      <div class="container">
        <div class="row align-items-start align-items-md-center justify-content-end">
          <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
            <h1 class="mb-2">Finding Your Perfect Shoes</h1>
            <div class="intro-text text-center text-md-left">
              <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla. </p>
              <p>
                <a href="#" class="btn btn-sm btn-primary">Shop Now</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    -->

    <div class="site-section site-section-sm site-blocks-1">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
            <div class="icon mr-4 align-self-start">
              <span class="icon-truck" style="color:#EF4195"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Delivery</h2>
              <p>Contamos con nuestro servicio de delivery. <br> Incluye costos de envio <br>Consulte con una asesora</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
            <div class="icon mr-4 align-self-start">
              <span class="icon-star" style="color:#C9E265"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Productos Personalizados</h2>
              <p>Si lo imaginas, se puede hacer! <br> Llamanos o dejas tus datos <br> Nosotros te asesoramos con tu pedido</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
            <div class="icon mr-4 align-self-start">
              <span class="icon-thumbs-up"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Protocolos de Bioseguridad</h2>
              <p>Nos preocupamos por tu salud y la de nuestros empleados, contamos con protocolos de bioseguridad y servicio de atención via telefonica</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-blocks-2">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
            <a class="block-2-item" href="#">
              <figure class="image">
                <img src="images/categoria1.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <span class="text-uppercase">Categoria</span>
                <h3>Bocaditos</h3>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
            <a class="block-2-item" href="#">
              <figure class="image">
                <img src="images/categoria2.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <span class="text-uppercase">Categoria</span>
                <h3>Tortas</h3>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
            <a class="block-2-item" href="#">
              <figure class="image">
                <img src="images/categoria3.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <span class="text-uppercase">Categoria</span>
                <h3>Ofertas</h3>
              </div>
            </a>
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

    <div class="site-section block-8">
      <div class="container">
        <div class="row justify-content-center  mb-5">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2 style="color:#FF5757">¡APURA QUE SE ACABA!</h2>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-7 mb-5">
            <a href="#"><img src="images/descuento.jpg" alt="Image placeholder" class="img-fluid rounded" style="width:800px;height:400px"></a>
          </div>
          <div class="col-md-12 col-lg-5 text-center pl-md-5">
            <h2><a href="#" style="color:#EF4195">50% DSCT. en productos seleccionados</a></h2>
            <p class="post-meta mb-4"><a href="#">Karen's Cakes</a> <span class="block-8-sep">&bullet;</span> Junio 13, 2021</p>
            <p>Tenmos miles de ofertas para ti<br> Hasta con 50% DSCT. en productos selccionados<br> ¡NO TE LO PIERDAS!</p>
            <p><a href="#" class="btn btn-sm" style="background:#C9E265;color:white">Más Información</a></p>
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