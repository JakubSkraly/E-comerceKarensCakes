  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4" style="background:#2EC1AC;color:white">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../images/iconoPagina.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light" style="color:white">Karen's Cakes</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
     
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div>
          <img style="margin-left:28%;" src="../images/users/<?php echo $arregloUsuario['img_perfil']; ?>" alt="Hola" >
        </div>
        
        <div class="info">
           <a href="#" class="d-block" style="color:white;margin-left:10%;width:1000px" ><?php echo $arregloUsuario['nombre']; ?></a>
        </div>
        
      
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" style="background:#95E1D3;border:none">
          <div class="input-group-append">
            <button class="btn btn-sidebar" style="background:#95E1D3;border:none">
              <i class="fas fa-search fa-fw" style="color:white"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column"  data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
          <?php
          if ($arregloUsuario['nivel']=='admin') {
          ?>
        
            <li class="nav-item" >
                <a href="./index.php" class="nav-link">
                  <i class="nav-icon fa fa-home" style="color:white"></i>
                  <p style="color:white">Inicio</p>
                </a>
             </li>
             
            <li class="nav-item">
                <a href="../index.php" target="_blank" class="nav-link">
                  <i class="nav-icon fa fa-cart-plus" style="color:white"></i>
                  <p style="color:white">Ir a la tienda</p>
                </a>
             </li>
             
             <li class="nav-item">
                <a href="./productos.php" class="nav-link">
                    <i class="nav-icon fas fa-store" style="color:white"></i>
                    <p style="color:white">Productos</p>
                </a>
             </li>
            <li class="nav-item">
                <a href="./cupones.php" class="nav-link">
                    <i class="nav-icon fas fa-store" style="color:white"></i>
                    <p style="color:white">Cupones</p>
                </a>
             </li>
            <li class="nav-item">
              <a href="./usuariosA.php" class="nav-link">
                <i class="nav-icon fa fa-users" style="color:white"></i>
                <p style="color:white">Usuarios</p>
              </a>
            </li>
            <li class="nav-item">
            <a href="./pedidosA.php" class="nav-link">
              <i class="fas fa-shipping-fast" style="color:white"></i>
              <p style="color:white">&nbsp;&nbsp;&nbsp;Pedidos</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../php/cerrar_sesion.php" class="nav-link">
              <i class="fas fa-sign-out-alt" style="color:white"></i>
              <p style="color:white">&nbsp;&nbsp;&nbsp;Salir</p>
            </a>
          </li>
          <?php
           }
          ?>
          
          <?php
          if ($arregloUsuario['nivel']=='cliente') {
          ?>
        
            <li class="nav-item">
                <a href="./index.php" class="nav-link">
                  <i class="nav-icon fa fa-home" style="color:white"></i>
                  <p style="color:white">Inicio</p>
                </a>
             </li>
             
            <li class="nav-item">
                <a href="../index.php" target="_blank" class="nav-link">
                  <i class="nav-icon fa fa-cart-plus" style="color:white"></i>
                  <p style="color:white">Ir a comprar</p>
                </a>
             </li>
             
            <li class="nav-item">
              <a href="./usuariosC.php" class="nav-link">
                <i class="nav-icon fa fa-user" style="color:white"></i>
                <p style="color:white">Mi Perfil</p>
              </a>
            </li>
            <li class="nav-item">
            <a href="./pedidosC.php" class="nav-link">
              <i class="fa fa-truck" style="color:white"></i>
              <p style="color:white">&nbsp;&nbsp;&nbsp;Mis Pedidos</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../php/cerrar_sesion.php" class="nav-link">
              <i class="fas fa-sign-out-alt" style="color:white"></i>
              <p style="color:white">&nbsp;&nbsp;&nbsp;Salir</p>
            </a>
          </li>
          <?php
           }
          ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
      
      
    </div>
    <!-- /.sidebar -->
  </aside>