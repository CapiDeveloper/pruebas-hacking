<?php

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-02-01 at 06:23:13.
 */
class Mysql_Connection_Test extends PHPUnit_Framework_TestCase
{

	/**
	 * @var Query_Mysql_Driver
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	public function testClass()
	{
		$this->getMockBuilder('\PHPixie\DB\Mysql\Connection')
				->disableOriginalConstructor()
				->getMock();
	}
	
}
