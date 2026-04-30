<?php
include("db.php");

$id = $_GET['id'];

if($_POST){
    $codigo = $_POST['codigo'];
    $descripcion = $_POST['descripcion'];
    $destino = $_POST['destino'];

    $conexion->query("UPDATE envios 
        SET codigo='$codigo', descripcion='$descripcion', destino='$destino'
        WHERE id=$id");

    header("Location: index.php");
}

$resultado = $conexion->query("SELECT * FROM envios WHERE id=$id");
$row = $resultado->fetch_assoc();
?>

<form method="POST">
    Código: <input type="text" name="codigo" value="<?php echo $row['codigo']; ?>"><br>
    Descripción: <input type="text" name="descripcion" value="<?php echo $row['descripcion']; ?>"><br>
    Destino: <input type="text" name="destino" value="<?php echo $row['destino']; ?>"><br>
    <button>Actualizar</button>
</form>