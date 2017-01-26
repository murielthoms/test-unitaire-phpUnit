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
		$this->y;
	}
	
	public function getDirection(){
		$this->direction;
	}
	

}

?>