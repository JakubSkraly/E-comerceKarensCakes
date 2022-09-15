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

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Principal</a> <span class="mx-2 mb-0">/</span>
           <strong class="text-black">Contactanos</strong></div>
        </div>
      </div>
    </div>
    
    
    <!--------- -->
  
  <div class="site-wrap">
  

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-3 text-black" style="background:#EF4195;color:white;text-align:center">Dejanos Tus Datos</h2>
          </div>
          <div class="col-md-7">

            <form action="#" method="post" style="background:#D5EFC1">
              
              <div class="p-3 p-lg-5 border">
                  
                <div class="form-group row">
                    
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">Nombre <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="c_fname">
                  </div>
                  <div class="col-md-6">
                    <label for="c_lname" class="text-black">Apellidos <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_lname" name="c_lname">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="c_email" name="c_email" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_subject" class="text-black">Dirrecion </label>
                    <input type="text" class="form-control" id="c_subject" name="c_subject">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_message" class="text-black">Mensaje </label>
                    <textarea name="c_message" id="c_message" cols="30" rows="7" class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-lg btn-block" style="background:#EF4195;color:white" value="Enviar Mansaje">
                  </div>
                </div>
              </div>
            </form>
          </div>
          
         <div class="col-md-5 ml-auto">
            <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">Ubicanos</span>
              <p class="mb-0">Alameda Los Misioneros 236 Santa Rosa Callao 01 Callao, Perú</p>
                <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.396443556261!2d-77.1029717853652!3d-12.016205091487627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf76a4c35bccc32da!2sAlameda%20de%20los%20Misioneros!5e0!3m2!1ses!2spe!4v1623711161354!5m2!1ses!2spe" width="400" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        
        
       <style>
           
           /* Start: Google Maps Responsive */
            .map-responsive {
               
             padding-bottom:100px;  /*  /*Reduce este valor si el mapa fuera muy alto, por ejemplo 250px, puedes usar porcentajes, 50%*/
               position:relative;
    height:0;
             
            }
            .map-responsive iframe{
               
                height:100%;
                width:30%;
                  left:0;
    top:0;
               
            }
            /* End: Google Maps Responsive */
       </style>
        
        </div>
      </div>
    </div>

    
  </div>
  <?php include("./layouts/chatbot.php"); ?>
    <?php include("./layouts/footer.php"); ?> 
  <?php include("./layouts/scrip.php"); ?> 
    
  </body>
</html>