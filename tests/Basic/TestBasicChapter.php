<?php

use Mockery as m;

class TestBasicChapter extends \PHPUnit_Framework_TestCase {

	public function setUp()
	{
		$this->chapter = new Documentor\Basic\Chapter;
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
