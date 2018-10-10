<?php

class Elevador 
{
    private $direccion;
    private $inicio;
    private $destino;
    private $peticiones = array();
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

    public function setBeginning()
    {
        //"idle","maintenance","busy" estados del elevador
        $estado = "idle";
        $piso_actual = 1;
    }

    public function completeRequest($peticiones)
    {
        //Peticiones obtiene su piso de origen y destino
    }

    public function request($peticiones, $piso_actual, $origen, $destino, $maxPisos)
    {
        
    }
}   

?>