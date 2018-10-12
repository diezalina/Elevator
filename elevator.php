<?php
include('class.elevator.php');

$origen = $_GET['origen'];
$destino = $_GET['destino'];
$origen2 = $_GET['origen2'];
$destino2 = $_GET['destino2'];

function request($peticiones, $origen, $destino)
{
    if(sizeof($peticiones) == 0) {
        array_push($peticiones[0],['origen' => $origen, 'destino' => $destino, 'direccion' => 'down', 'id' => 0]);
        var_dump($peticiones[0]);
    }

    for($i = 0; $i <= sizeof($peticiones); $i++) {
        //down
        if($origen > $destino) {
            array_push($peticiones[$i], ['origen' => $origen, 'destino' => $destino, 'direccion' => 'down', 'id' => $i]);
            var_dump($peticiones);
        }
        //up
        else {
            array_push($peticiones[$i], ['origen' => $origen, 'destino' => $destino, 'direccion' => 'up', 'id' => $i]);
            var_dump($peticiones);
        }
    }
    printtest($peticiones);
}

?>