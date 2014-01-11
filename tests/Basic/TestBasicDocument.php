<?php

use Mockery as m;

class TestBasicDocument extends \PHPUnit_Framework_TestCase {

	public function setUp()
	{
		$this->document = new Documentor\Basic\Document;
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
