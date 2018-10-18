<?php

class Elevador
{
	
	private $direccion;
	private $inicio;
	private $destino;
	
	function __construct($inicio,$destino)
	{
		$this->inicio=$inicio;
		$this->destino=$destino;
		if ($inicio>$destino) {
			$this->direccion="down";
		}
		else {
			$this->direccion="up";
		}
	}

	public function getDirection()
	{
		return $this->direccion;
	}
	
	public function getBeginning()
	{
		return $this->inicio;
	}
	
	public function getPath()
	{
		return $this->destino;
	}
	
	public function convertirArray(array $array)
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
}

?>