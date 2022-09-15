<?php 
    session_start();
    include './conexion.php';
    $arregloUsuario = $_SESSION['datos_login']; //id_usuario
    
    if(!isset($_SESSION['carrito'])){
    header('Location: ../shop.php');
    }

    $arreglo = $_SESSION['carrito'];
    $total=0;
    
    for ($i=0; $i <count($arreglo) ; $i++) { 
      $total = $total + ($arreglo[$i]['Precio'] * $arreglo[$i]['Cantidad']);
    }

    
//$conexion -> query("select * from usuario")or die($conexion->error);

$id_usuario = $arregloUsuario['id_usuario'];

$fecha = date('Y-m-d h:m:s');
$conexion -> query("insert into ventas(id_usuario,total,fecha) values($id_usuario,$total,'$fecha')")or die($conexion->error);
$id_venta = $conexion->insert_id;

for ($i=0; $i <count($arreglo) ; $i++) { 
  $conexion -> query("insert into productos_venta(id_venta,id_producto,cantidad,precio,subtotal) 
  values(
    $id_venta,
    ".$arreglo[$i]['Id'].",
    ".$arreglo[$i]['Cantidad'].",
    ".$arreglo[$i]['Precio'].",
    ".$arreglo[$i]['Cantidad'] * $arreglo[$i]['Precio']."
  
  )")or die($conexion->error);
  
  $conexion -> query("UPDATE productos SET inventario =inventario -".$arreglo[$i]['Cantidad']." where id=".$arreglo[$i]['Id'])or die($conexion->error);

}

$conexion->query("insert into envios(company,direccion,estado,cp,id_venta) values
  (
  '".$_POST['c_companyname']."',
  '".$_POST['c_address']."',
  '".$_POST['c_state_country']."',
  '".$_POST['c_postal_zip']."',
  $id_venta
  )")or die($conexion->error);

if(isset($_POST['id_cupon'])){
    if($_POST['id_cupon']!=""){
        $conexion->query("UPDATE cupones SET status='utilizado' where id=".$_POST['id_cupon'])or die($conexion->error);
        $conexion->query("UPDATE ventas SET id_cupon=".$_POST['id_cupon']." where id=".$id_venta)or die($conexion->error);
    }
}


unset($_SESSION['carrito']);
header('Location: ../pagar.php?id_venta='.$id_venta);
?>