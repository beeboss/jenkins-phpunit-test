<?php


require 'GumballMachine.php';

class migTest extends PHPUnit_Framework_TestCase
{
    public $gumballMachineInstance;

    public function setUp()
    {
        $this->gumballMachineInstance = new GumballMachine();
    }

    public function turnWheel(){
         //...
	 $this->gumballMachineInstance->setGumballs(1000);

	 // turn the wheel a number of times...
	 $this->gumballMachineInstance->turnWheel();
	 $this->gumballMachineInstance->turnWheel();
	 $this->gumballMachineInstance->turnWheel();

         //....
	 $this->assertEquals(997, $this->gumballMachineInstance->getGumballs());
    }
}
