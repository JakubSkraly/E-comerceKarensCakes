<?php 
session_start();
include "./conexion.php";

if (isset($_POST['email']) && isset($_POST['password']) ) {
    $resultado = $conexion -> query("select * from usuario where email='".$_POST['email']."' and password='". $_POST['password']."'")or die($conexion ->error);
    if (mysqli_num_rows($resultado)>0) {
        $datos_usuarios = mysqli_fetch_row($resultado);
        
        $id_usuario =$datos_usuarios[0];
        $nombre = $datos_usuarios[1];
        $telefono =$datos_usuarios[2];
        $email =$datos_usuarios[3];
        $password =$datos_usuarios[4];
        $img_perfil =$datos_usuarios[5];
        $nivel =$datos_usuarios[6];
        
        

        $_SESSION['datos_login']= array(
            
            'id_usuario'=>$id_usuario,
            'nombre'=>$nombre,
            'telefono'=>$telefono,
            'email'=>$email,
            'password'=>$password,
            'img_perfil'=>$img_perfil,
            'nivel'=>$nivel

        );
        header("Location: ../admin/");
    }else{
        header("Location: ../login.php?error=Credenciales incorrectas");
    }
}else {
    header("../login.php");
}
?>
