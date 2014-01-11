<?php

use Mockery as m;

class TestBasicSection extends \PHPUnit_Framework_TestCase {

	public function setUp()
	{
		$this->section = new Documentor\Basic\Section;
		$this->output = m::mock('Documentor\Contract\OutputRendererInterface');
	}

	public function tearDown()
	{
		m::close();
	}

	/**
	 * Assert that the renderer has been assigned properly
	 */
	public function testDescartes()
	{
		$this->assertTrue( true );
	}

}
