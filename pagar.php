<script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>
<script>
    window.Mercadopago.setPublishableKey("YOUR_PUBLIC_KEY");
</script>



<?php
session_start();
include './php/conexion.php';
if(!isset($_GET['id_venta'])){
  header("Location: ./");
}
$arregloUsuario = $_SESSION['datos_login'];

$datos = $conexion->query("select
  ventas.*,
  usuario.nombre,usuario.telefono,usuario.email
  from ventas
  inner join usuario on ventas.id_usuario = usuario.id
  where ventas.id=".$_GET['id_venta'])or die($conexion ->error);
$datosUsuario = mysqli_fetch_row($datos);

$datos2 = $conexion->query("select * from envios where id_venta=".$_GET['id_venta'])or die($conexion ->error);
$datosEnvio = mysqli_fetch_row($datos2);

$datos3 = $conexion->query("select productos_venta.*,
  productos.nombre as nombre_producto, productos.imagen
  from productos_venta inner join productos on productos_venta.id_producto = productos.id where id_venta=".$_GET['id_venta'])or die($conexion ->error);

$total=$datosUsuario[2];
$descuento = "0";
$banderadescuento=false;

if($datosUsuario[4]!=0){
    $banderadescuento=true;
    $cupon = $conexion->query("select * from cupones where id=".$datosUsuario[4]);
    $filaCupon=mysqli_fetch_row($cupon);
    if($filaCupon[3]=="moneda"){
      $total=$total - $filaCupon[4];
      $descuento="S/. ".$filaCupon[4];
    }else{
        $total= $total -($total*($filaCupon[4]/100));
        $descuento=$filaCupon[4]." %";
    }
    
}

?>

<?php


/*MERCADO PAGO*/
// SDK de Mercado Pago

require __DIR__ . '/vendor/autoload.php';
// Agrega credenciales
MercadoPago\SDK::setAccessToken('TEST-5082815271379902-062009-3cbd41c5530a9549dcc6824359d3069f-778468897');

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

/*RETORNO */
$preference->back_urls = array(
    "success" => "https://pasteleria-karencakes.com/thankyou.php?id_venta=".$_GET['id_venta']."&metodo=mercado_pago",
    "failure" => "http://www.tu-sitio/failure",
    "pending" => "https://pasteleria-karencakes.com/thankyou.php?id_venta=".$_GET['id_venta']."&metodo=mercado_pago"
);
$preference->auto_return = "approved";

// Crea un ítem en la preferencia
$datos=array();

if($banderadescuento){
     while($f=mysqli_fetch_array($datos3)){
    $item = new MercadoPago\Item();
    $item->title = $f['nombre_producto']." con descuento";
    $item->quantity = $f['cantidad'];
    $item->unit_price = $total;
    $datos[]=$item;
      }
}else{
  while($f=mysqli_fetch_array($datos3)){
    $item = new MercadoPago\Item();
    $item->title = $f['nombre_producto'];
    $item->quantity = $f['cantidad'];
    $item->unit_price = $f['precio'];
    $datos[]=$item;
}  
}



$preference->items = $datos;
$preference->save();

/*
curl -X POST  -H "Content-Type: application/json" -H "Authorization: Bearer TEST-7640655189968027-062007-d94d997872ad4843152ab9ec9fc53e48-733572382" "https://api.mercadopago.com/users/test_user" -d "{'site_id':'MPE'}"
*/
/*
VENDEDOR:{"id":778468897,"nickname":"TESTWWRU34WA","password":"qatest1617","site_status":"active","email":"test_user_70368927@testuser.com"} 
CLIENTE: {"id":778465559,"nickname":"TETE7675884","password":"qatest8972","site_status":"active","email":"test_user_5927017@testuser.com"}*/

/* */

?>
<script src="https://sdk.mercadopago.com/js/v2"></script>


<!-- api de cambio de moneda -->
<?php
// Datos
$token = 'apis-token-1.aTSI1U7KEuT-6bbbCguH-4Y8TI6KS73N';
$ruc = '2021-05-04';

// Iniciar llamada a API
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.apis.net.pe/v1/tipo-cambio-sunat?fecha=' . $fecha,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 2,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Referer: https://apis.net.pe/tipo-de-cambio-sunat-api',
    'Authorization: Bearer ' . $token
  ),
));

