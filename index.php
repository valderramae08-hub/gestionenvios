<?php include("db.php"); ?>

<h2>Crear Envío</h2>
<form method="POST" action="crear.php">
    Código: <input type="text" name="codigo"><br>
    Descripción: <input type="text" name="descripcion"><br>
    Destino: <input type="text" name="destino"><br>
    <button type="submit">Guardar</button>
</form>

<h2>Lista de Envíos</h2>

<table border="1">
<tr>
    <th>ID</th>
    <th>Código</th>
    <th>Descripción</th>
    <th>Destino</th>
    <th>Acciones</th>
</tr>

<?php
$resultado = $conexion->query("SELECT * FROM envios");

while($row = $resultado->fetch_assoc()){
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['codigo']}</td>
        <td>{$row['descripcion']}</td>
        <td>{$row['destino']}</td>
        <td>
            <a href='editar.php?id={$row['id']}'>Editar</a>
            <a href='eliminar.php?id={$row['id']}'>Eliminar</a>
        </td>
    </tr>";
}
?>
</table>