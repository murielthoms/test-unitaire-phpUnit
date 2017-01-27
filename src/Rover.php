<?php
class Rover{
	private $x;
	private $y;
	private $direction;
	private $tabCoor = ['n','e','s','w'];
	private $coorX = [0, 1 ,0 ,-1];
	private $coorY = [-1,0,1,0];


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
		$index = array_search($this->direction, $this->tabCoor);
		$this->x = ($this->x)+($this->coorX[$index]);
		$this->y = ($this->y)+($this->coorY[$index]);
	}
	// public function backward(){
	// 	$index = array_search($this->direction, $this->tabCoor);
	// 	$this->x = ($this->x)+($this->coorX[$index]);
	// 	$this->y = ($this->y)+($this->coorY[$index]);
	// }

	public function left(){
		$index = array_search($this->direction, $this->tabCoor);
		$index--;
		if($index < 0){
			$index = 3;
		}
		$this->direction = $this->tabCoor[$index];
	}
	
	public function right(){
		$index = array_search($this->direction,$this->tabCoor);
		$index++;
		if( $index > 3){
			$index = 0;	
		}
		$this->direction = $this->tabCoor[$index];
	}	

}
?>
