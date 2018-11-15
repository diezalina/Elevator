<?php
    include ('class.elevator.php');
    
    $mantenimiento1=$_GET['maintenance1'];
    $mantenimiento2=$_GET['maintenance2'];
    $direccion=$_GET['direction'];
    $elevador=$_GET['elevador'];
    $arraySube=array();
    $arrayBaja=array();
    $arrayUlti=array();
    $arrayFinal=array();
    $array=array();
	   
	foreach($_GET['data'] as $inputData) {
		$array[] = new Elevador($inputData['petition'],$inputData['destiny']);
	}
	print_r($_GET['data']);

	foreach($array as $i => $arrayData) {
        if ($arrayData->getBeginning()==$mantenimiento1 || $arrayData->getPath()==$mantenimiento1) {
            unset($array[$i]);
        } elseif ($arrayData->getBeginning()==$mantenimiento2 || $arrayData->getPath()==$mantenimiento2) {
            unset($array[$i]);
        }
	}
	
    $array=array_values($array);
	$b=0; //petitions that go down
   	$s=0; //petitions that go up
   	$u=0; //last array of petitions
   	$dir=0; //direction
   	if ($direccion=="stand") {
	   	for ($i=0; $i <sizeof($array); $i++) { 
	   		if ($elevador==$array[$i]->getBeginning()) {
	   		    if ($array[$i]->getPath()>$array[$i]->getBeginning()) {
	                $direccion="up";
                    break;
                } else {
                    $direccion="down";
                    break;
                }
            } else {
                $direccion="up";
            }
        }
    } 
  if ($direccion=="down") {
	for ($i=0; $i <sizeof($array); $i++) { 
   		if ($elevador<$array[$i]->getBeginning() && $direccion==$array[$i]->getDirection()) {
   			$arrayUlti[$u]=$array[$i];  					
   			unset($array[$i]);
   			$array=array_values($array);
   			$u++;
   		}
   		if ($array[$i]->getBeginning()<$array[$i]->getPath()) {
   			$arraySube[$s]=$array[$i];
            $s++;
   		}
   		if ($array[$i]->getBeginning()>$array[$i]->getPath()) {
   			$arrayBaja[$b]=$array[$i];
   			$b++;
   		}  		
   	}
   	if (empty($arrayBaja)==false) {
   		Elevador::convertirArray($arrayBaja);
   		Elevador::ordenarDescendente($arrayBaja);
   	}
   	if (empty($arraySube)==false) {	
   		Elevador::convertirArray($arraySube);
   		Elevador::ordenarAscendente($arraySube);
    }
   	if (empty($arrayUlti)==false){  	
   		Elevador::convertirArray($arrayUlti);
   		Elevador::ordenarDescendente($arrayUlti);
   	}
   	$arrayFinal=array_merge($arrayBaja,$arraySube);
   	$arrayFinal=array_merge($arrayFinal,$arrayUlti);	
   	echo "sube";
   	echo "<pre>", print_r($arraySube), "</pre>";
   	echo "baja";
   	echo "<pre>", print_r($arrayBaja), "</pre>";
   	echo "ulti";
   	echo "<pre>", print_r($arrayUlti), "</pre>";
   	echo "Peticiones ordenadas";
   	echo "<pre>", print_r($arrayFinal), "</pre>";
   }
   if ($direccion=="up") {
   		for ($i=0; $i <sizeof($array); $i++) { 
   		if ($elevador>$array[$i]->getBeginning()&&$direccion==$array[$i]->getDirection()) {
   			$arrayUlti[$u]=$array[$i];			
   			unset($array[$i]);
   			$array=array_values($array);
   			$u++;
   		}
   		if ($array[$i]->getBeginning()<$array[$i]->getPath()) {
   			$arraySube[$s]=$array[$i];
            $s++;
   		}
   		if ($array[$i]->getBeginning()>$array[$i]->getPath()) {
   			$arrayBaja[$b]=$array[$i];
   			$b++;
   		}
   	}
   	if (empty($arrayBaja)==false) {
		Elevador::convertirArray($arrayBaja);
		Elevador::ordenarDescendente($arrayBaja);
   	}	
   	if (empty($arraySube)==false) {
		Elevador::convertirArray($arraySube);
		Elevador::ordenarAscendente($arraySube);   
   	}
   	if (empty($arrayUlti)==false) {
		Elevador::convertirArray($arrayUlti);
		Elevador::ordenarAscendente($arrayUlti);   
    }
   	$arrayFinal=array_merge($arraySube,$arrayBaja);
   	$arrayFinal=array_merge($arrayFinal,$arrayUlti);	
   	echo "sube";
   	echo "<pre>", print_r($arraySube), "</pre>";
   	echo "baja";
   	echo "<pre>", print_r($arrayBaja), "</pre>";
   	echo "ulti";
   	echo "<pre>", print_r($arrayUlti), "</pre>";
   	echo "Peticiones ordenadas";
   	echo "<pre>", print_r($arrayFinal), "</pre>";
   }
   
?>