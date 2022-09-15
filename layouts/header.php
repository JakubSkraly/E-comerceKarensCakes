<header class="site-navbar" role="banner" >
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
             <form action="./busqueda.php" class="site-block-top-search"
             method="GET">
                <span class="icon icon-search2"></span>
                <input type="text" name="texto" class="form-control border-0" placeholder="Buscar">
              </form>
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center" >
              <div class="site-logo"px
                 <a href="index.php" style="border: none" ><img src="images/logo2.png" width="350"></a>
               <!-- <a href="index.php" class="js-logo-clone" style="margin-rigth:-30px;margin-left:-40px;"  class="js-logo-clone">Karen's Cakes</a> -->
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right" >
              <div class="site-top-icons">
                <ul>
                  <li>
                      <?php if (isset($_SESSION['datos_login'])) { ?>
                      <a href="../admin/">
                      <?php }else{ ?>
                      <a href="./login.php">
                      <?php } ?>
                      <?php echo $arregloUsuario['nombre']; ?>
                      <span class="icon icon-person"></span>
                      </a>
                    
                  </li>
                  <li><a href="#"><span class="icon icon-heart-o"></span></a></li>
                  <li>
                    <a href="cart.php" class="site-cart">
                      <span class="icon icon-shopping_cart"></span>
                      <span class="count" style="background:#EF4195" >
                        <?php 
                        if (isset($_SESSION['carrito'])) {
                          echo count($_SESSION['carrito']);
                           
                         }else{
                          echo 0;
                         } ?>
                      </span>
                    </a>
                  </li> 
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                </ul>
              </div> 
            </div>

          </div>
        </div>
      </div> 
      <nav class="site-navigation text-right text-md-center" role="navigation" style="background:#FFF3ED">
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
		   <li><a href="index.php" >Principal</a></li>
		   <li><a href="about.php" >Nosotros</a></li>
		   <li class="has-children active" >
             
              <a >Catalogo</a>
     
				<ul class="dropdown">
				   <?php
				   include('./php/conexion.php');
                $re = $conexion ->query("select * from categorias order by nombre "); 
                 while ($f = mysqli_fetch_array($re)) {
                
              ?>
                
                <li>
                    <a href="./busqueda.php?texto=<?php echo $f['nombre']; ?>"><?php echo $f['nombre']; ?></a>
                    </li>
              <?php } ?>
                
              </ul>
            </li>
			<li><a href="./shop.php" >Productos</a></li>
            <li><a href="protocolo.php" >Protocolos de Bioseguridad</a></li>
            <li><a href="contact.php" >Contactanos</a></li>
 <!--
            <li class="has-children active">
              <a href="index.html">Home</a>
              <ul class="dropdown">
                <li><a href="#">Menu One</a></li>
                <li><a href="#">Menu Two</a></li>
                <li><a href="#">Menu Three</a></li>
                <li class="has-children">
                  <a href="#">Sub Menu</a>
                  <ul class="dropdown">
                    <li><a href="#">Menu One</a></li>
                    <li><a href="#">Menu Two</a></li>
                    <li><a href="#">Menu Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="has-children">
              <a href="about.html">About</a>
              <ul class="dropdown">
                <li><a href="#">Menu One</a></li>
                <li><a href="#">Menu Two</a></li>
                <li><a href="#">Menu Three</a></li>
              </ul>
            </li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="index2.php">Catalogue</a></li>
            <li><a href="#">New Arrivals</a></li>
            <li><a href="contact.html">Contact</a></li>-->
          </ul>
        </div>
      </nav>
    </header>
	
	 <!------------------------------------------------------------------------- -->

   <!-- <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Principal</a> <span class="mx-2 mb-0">/</span>
           <strong class="text-black">Shop</strong></div>
        </div>
      </div>
    </div> -->