<?php
class Rover{
	private $x;
	private $y;
	private $direction;

	public function __construct($horizontal, $vertical, $direction){
		$this->x = $horizontal;
		$this->y = $vertical;
		$this->direction= $direction;

	}

	public function getX(){
		return $this->x;
	}
	
	public function getY(){
		return $this->y;
	}
	
	public function getDirection(){
		return $this->direction;
	}
	public function forward(){
		// $this->x = $this->x + 1;
		

	}
	

}

?>