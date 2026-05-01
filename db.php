<?php
$conexion = new mysqli(
    "mysql-aldrinn.alwaysdata.net",
    "aldrinn",
    "clase1234",
    "aldrinn_gestionusuarios"
);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>