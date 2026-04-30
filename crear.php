<?php
include("db.php");

$codigo = $_POST['codigo'];
$descripcion = $_POST['descripcion'];
$destino = $_POST['destino'];

$sql = "INSERT INTO envios (codigo, descripcion, destino)
        VALUES ('$codigo', '$descripcion', '$destino')";

$conexion->query($sql);

header("Location: index.php");
?>