<?php

class Elevador 
{
    public function __construct()
    {
        /*se construye el objeto elevador con las propiedades: 
        estado, direccion, piso actual, pedidos, alarmas
        */
        $this->estado = $estado;
        $this->arriba = $arriba;
        $this->abajo = $abajo;
        $this->$peticiones = array();
        $this->señales = $señales;
        $this->piso_actual = $piso_actual;
    }

    public function request($peticiones, $piso_actual, $estado, $arriba, $abajo)
    {

    }
}   

?>