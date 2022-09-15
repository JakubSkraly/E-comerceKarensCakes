<?php 

include "../php/conexion.php";

$fila = $conexion->query('select img_perfil from usuario where id='.$_POST['id']);
$id = mysqli_fetch_row($fila);
if (file_exists('../images/user/'.$id[0])){
	unlink('../images/users/'.$id[0]);
}

$conexion->query('delete from usuario where id='.$_POST['id']);
echo 'listo';

?>