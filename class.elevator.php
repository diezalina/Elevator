<?php

class Elevador 
{
    private $direccion;
    private $origen;
    private $destino;
    function __construct()
    {
        /*se construye el objeto elevador con las propiedades: 
        estado, direccion, piso actual, pedidos, alarmas
        */
        $this->origen = $origen;
        $this->destino = $destino;
        if($origen>$destino) {
            $this->direccion="down";
        } else {
            $this->direccion="up";
        }
    }

    function getBeginning()
    {
        //"idle","maintenance","busy" estados del elevador
        return $this -> $origen;
    }

    function getDirection()
    {
        return $this -> $direccion;
    }

    function getDestination()
    {
        return $this -> $destino;
    }

}   

?>