$response = curl_exec($curl);

curl_close($curl);
// Datos listos para usar
$tipoCambioSunat = json_decode($response);
//var_dump($tipoCambioSunat) //imprime todo el json
//print $tipoCambioSunat->{'venta'}; // imprime solo el cambio a la venta
?>
<!-- -->


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Elige Método de Pago</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
        <link rel="stylesheet" href="fonts/icomoon/style.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <script src="https://www.paypal.com/sdk/js?client-id=AbWxBgUSi3ERl9l06d9ddpUaBzp0Ao0ydj83t90VskZRawKezV5MxGdXRwL-dz0DUURNNO0MsTgZeSgG&currency=USD"> // Replace YOUR_CLIENT_ID with your sandbox client ID
    </script>

        
        <div class="site-wrap">
  <?php include("./layouts/header.php"); ?> 

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">Elige el método de pago</h2>
          </div>
          <div class="col-md-7">

            <form action="#" method="post">
              
              <div class="p-3 p-lg-5 border">

                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">Venta:</label>
                  </div>
                  <div>
                      <label class="text-black">#<?php echo $_GET['id_venta']; ?></label>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">Nombre:</label>
                  </div>
                  <div>
                      <label class="text-black"><?php echo $datosUsuario[5]; ?></label>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">Email:</label>
                  </div>
                  <div>
                      <label class="text-black"><?php echo $datosUsuario[7]; ?></label>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">Telefono:</label>
                  </div>
                  <div>
                      <label class="text-black"><?php echo $datosUsuario[6]; ?></label>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">Compañia:</label>
                  </div>
                  <div>
                      <label class="text-black"><?php echo $datosEnvio[1]; ?></label>
                  </div>
                </div>
                
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">Direccion:      </label>
                  </div>
                  <div>
                      <label class="text-black"><?php echo $datosEnvio[2]; ?></label>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">Distrito:       </label>
                  </div>
                  <div>
                      <label class="text-black"><?php echo $datosEnvio[3]; ?></label>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">Codigo Postal:      </label>
                  </div>
                  <div>
                      <label class="text-black"><?php echo $datosEnvio[4]; ?></label>
                  </div>
                </div>
                
              </div>
            </form>
          </div>
          <div class="col-md-5 ml-auto">
            
              <h4 class="h1">Total:<?php echo $datosUsuario[2]; ?></h4>
              <h5>Descuento: <?php echo $descuento; ?></h5>
              <h5>Total Final: <?php echo $total; ?></h5>
              <?php
              $usd=round($total/($tipoCambioSunat->{'venta'}),2);
              ?>
            
             <div id="paypal-button-container"></div>
             <form action="../thankyou.php?id_venta=<?php echo $_GET['id_venta'] ?>&metodo" method="POST">
                <img src="../images/mercadop.jpg" width="50%" height="10%">
                <script
                src="https://www.mercadopago.com.pe/integrations/v1/web-payment-checkout.js"
                data-preference-id="<?php echo $preference->id; ?>">
                </script>
             </form>

          </div>
        </div>
      </div>
    </div>

    <?php include("./layouts/footer.php"); ?> 
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
  
<!-- script paypal -->
       <script>
      paypal.Buttons({
        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: '<?php echo $usd; ?>'
              }
            }]
          });
        },
        onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
              console.log(details);
              if(details.status=="COMPLETED"){
                  alert('Transaction completed by ' + details.payer.name.given_name);
                  location.href="./thankyou.php?id_venta=<?php echo $_GET['id_venta']; ?>&metodo=paypal"
              }
            
          });
        }
      }).render('#paypal-button-container'); // Display payment options on your web page
    </script>
<!-- -->
    </body>
</html>