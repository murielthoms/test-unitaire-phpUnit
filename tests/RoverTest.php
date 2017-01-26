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
		$this->assertEquals($rover->getX(), 1);
		$this->assertEquals($rover->getY(), 0);

	}
	public function testRoverToMoveSouth(){
		$rover = new Rover(1,1,'s');
		$rover->forward();
		$this->assertEquals($rover->getDirection(),'s');
		$this->assertEquals($rover->getX(),1);
		$this->assertEquals($rover->getY(),2);
	}
	public function testRoverToMoveEast(){
		$rover = new Rover (3,5,'e');
		$rover->forward();
		$this->assertEquals($rover->getDirection(),'e');
		$this->assertEquals($rover->getX(),4);
		$this->assertEquals($rover->getY(),5);

	}





}
?>