<?php 
session_start();
include "../php/conexion.php";
/*
$fila = $conexion->query('select imagen from ventas where id='.$_POST['id_venta']);
$id = mysqli_fetch_row($fila);

if (file_exists('../images/'.$id[0])){
	unlink('../images/'.$id[0]);
}*/

$conexion->query('delete from ventas where id='.$_POST['id_venta']);
echo 'listo';

?>