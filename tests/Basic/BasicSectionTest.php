<?php

use Mockery as m;

class BasicSectionTest extends \PHPUnit_Framework_TestCase {

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
	 * Test recursive section renders
	 */
	public function testGetContent()
	{
		$this->assertEquals( 'Bla Bla Bla', $this->section->getContent() );

		$this->section->content = 'woop';

		$this->assertEquals( 'woop', $this->section->getContent() );
	}

	public function testGetTitle()
	{
		$this->assertEquals( 'Section Title', $this->section->getTitle() );

		$this->section->title = 'woop';

		$this->assertEquals( 'woop', $this->section->getTitle() );
	}

}
