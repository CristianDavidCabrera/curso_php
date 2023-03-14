<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constantes</title>
</head>
<body>

<?php 

    define("AUTOR", "Cristian", false); /* Definición de constantes propias:
                                    Para definir una constante en PHP se utiliza la función define. 
                                    La función define tiene 3 argumentos, los dos primeros son obligatorios. 
                                    - El primero es el nombre de la constante, lo escribiremos siempre en mayúsculas, es de tipo string por lo que debe ir entre comillas "" .
                                    - El segundo es el valor de la constante que puede ser numérico (int, float,...) o de tipo texto (string)
                                    - El tercero es un valor booleano, true=1 o false=0, y no es obligatorio. Se usa para admitir o no el case sensitive. 
                                      El uso del true en esta función está obsoleto, no se usa.
                                    Las cosntantes siempre tienen un ámbito global.
                                */
    echo "El autor es " . AUTOR . ". <br>";

    echo "Esta instrucción está en la línea " . __LINE__ . ". <br>";
    echo "Estamos trabajando con este fichero " . __FILE__ . "<br>";
    echo "La versión de PHP que tenemos instalada en este momento es: ". PHP_VERSION . "<br>";
    

?>



    
</body>
</html>