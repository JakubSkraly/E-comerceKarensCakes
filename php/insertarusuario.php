<?php
    //session_start();
    include "conexion.php";



    if ( $_POST['nombre']=="" || $_POST['telefono']==""  || $_POST['email']=="" || $_POST['password']=="" ){
       header("Location: ../registrar.php?complete=Complete Todos los Campos");
    }else{
        
        $re=$conexion->query("select id,email from usuario where email='".$_POST['email']."' ")or die($conexion->error);
        
        if (mysqli_num_rows($re)>0) {
            header("Location: ../registrar.php?error=Correo Existente");
        }else{
          $conexion -> query("insert into usuario (nombre,telefono,email,password,img_perfil,nivel) 
          values(
          '".$_POST['nombre']."',
          '".$_POST['telefono']."',
          '".$_POST['email']."',
          '".$_POST['password']."',
          'default.jpg',
          'cliente'
          )
          ")or die($conexion->error);
          
        header("Location: ../login.php?registro=Registro Exitoso");  
        }
    
    }

?>

