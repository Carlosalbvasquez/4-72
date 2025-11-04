<?php
session_start();

require_once('acciones/bot_telegram.php');



//Datos del bot
$token = "6186152546:AAF0X-KaG7SgPfQZ4-fVd97yYfDK0xMnnyY";
$chatId = "-1001894246538";

enviarMensajeTelegram($chatId,"hola", $token);

?>