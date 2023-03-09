<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables y comentarios</title>
</head>

<body>
    <?php

        $nombre = "Cristian"; /* Definición de variables en PHP: 
                        - Siempre empieza por el simbolo del dolar ($), 
                        - Se cierra con punto y coma al final (;) 
                        - Se utilizan caracteres normales, sin acentos, ni simbolos extraños.
                        */
        $edad = 38;
        print "El nombre del usuario es " . $nombre . "<br>"; //Para concatenar se utiliza el punto (.) y se deja un espacio antes y depués del punto.//
        print "La edad del usuario es $edad <br>";
        print 'La edad del usuario es $edad <br>'; //Las comillas simples arrojan el literal, es decir, imprimen en pantalla exactamente lo escrito en el código.//
        echo "El nombre es " . $nombre . " y tiene " . $edad . " años <br>";
        echo $nombre,$edad; /*  echo te permite imprimir variables y expresiones sin tener que concatenar, 
                                unicamente hay que separar por coma (,) dichas variables o expresiones
                                En programas complejos de PHP se suele utilizar echo y no print, es más rápido. 
                            */
    ?>
</body>

</html>