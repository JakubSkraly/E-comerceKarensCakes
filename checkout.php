<?php

session_start();
if(!isset($_SESSION['carrito'])) {
 header('Location: ./index.php');
}else{
    if (!isset($_SESSION['datos_login'])){
    header("Location: ../login.php");

    }
}
$arreglo = $_SESSION['carrito'];
$arregloUsuario = $_SESSION['datos_login'];

?>

<!DOCTYPE html>
<html lang="en">
  <?php include("./layouts/head.php");?>
  
  <body>
      
          
      
      
    
    
    
  <div class="site-wrap">
    <?php include("./layouts/header.php"); ?> 
      <!------------------------------------------------------------------------- -->

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Catalogo</a> <span class="mx-2 mb-0">/</span>
           <strong class="text-black">Compra</strong></div>
        </div>
      </div>
    </div>
    
    
    <!--------- -->
    
    <form action="./php/insertarpedido.php" method="post">
    <div class="site-section">
      <div class="container">

        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">Detalles de Compra</h2>
            <div class="p-3 p-lg-5 border">

              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_companyname" class="text-black">Nombre de la Compañia</label>
                  <input type="text" class="form-control" id="c_companyname" name="c_companyname">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_address" class="text-black">Dirección<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Dirección" required>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_state_country" class="text-black">Distrito<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_state_country" name="c_state_country" placeholder="Distrito" required>
                </div>
                <div class="col-md-6">
                  <label for="c_postal_zip" class="text-black">Codigo Postal<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip" placeholder="Codigo Postal" required>
                </div>
              </div>

            </div>
          </div>
          
        <div class="col-md-6">
            
          <!-- cupon -->
          <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Codigo de cupon</h2>
                <div class="p-3 p-lg-5 border">
                  
                  <label for="c_code" class="text-black mb-3">Ingrese su codigo de cupon si tiene uno</label>
                  <div class="input-group w-75" id="formCupon">
                    <input type="text" class="form-control" id="c_code" placeholder="Codigo de cupon" aria-label="Coupon Code" aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary btn-sm" type="button" id="button-addon2">Aplicar</button>
                    </div>
                    </div>
                    <h2 id="error" style="display:none" class="text-danger" >Cupon no valido</h2>
                 <div class="input-group w-75" id="datosCupon" style="display:none">
                 <h2 id="textoCupon" class="text-success" ></h2>
                 </div>
                 </div>
                 <input type="hidden" name="id_cupon" id="id_cupon">
                 

                 
              </div>
            </div>
          <!-- cupon -->
          

          
            
            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Tu Orden</h2>
                <div class="p-3 p-lg-5 border">
                  <table class="table site-block-order-table mb-5">
                    <thead>
                      <th>Producto</th>
                      <th>Total</th>
                    </thead>
                    <tbody>
                    <?php
                    $total=0;
                    for ($i=0; $i <count($arreglo) ; $i++) { 
                      $total = $total + ($arreglo[$i]['Precio'] * $arreglo[$i]['Cantidad']);

                    ?>
                      <tr>
                        <td><?php echo $arreglo[$i]['Nombre']; ?></td>
                        <td>S/. <?php echo number_format($arreglo[$i]['Precio'] *$arreglo[$i]['Cantidad'],2,'.',''); ?></td>
                      </tr>
                      
                     
                     <?php }?>
                     <tr>
                        <td>Orden Total</td>
                        <td>S/. <?php echo number_format($total,2,'.',''); ?></td>
                      </tr>
                      <tr>
                          <td class="text-success">
                              Descuento
                          </td>
                          <td id="tdTotal">0</td>
                      </tr>
                      <tr>
                          <td><b>Total Final</b></td>
                          <td id="tdTotalFinal" data-total="<?php echo $total ?>">S/. <?php echo number_format($total,2,'.',''); ?></td>
                      </tr>
                    </tbody>
                  </table>

                  <div class="form-group">
                    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='thankyou.php'">Realizar Pedido</button>
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- </form> -->
      </div>
    </div>
    </form>

    <?php include("./layouts/footer.php"); ?> 
  </div>

   <?php include("./layouts/script.php"); ?>
   
   <script>
   $(document).ready(function(){
    $("#button-addon2").click(function(){
        var codigo = $("#c_code").val();
        $.ajax({
            url:"./php/validarcodigo.php",
            data:{
                codigo:codigo
            },
            method:'POST'
        }).done(function(respuesta){
            if(respuesta==" error" || respuesta==" codigo no valido"){
                $("#error").show();
                $("#id_cupon").val("");
            }else{
                var arreglo=JSON.parse(respuesta);
                if(arreglo.tipo=="moneda"){
                    $("#textoCupon").text("Usted tiene un descuento de "+arreglo.valor+" soles.");
                    $("#tdTotal").text("S/. "+arreglo.valor);
                    var total = parseFloat($("#tdTotalFinal").data('total') - arreglo.valor);
                    $("#tdTotalFinal").text("S/. "+total.toFixed(2));
                }else{
                    $("#textoCupon").text("Usted tiene un descuento de "+arreglo.valor+" % en su compra");
                    $("#tdTotal").text(arreglo.valor+"  %");
                    var total = parseFloat($("#tdTotalFinal").data('total')) - ((arreglo.valor/100) * parseFloat($("#tdTotalFinal").data('total')));
                    $("#tdTotalFinal").text("S/. "+total.toFixed(2));
                }
                $("#formCupon").hide();
                $("#datosCupon").show();
                $("#id_cupon").val(arreglo.id);
            }
        });
    });
    $("#c_code").keyup(function(){
        $("#error").hide();
    });
   });
   </script>
   
    
  </body>
</html>