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

	public function testRoverForwardNorth(){
		$rover = new Rover(1,1,'n');
		$rover->forward();
		$this->assertEquals($rover->getDirection(), 'n');
		$this->assertEquals($rover->getX(), 1);
		$this->assertEquals($rover->getY(), 0);

	}
	public function testRoverForwardSouth(){
		$rover = new Rover(1,1,'s');
		$rover->forward();
		$this->assertEquals($rover->getDirection(),'s');
		$this->assertEquals($rover->getX(),1);
		$this->assertEquals($rover->getY(),2);
	}
	public function testRoverForwardEast(){
		$rover = new Rover (3,5,'e');
		$rover->forward();
		$this->assertEquals($rover->getDirection(),'e');
		$this->assertEquals($rover->getX(),4);
		$this->assertEquals($rover->getY(),5);

	}

	public function testRoverToMoveWest(){
		$rover = new Rover (1, 1, 'w');
		$rover->forward();
		$this->assertEquals($rover->getDirection(), 'w');
		$this->assertEquals($rover->getX(),0);
		$this->assertEquals($rover->getY(), 1);
	}
	public function testRoverBackWardSouth(){
		$rover = new Rover(1, 1, 's');
		$rover->backward();
		$this->assertEquals($rover->getDirection(),'s');
		$this->assertEquals($rover->getX(),1);
		$this->assertEquals($rover->getY(),0);
	}

	public function testRoverBackwardNorth(){
		$rover = new Rover (1, 1, 'n');
		$rover->backward();
		$this->assertEquals($rover->getDirection(),'n');
		$this->assertEquals($rover->getX(),1);
		$this->assertEquals($rover->getY(),2);

	}
	public function testRoverBackwardEast(){
		$rover = new Rover (1, 1, 'e');
		$rover->backward();
		$this->assertEquals($rover->getDirection(),'e');
		$this->assertEquals($rover->getX(),0);
		$this->assertEquals($rover->getY(),1);

	}
}