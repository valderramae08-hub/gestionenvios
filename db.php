<?php
$conexion = new mysqli(
    "mysql-aldrinn.alwaysdata.net",
    "aldrinn_db",
    "clase1234",
    "gestion_envios_db"
);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>