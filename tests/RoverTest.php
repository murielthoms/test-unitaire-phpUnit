<?php
require __DIR__ . '/../vendor/autoload.php';
use PHPUnit\Framework\TestCase;

class RoverTest extends TestCase {

	public function testInitLocationToBe1(){
		$rover = new Rover(1,1,'s');
		$this->assertEquals($rover->getX(), 1);	
		$this->assertEquals($rover->getY(),1);
		$this->assertEquals($rover->getDirection(),'s');
	}

	public function testRoverToMoveNorth(){
		$rover = new Rover(1,1,'n');
		$rover->forward();
		$this->assertEquals($rover->getDirection(), 'n');
		$this->assertEquals($rover->getX(), +1);
		$this->assertEquals($rover->getY(), 1);

	}






}
?>