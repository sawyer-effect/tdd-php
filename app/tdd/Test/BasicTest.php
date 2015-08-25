<?php

namespace tdd\Test;

class BasicTest extends \PHPUnit_Framework_TestCase
{
	public function testTrueIsTrue()
	{
		$true = true;
		$this->assertTrue($true);
 	}

 	public function testFalseIsFalse()
 	{
    	$false = false;
    	$this->assertFalse($false);
	}
}
