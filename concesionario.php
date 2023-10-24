<?php

class compra_vehiculo
{

    private $precio_base;

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
}




?>