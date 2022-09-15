<?php
session_start();
$arregloUsuario = $_SESSION['datos_login'];
?>
<!DOCTYPE html>
<html lang="en">
    <?php include("./layouts/head.php"); ?> 
  <?php include("./layouts/header.php"); ?> 
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
  
  <div class="site-wrap">
    <br>
   <div class="container" style="background:#D5EFC1;width:100%;height:100%">
       <center>
           <!--<video autoplay controls src="images/video.mp4#t=15" width="1000" height="600"></video> -->
       <video id="video"width="1000" height="600" autoplay muted loop>
         <source src="images/video.mp4"  type="video/mp4"></center>
        </video>
   </div> 
   
   <!-- --->
   
    
    <div class="site-section border-bottom" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6">
            <div class="block-16">
              <!----  CARRUSEL -------------------->

                   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="images/a1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="images/a2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="images/a3.jpg" alt="Third slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
  

    <!----                       ------>
                    </div>
                  </div>
                  <div class="col-md-1"></div>
                  <div class="col-md-5">
                    
            
                    <div class="site-section-heading pt-3 mb-4">
                      <h2 class="text-black">Impacto Ambiental</h2>
                    </div>
                         <p>
                           Utilización de material biodegradable para los envases (cajas para los bocaditos, para las tortas, etc.) 
                           <br>ya que ayuda a personas con alérgicas a los componentes de bolsas platicas además de ser beneficioso<br>
                           para el medio ambiente ya que ayuda a disminuir a la generación de los gases invernadero. <br>

                            Utilización de bolsas reutilizables de tela ya que duran mucho más tiempo y son difíciles de romper. 

                            La preparación de los productos es con insumos orgánicos.  
                        </p>
                       
          </div>
        </div>
      </div>
    </div>
    
    <!--- --->
    
    <div class="site-section border-bottom" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6">
            <div class="block-16">
             
              <div class="site-section-heading pt-3 mb-4">
                      <h2 class="text-black">Impacto Economico</h2>
                    </div>
                         <p>
                            Reciclaje de cajas y cubiertos, obtenidas de las compras de los 
                            clientes para posteriormente destinarlos a microempresas o 
                            talleres de cultura donde les den una segunda vida y así 
                            poder cooperar con el crecimiento de esas organizaciones.
                        </p>
                        <p>
                            Cambiar el modelo de competencia de la industria repostera 
                            de esta manera obteniendo una competencia más amigable al 
                            ambiente y dando como ejemplo la utilización de materiales 
                            biodegradables 
                        </p>
                    </div>
                  </div>
                  <div class="col-md-1"></div>
                  <div class="col-md-5">
                     <!----  CARRUSEL -------------------->

                   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="images/r1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="images/r2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="images/r3.jpg" alt="Third slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
  

    <!----                       ------>
            
                   
          </div>
        </div>
      </div>
    </div>
    
    
    
    <!-- -->
    
       <!-- --->
   
    
    <div class="site-section border-bottom" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6">
            <div class="block-16">
              <!----  CARRUSEL -------------------->

                   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="images/s1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="images/s2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="images/s3.jpg" alt="Third slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
  

    <!----                       ------>
                    </div>
                  </div>
                  <div class="col-md-1"></div>
                  <div class="col-md-5">
                    
            
                    <div class="site-section-heading pt-3 mb-4">
                      <h2 class="text-black">Impacto Social</h2>
                    </div>
                          <p>
                          Promoción en la participación de personas de todas las edades amantes del arte de la repostería<br> mediante la visualización de videos tutoriales para que puedan realizarlos en casa. 

                          <br>  Generación de empleo para personas que posean alguna discapacidad lo cual le permitan<br> establecerse al ámbito laboral en el rubro repostero.   
                            
                           <br> Donación del 5% del costo del producto a casas hogares y albergues  
                        </p>
                       
          </div>
        </div>
      </div>
    </div>
    
    
    
    
    
  <!--  
      

    
    <div class="site-section border-bottom" data-aos="fade">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>The Team</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3">
  
            <div class="block-38 text-center">
              <div class="block-38-img">
                <div class="block-38-header">
                  <img src="images/person_1.jpg" alt="Image placeholder" class="mb-4">
                  <h3 class="block-38-heading h4">Elizabeth Graham</h3>
                  <p class="block-38-subheading">CEO/Co-Founder</p>
                </div>
                <div class="block-38-body">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil sit distinctio recusandae doloribus ut fugit officia voluptate soluta. </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="block-38 text-center">
              <div class="block-38-img">
                <div class="block-38-header">
                  <img src="images/person_2.jpg" alt="Image placeholder" class="mb-4">
                  <h3 class="block-38-heading h4">Jennifer Greive</h3>
                  <p class="block-38-subheading">Co-Founder</p>
                </div>
                <div class="block-38-body">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil sit distinctio recusandae doloribus ut fugit officia voluptate soluta. </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="block-38 text-center">
              <div class="block-38-img">
                <div class="block-38-header">
                  <img src="images/person_3.jpg" alt="Image placeholder" class="mb-4">
                  <h3 class="block-38-heading h4">Patrick Marx</h3>
                  <p class="block-38-subheading">Marketing</p>
                </div>
                <div class="block-38-body">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil sit distinctio recusandae doloribus ut fugit officia voluptate soluta. </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="block-38 text-center">
              <div class="block-38-img">
                <div class="block-38-header">
                  <img src="images/person_4.jpg" alt="Image placeholder" class="mb-4">
                  <h3 class="block-38-heading h4">Mike Coolbert</h3>
                  <p class="block-38-subheading">Sales Manager</p>
                </div>
                <div class="block-38-body">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil sit distinctio recusandae doloribus ut fugit officia voluptate soluta. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  

    <div class="site-section site-section-sm site-blocks-1 border-0" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
            <div class="icon mr-4 align-self-start">
              <span class="icon-truck"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Free Shipping</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
            <div class="icon mr-4 align-self-start">
              <span class="icon-refresh2"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Free Returns</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
            <div class="icon mr-4 align-self-start">
              <span class="icon-help"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Customer Support</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  


  
  </div>
  
  --> 
  <?php include("./layouts/chatbot.php"); ?>
  <?php include("./layouts/footer.php"); ?> 
  <?php include("./layouts/script.php"); ?> 
  
    
  </body>
</html>