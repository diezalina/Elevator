<?php
    include ('class.elevator.php');
    
    $peticion=$_GET['petition'];
    $destino=$_GET['destiny'];
    $peticion2=$_GET['petition2'];
    $destino2=$_GET['destiny2'];
    $peticion3=$_GET['petition3'];
    $destino3=$_GET['destiny3'];
    $peticion4=$_GET['petition4'];
    $destino4=$_GET['destiny4'];
    $mantenimiento1=$_GET['maintenance1'];
    $mantenimiento2=$_GET['maintenance2'];
    $direccion=$_GET['direction'];
    $elevador=$_GET['elevador'];
    $arraySube=array();
    $arrayBaja=array();
    $arrayUlti=array();
    $arrayE=array();
    $arrayFinal=array();
    $array=array();
    $array[0]=new Elevador($peticion,$destino);
    $array[1]=new Elevador($peticion2,$destino2);
    $array[2]=new Elevador($peticion3,$destino3);
   	$array[3]=new Elevador($peticion4,$destino4);



    for ($i=0; $i <sizeof($array) ; $i++) { 
      if ($array[$i]->getBeginning()==$mantenimiento1 || $array[$i]->getPath()==$mantenimiento1) {
        unset($array[$i]);
      }
      elseif ($array[$i]->getBeginning()==$mantenimiento2 || $array[$i]->getPath()==$mantenimiento2) {
        unset($array[$i]);
      }
    }
    $array=array_values($array);
	$b=0; //petitions that go down
   	$s=0; //petitions that go up
   	$u=0; //last array of petitions
   	$dir=0; //direction
   	if ($direccion=="stand") {
	   	for ($i=0; $i <sizeof($array) ; $i++) { 
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
	for ($i=0; $i <sizeof($array) ; $i++) { 
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
   		$arrayBaja=convertirArray($arrayBaja);
   		$arrayBaja=ordenarDescendente($arrayBaja);
   	}
   	if (empty($arrayBaja)==false) {	
   		$arraySube=convertirArray($arraySube);
   		$arraySube=ordenarAscendente($arraySube);
    }
   	if (empty($arrayUlti)==false){  	
   		$arrayUlti=convertirArray($arrayUlti);
   		$arrayUlti=ordenarDescendente($arrayUlti);
   	}
   	$arrayFinal=array_merge($arrayBaja,$arraySube);
   	$arrayFinal=array_merge($arrayFinal,$arrayUlti);	
   	echo "sube";
   	echo "<pre>", print_r($arraySube), "</pre>";
   	echo "baja";
   	echo "<pre>", print_r($arrayBaja), "</pre>";
   	echo "ulti";
   	echo "<pre>", print_r($arrayUlti), "</pre>";
   	echo "final";
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
   		$arrayBaja=convertirArray($arrayBaja);
    	$arrayBaja=ordenarDescendente($arrayBaja);	
   	}	
   	if (empty($arraySube)==false) {
   		$arraySube=convertirArray($arraySube);
   		$arraySube=ordenarAscendente($arraySube);
   	}
   	if (empty($arrayUlti)==false) {
   		$arrayUlti=convertirArray($arrayUlti);
   		$arrayUlti=ordenarAscendente($arrayUlti);
    }
   	$arrayFinal=array_merge($arraySube,$arrayBaja);
   	$arrayFinal=array_merge($arrayFinal,$arrayUlti);	
   	echo "sube";
   	echo "<pre>", print_r($arraySube), "</pre>";
   	echo "baja";
   	echo "<pre>", print_r($arrayBaja), "</pre>";
   	echo "ulti";
   	echo "<pre>", print_r($arrayUlti), "</pre>";
   	echo "final";
   	echo "<pre>", print_r($arrayFinal), "</pre>";
   }

   	function convertirArray(array $array)
   	{
   		$a=0;
   		$arrayUl=array();
   		for ($i=0; $i < sizeof($array); $i++) { 
			$arrayUl[$i]=$array[$i]->getBeginning();		
		}
		for ($i=sizeof($arrayUl); $i < (sizeof($array)*2); $i++) { 
			$arrayUl[$i]=$array[$a]->getPath();
			$a++;						
		}
		return $arrayUl;		
   	}

   	function ordenarDescendente(array $array)
   	{
   		//echo "tamaño as".sizeof($array);
   		for ($i=0; $i <sizeof($array)-1 ; $i++) { 
   	   		for ($j=$i+1; $j <sizeof($array) ; $j++) { 
   	   			if ($array[$i]<$array[$j]) {
   	   				$temp=$array[$j];
   	   				$array[$j]=$array[$i];
   	   				$array[$i]=$temp;
   	   			}
   	   		}
   	   	}
   	   	return $array;
	   }
	   
   	function ordenarAscendente(array $array)
   	{
   		//echo "tamaño as".sizeof($array);
   		for ($i=0; $i <sizeof($array)-1 ; $i++) { 
   	   		for ($j=$i+1; $j <sizeof($array) ; $j++) { 
   	   			if ($array[$i]>$array[$j]) {
   	   				$temp=$array[$j];
   	   				$array[$j]=$array[$i];
   	   				$array[$i]=$temp;
   	   			}
   	   		}
   	   	}
   	   	return $array;
   	}
   
   
?>