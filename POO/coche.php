<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO Conceptos Básicos</title>
</head>

<body>

    <?php

    /*-------------------------------*/
    /*  Clase. Declaración de clase  */
    /*-------------------------------*/

    class Coche
    {
        /* NOTA */
        /* Tras la actualización de PHP a la version 8, 
       los atributos de clase se crean y se inicializan en el método constructor */

/* --------------------------------------------------------------------------------------------------------------------------------- */
        /* ------------------------------------------ */
        /* Como se hacía ANTES de la versión PHP 8.0  */
        /* ------------------------------------------ */

        /*-------------------------------*/
        /* Características o Propiedades */
        /*-------------------------------*/

        /*  
        private int $ruedas; //Propiedad o atributo.
        private string $color;  //Propiedad o atributo.
        private int $motor;  //Propiedad o atributo. 
        */

        /*------------------------------------------------*/
        /* Método constructor. Inicialización de objetos  */
        /*------------------------------------------------*/

        /*  
        public function __construct()
        {
            $this->ruedas = 4; //la palabara reservada $this hace referencia a la propia clase. En este caso a la clase Coche.
            $this->color = "";
            $this->motor = 1600;
        } 
        */

/* --------------------------------------------------------------------------------------------------------------------------------- */
        /* ------------------------------------------------- */
        /*   Como se hace AHORA, desde la versión PHP 8.0    */
        /* ------------------------------------------------- */

        /*------------------------------------------------------*/
        /* Método constructor y declaracion de propiedades AHORA*/
        /*------------------------------------------------------*/

        public function __construct(
            private string $nombre = "",
            private int $ruedas = 4,
            private string $color = "",
            private int $motor = 1200
        ) {
            $this->nombre = $nombre;
            $this->ruedas = $ruedas;
            $this->color = $color;
            $this->motor = $motor;
        }

        /* ---------------------------- */
        /*  Métodos Getters y Setters.  */
        /* ---------------------------- */

        /* Los métodos Setters sirven para modificar las propiedades de los objetos o clases.  */
        /* Los métodos Getters sirven para ver u obtener las propiedades de los objetos o clases. */


        /*--------------------*/
        /*      GETTERS       */
        /*--------------------*/
        public function getNombre()
        {
            return $this->nombre;
        }
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

        /*-----------------*/
        /*     SETTERS     */
        /*-----------------*/
        public function setNombre($nombre_coche)
        {
            $this->nombre = $nombre_coche;
        }

        public function setRuedas($ruedas_coche)
        {
            $this->ruedas = $ruedas_coche;
        }
        public function setColor($color_coche)
        {
            $this->color = $color_coche;
        }
        public function setMotor($motor_coche)
        {
            $this->motor = $motor_coche;
        }


        /*-----------------------------*/
        /* Funcionalidades o Métodos.  */
        /*-----------------------------*/

        function arrancar()
        {
            echo "Estoy arrancando <br>";
        }
        function girar()
        {
            echo "Estoy girando <br>";
        }
        function frenar()
        {
            echo "Estoy frenando <br>";
        }


        public function mostrarInfo()
        {

            $info = "<h1>Información del coche:</h1>";
            $info .= "Nombre: " . $this->getNombre() . "<br>";
            $info .= "Ruedas: " . $this->getRuedas() . "<br>";
            $info .= "Color: " . $this->getColor() . "<br>";
            $info .= "Motor: " . $this->getMotor() . "<br>";

            return $info;
        }
    }


    /*----------------------------------*/
    /* Objeto. Declaración de instacia. */
    /*----------------------------------*/

    $obj_1 = new Coche("Renault", 4, "Rojo", 1600); //Instanciación e inicialización.
    $obj_2 = new Coche("Citroen", 4, "Gris", 1800);
    $obj_3 = new Coche("Peugeot", 4, "Azul", 2000);
    $obj_n = new Coche();



    echo $obj_1->mostrarInfo() . "<br>";
    echo $obj_2->mostrarInfo() . "<br>";
    echo $obj_3->mostrarInfo() . "<br>";

    echo "<br><br>";
    echo "INFO Antes del setter " . $obj_n->mostrarInfo() . "<br>";


    $obj_n->setNombre("Toyota");
    $obj_n->setRuedas(8);
    $obj_n->setColor("Negro");
    $obj_n->setMotor(2000);

    echo "<br><br>";
    echo "INFO Despues del setter " . $obj_n->mostrarInfo() . "<br>";

    ?>

</body>

</html>