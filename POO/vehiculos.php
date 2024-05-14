<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO Herencia clases extendidas</title>
</head>

<body>

    <?php

    //Creación de clase coche.
    class Coche
    {

        /*---------------------------*/
        /*    Método constructor.    */
        /*---------------------------*/

        public function __construct(
            protected int $ruedas = 4,
            protected string $color = "Blanco",
            protected int $motor = 1200
        ) {
            $this->ruedas = $ruedas;
            $this->color = $color;
            $this->motor = $motor;
        }

        /*------------------------------*/
        /*  Métodos Getters y Setters.  */
        /*------------------------------*/

        //Los métodos Setters sirven para modificar las propiedades de los objetos o clases. 
        //Los métodos Getters sirven para ver u obtener las propiedades de los objetos o clases.

        public function getRuedas()
        {
            return $this->ruedas;
        }

        public function getColor()
        {
            return $this->color;
        }

        public function getMotor()
        {
            return $this->motor;
        }

        /*--------------------------*/
        /*   Métodos o funciones    */
        /*--------------------------*/

        function arrancar()
        {
            echo "Está arrancando ";
        }

        function girar()
        {
            echo "Está girando ";
        }

        function frenar()
        {
            echo "Está frenando ";
        }

        function setColor($color_coche, $nombre_coche)
        {
            $this->color = $color_coche;
            echo "El color del " . $nombre_coche . " es " . $this->color . "<br>";
        }
    }


    /* ------------------------------------------------------------------------------------ */


    //Creación de clase camion. Hereda de la clase coche.
    class Camion extends Coche
    {

        /*---------------------------*/
        /*    Método constructor.    */
        /*---------------------------*/

        public function __construct(
            protected int $ruedas = 8,
            protected string $color = "Gris",
            protected int $motor = 3200
        ) {
            $this->ruedas = $ruedas;
            $this->color = $color;
            $this->motor = $motor;
        }


        /* Sobreescritura de método, se hace para adaptar el método heredado de la superclase o clase padre a la subclase o clase hija. */
        function setColor($color_camion, $nombre_camion) //establece color.
        {
            $this->color = $color_camion;
            echo "El color del " . $nombre_camion . " es " . $color_camion . "<br>";
        }

        /* Herencia de un solo método.*/
        function arrancar()
        {
            parent::arrancar(); // Ejecuta el método arrancar() de la clase padre, es decir la clase coche.
            echo " el Pegaso. Camión arrancado."; // Añadimos más instrucciones que se ejecutarán después del método de la clase padre.
        }
    }



    ?>
</body>

</html>