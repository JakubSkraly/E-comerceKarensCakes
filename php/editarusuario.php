<?php 

include "conexion.php";

if (isset($_POST['nombre']) && isset($_POST['telefono'])  && isset($_POST['email']) && isset($_POST['password'])  && isset($_POST['nivel']) ){


		if ($_FILES['imagen']['name'] !='') {
			$carpeta="../images/users/";
			$nombre = $_FILES['imagen']['name'];

			$temp = explode('.', $nombre);
			$extension = end($temp);

			$nombreFinal = time().'.'.$extension;

			if ($extension == 'jpg' || $extension == 'png' ) {
				if (move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta.$nombreFinal)) {
					$fila = $conexion->query('select img_perfil from usuario where id='.$_POST['id']);
					$id = mysqli_fetch_row($fila);
					if (file_exists('../images/users/'.$id[0])){
						unlink('../images/users/'.$id[0]);
					}


					$conexion->query("update usuario set img_perfil='".$nombreFinal."'where id=".$_POST['id']);

				}
			}
		}
	
	    $conexion->query("update usuario set
		nombre='".$_POST['nombre']."',
		telefono='".$_POST['telefono']."',
		email='".$_POST['email']."',
		password='".$_POST['password']."',
		nivel='".$_POST['nivel']."'
		where id=".$_POST['id']);
	
	
	
}
header("Location: ../admin/usuariosC.php?modifi");

?>