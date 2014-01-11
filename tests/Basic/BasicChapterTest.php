<?php

use Mockery as m;

class BasicChapterTest extends \PHPUnit_Framework_TestCase {

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
	 * Assert title getter
	 */
	public function testTitle()
	{
		$this->assertEquals( 'Title.', $this->chapter->getTitle() );

		$this->chapter->title = 'woop';

		$this->assertEquals( 'woop', $this->chapter->getTitle() );
	}

	/**
	 * Test recursive section renders
	 *
	 * @TODO mock sections and test them
	 */
	public function testGetContent()
	{
		$this->assertEquals( '', $this->chapter->getContent( $this->output ) );
	}
}
