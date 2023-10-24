<?php

    class Compra_vehiculo
    {

        private $precio_base;

        private static $descuento = 0; //inicializo variable estática a 0. Si no llamamos al método estático descuento_gobierno no se actualiza.

        function __construct($gama)
        {
            if ($gama == "urbano") {
                $this->precio_base = 10000;
            } else if ($gama == "compacto") {
                $this->precio_base = 20000;
            } else if ($gama == "berlina") {
                $this->precio_base = 30000;
            }
        }

        static function descuento_gobierno(){
            if(date("m-d-y")>"10-30-23"){     // el descuento entrará en vigor a partir del día 31 de Octubre del 2023.
                self::$descuento = 4500; 
            } else{
                self::$descuento = 0;
            }
        }

        function climatizador()
        {
            $this->precio_base += 2000;
        }

        function navegador_gps()
        {
            $this->precio_base += 2500;
        }

        function tapiceria_cuero($color)
        {
            if ($color == "blanco") {
                $this->precio_base += 3000;
            } else if ($color == "beige") {
                $this->precio_base += 3500;
            } else {
                $this->precio_base += 5000;
            }
        }

        function precio_final()
        {
            /* return  ("El precio total es de " . $this->precio_base . " euros. <br>"); */
            $valor_final= $this->precio_base - self::$descuento;
            return  ("El precio total es de " . $valor_final . " euros. <br>");
        }
    }

?>
