<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar PDO</title>
</head>

<body>
    <?php

    /* ------------------------------------------------------ */
    /*          Captura de variables del formulario           */
    /* -------------------------------------------------------*/

    $busqueda_cart= $_POST["c_art"];
    $busqueda_seccion=$_POST["seccion"];
    $busqueda_nart=$_POST["n_art"];
    $busqueda_precio=$_POST["precio"];
    $busqueda_fecha=$_POST["fecha"];
    $busqueda_importado=$_POST["importado"];    
    $busqueda_porig=$_POST["p_orig"]; 


    
    try {

        /* ------------------------------- */
        /*          Conexion PDO           */
        /* ------------------------------- */

        $conexion = new PDO('mysql:host=localhost; dbname=pruebas', 'root', ''); 

        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $conexion->exec("SET CHARACTER SET utf8"); 

        
        /*------------------*/
        /*   INSERTAR SQL   */
        /*------------------*/
        $sql="INSERT INTO PRODUCTOS (CÓDIGOARTÍCULO, SECCIÓN, NOMBREARTÍCULO, PRECIO, FECHA, IMPORTADO, PAÍSDEORIGEN) VALUES (:c_art, :seccion, :n_art, :precio, :fecha, :importado, :p_orig)";

        $resultado = $conexion->prepare($sql);

        $resultado->execute(array(":c_art"=>$busqueda_cart, ":seccion"=>$busqueda_seccion, ":n_art"=>$busqueda_nart, ":precio"=>$busqueda_precio, ":fecha"=>$busqueda_fecha, ":importado"=>$busqueda_importado, ":p_orig"=>$busqueda_porig ));

    
        echo "Registro insertado";
        $resultado->closeCursor(); 

    } catch (Exception $e) {

        die('Error: ' . $e->getMessage());

    } finally {
        $base = null; 
    }



    ?>
</body>

</html>