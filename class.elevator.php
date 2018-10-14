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
	
}

?>