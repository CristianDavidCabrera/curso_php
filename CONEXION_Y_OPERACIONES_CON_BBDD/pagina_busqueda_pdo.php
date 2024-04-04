<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda PDO</title>
</head>

<body>
    <?php

    $busqueda=$_GET["buscar"]; //guardamos el valor que viene del formulario de la otra página.

    try {

        /* ------------------------------- */
        /*          Conexion PDO           */
        /* ------------------------------- */

        $conexion = new PDO('mysql:host=localhost; dbname=pruebas', 'root', ''); //objeto de tipo conexión. 

        /*  Contiene el método prepare($sql), que se utiliza para las consultas preparadas. 
        Lo que hace es admitir una sentencia SQL que se le pasa por parámetro.  */
        /*  El metodo prepare($sql) devolverá un objeto llamado PDOStatement. */
        /*  El objeto PDOStatement es una tabla vitual o recordset que almacena los campos 
        que participan en la consulta además de una serie de registros almacenados en la misma.*/
        /*  El objeto PDOStatement contiene los métodos execute() y fetch()*/

        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $conexion->exec("SET CHARACTER SET utf8"); // Indicamos que nuestra base de datos trabajará con caracteres UTF8 (caracteres latinos)

        /*------------------*/
        /*   CONSULTA SQL   */
        /*------------------*/
        $sql = "SELECT NOMBREARTÍCULO, SECCIÓN, PRECIO, PAÍSDEORIGEN FROM PRODUCTOS WHERE NOMBREARTÍCULO = :n_art";

        $resultado = $conexion->prepare($sql); // En la variable resultado guardamos un objeto de tipo PDOStatement, que es lo que devuelve el método prepare() del objeto conexión.

        $resultado->execute(array(":n_art"=> $busqueda));

        while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
            echo "Nombre Artículo: " . $registro ['NOMBREARTÍCULO'] . " Sección: " . $registro['SECCIÓN'] . " Precio: " . $registro['PRECIO'] . " País de Origen: " . $registro['PAÍSDEORIGEN'] . "<br>";
        }
        $resultado->closeCursor(); //cerrar el cursor.

    } catch (Exception $e) {

        die('Error: ' . $e->getMessage());
    } finally {
        $base = null; //vaciar la memoria de la conexión
    }



    ?>
</body>

</html>