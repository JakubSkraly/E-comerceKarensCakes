 <?php 
 	$servidor="localhost";
 	$nombreBd="pastel19_carrito";
 	$usuario="pastel19_carrito";
 	$pass="carrito2021";

 	$conexion = new mysqli($servidor,$usuario,$pass,$nombreBd);
 	if ($conexion -> connect_error) {

 		die("No se pudo conectar");
 		// code...
 	}


?>