    <?php
session_start();
$arregloUsuario = $_SESSION['datos_login'];
?>
<!DOCTYPE html>
<html>
    <?php	include("./layouts/head.php"); ?>
    <?php	include("./layouts/header.php"); ?>
<body >
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
           <strong class="text-black">Protocolos de Bioseguridad</strong></div>
        </div>
      </div>
    </div>
               
   
        <div class="site-section border-bottom" data-aos="fade">
          <div class="container">
            <div class="row mb-5">
              <div class="col-md-6">
                <div class="block-16">
                  <figure>
                    <img src="images/laptop.jpg" alt="Image placeholder" class="img-fluid rounded">
    
                  </figure>
                </div>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-5" >
                
                <div class="site-section-heading pt-3 mb-4">
                  <h2 class="text-black">MEDIDAS DE PREVENCIÓN</h2>
                </div>
                <p align="justify;">La limpieza de establecimientos y oficinas, con productos como alcohol, jabón o gel antibacterial, pues los expertos han señalado que la corona o cabeza del virus, se destruye con productos antigérmenes.</p>
                  <p align="justify;">Se debe facilitar a los empleados estos implementos de higiene en las instalaciones de la empresa, pues también es importante para la prevención del virus lavarse las manos continuamente y limpiar los objetos con los que se tiene contacto como computadores.</p>
               <p align="justify;" >Establecer turnos de trabajo flexible o teletrabajo, pues las aglomeraciones de personas facilitan la propagación del virus. Por esto, una importante medida de prevención es reemplazar las reuniones presenciales por virtuales .</p>
                    
              </div>
            </div>
          </div>
        </div>    
        
        <div class="site-section site-blocks-1 border-0" data-aos="fade">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
                <div class="icon mr-4 align-self-start">
                  <span class="icon-heart" style="color:#eba17c;"></span>
                </div>
                <div class="text">
                   <h2 class="text-uppercase">Protege</h2>
                  <p>" Recuerda que un mar en calma nunca hizo un buen marinero. Son momentos para sacar lo mejor de nosotros. ¡Te animo a ello! Cuentas con mi apoyo y empatía para lograrlo vencer el Covid-19. "</p>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
                <div class="icon mr-4 align-self-start">
                  <span class="icon-heart" style="color:#eba17c;"></span>
                </div>
                <div class="text">
                  <h2 class="text-uppercase"> Protegete</h2>
                  <p>" Si bien los medicamentos y el oxígeno son vitales, el estado de ánimo y la salud emocional de los pacientes es importante para su recuperación. "</p>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon mr-4 align-self-start">
                   <span class="icon-heart" style="color:#eba17c;"></span>
                </div>
                <div class="text">
                  <h2 class="text-uppercase">Protegemos </h2>
                  <p> "La resiliencia no es recuperarse de algo. Es reconstruirse. Las crisis me han desarmado y me armaron de nuevo siendo una mejor versión de mí. "</p>
                </div>
              </div>
            </div>
          </div>
          
          
        </div>
        
        <div class="site-section block-3 site-blocks-2 bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>PRECAUCIONES</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="nonloop-block-3 owl-carousel">
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="images/salud1.jpg" alt="Image placeholder" class="img-fluid">
                  </figure>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="images/salud2.jpg" alt="Image placeholder" class="img-fluid">
                  </figure>
                </div>
              </div>
              
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="images/salud3.jpg" alt="Image placeholder" class="img-fluid">
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
        
          
        
  <?php include("./layouts/footer.php"); ?> 
 <?php include("./layouts/script.php"); ?>
 <?php include("./layouts/chatbot.php"); ?>
</body>
</html>