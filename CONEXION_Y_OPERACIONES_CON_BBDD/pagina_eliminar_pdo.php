<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar PDO</title>
</head>

<body>
    <?php

    /* --------------------------------------------------------------- */
    /*          Captura de variable código artículo del formulario     */
    /* ----------------------------------------------------------------*/

    $busqueda_cart= $_POST["c_art"];

    try {

        /* ------------------------------- */
        /*          Conexion PDO           */
        /* ------------------------------- */

        $conexion = new PDO('mysql:host=localhost; dbname=pruebas', 'root', ''); 

        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $conexion->exec("SET CHARACTER SET utf8"); 

        
        /*------------------*/
        /*   ELIMINAR SQL   */
        /*------------------*/

        $sql="DELETE FROM PRODUCTOS WHERE CÓDIGOARTÍCULO=:c_art";
        $resultado = $conexion->prepare($sql);
        $resultado->execute(array(":c_art"=>$busqueda_cart));
    
    
        echo "Registro eliminado";
        $resultado->closeCursor(); 

    } catch (Exception $e) {

        die('Error: ' . $e->getMessage());

    } finally {
        $base = null; 
    }



    ?>
</body>

</html>