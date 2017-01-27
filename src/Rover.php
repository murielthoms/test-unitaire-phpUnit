<?php
class Rover{
	private $x;
	private $y;
	private $direction;
	private $tabCoor = ['n','e','s','w'];

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
		if($this->direction === 'n'){
			$this->y = ($this->y)-1;
		}else if($this->direction === 's'){
			$this->y= ($this->y)+ 1;
		}else if($this->direction==='e'){
			$this->x=($this->x)+1;
		}else if($this->direction==='w'){
			$this->x=($this->x)-1;
		}
	}
	public function backward(){
		if($this->direction === 'n'){
			$this->y = ($this->y)+1;
		}else if($this->direction === 's'){
			$this->y= ($this->y)-1;
		}else if($this->direction === 'e'){
			$this->x = ($this->x) -1;	
		}else if($this->direction === 'w'){
			$this->x =($this->x)+1;
		}
	}

	public function left(){
		if($this->direction === 'n'){
			$this->direction='w';
		}else if($this->direction ==='w'){
			$this->direction = 's';
		}else if($this->direction === 's'){
			$this->direction = 'e';
		}else if($this->direction === 'e'){
			$this->direction='n';
		}
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
