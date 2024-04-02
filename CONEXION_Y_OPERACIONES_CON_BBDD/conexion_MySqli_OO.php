<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion BBDD</title>
</head>

<body>
    <?php

    $conexion = new mysqli("localhost", "root", "", "pruebas");
    if ($conexion->connect_errno) {
        echo "Falló la conexión con la base de datos" . $conexion->connect_errno;
    }

    $conexion->set_charset("utf8");

    $sql = "SELECT * FROM PRODUCTOS";

    $resultados = $conexion->query($sql);

    if ($conexion->errno) {
        die($conexion->error);
    }

    while ($fila = $resultados->fetch_assoc()) {

        echo "<table><tr><td>";
        echo $fila['CÓDIGOARTÍCULO'] . "</td><td> ";
        echo $fila['NOMBREARTÍCULO'] . "</td><td> ";
        echo $fila['SECCIÓN'] . "</td><td>";
        echo $fila['IMPORTADO'] . "</td><td>";
        echo $fila['PRECIO'] . "</td><td>";
        echo $fila['PAÍSDEORIGEN'] . "</td><td></tr></table>";
        echo "<br>";
        echo "<br>";
    }

    $conexion->close();

    ?>
</body>

</html>