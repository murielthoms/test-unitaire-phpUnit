<?php
require __DIR__ . '/../vendor/autoload.php';
use PHPUnit\Framework\TestCase;

class RoverTest extends TestCase {

	public function testXtoBe1(){
		$rover = new Rover(0,0,'s');
		$this->assertEquals($rover->getX(), 0);		
	}






}
?>