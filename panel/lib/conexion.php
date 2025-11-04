<?php

$servername = "mysql.railway.internal";
$database   = "railway";
$username   = "root";
$password   = "faAobEDCVJpekaSQHMefltVBnNHOfbZU";
$port       = 3306;

$path = "";

function conectar() {
    $conn = mysqli_connect(
        $GLOBALS["servername"],
        $GLOBALS["username"],
        $GLOBALS["password"],
        $GLOBALS["database"],
        $GLOBALS["port"]
    );

    if (!$conn) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    mysqli_set_charset($conn, "utf8mb4");
    return $conn;
}

function sentencia($conn, $sql) {
    $rst = mysqli_query($conn, $sql);
    return $rst;
}

function contarfilas($rst) {
    return mysqli_num_rows($rst);
}

function traerdatos($rst) {
    return mysqli_fetch_assoc($rst);
}

function desconectar($conn) {
    mysqli_close($conn);
}

?>
