<?php

use Mockery as m;

class BasicDocumentTest extends \PHPUnit_Framework_TestCase {

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
	 * Assert title getter
	 */
	public function testTitle()
	{
		$this->assertEquals( 'Title', $this->document->getTitle() );

		$this->document->title = 'woop';

		$this->assertEquals( 'woop', $this->document->getTitle() );
	}

	/**
	 * Assert author getter
	 */
	public function testAuthor()
	{
		$this->assertEquals( 'Jeremy Christmas', $this->document->getAuthor() );

		$this->document->author = 'Steven Hawkins';

		$this->assertEquals( 'Steven Hawkins', $this->document->getAuthor() );
	}

	/**
	 * Assert Chapter Get
	 */
	public function testGetChapters()
	{
		$this->document->chapters = array(1, 2, 3);
		$this->assertEquals( array(1, 2, 3), $this->document->getChapters() );
	}

	/**
	 * Assert Content Get
	 */
	public function testGetContent()
	{
		$this->assertEquals( 'A Document.', $this->document->getContent() );

		$this->document->intro = 'woop';

		$this->assertEquals( 'woop', $this->document->getContent() );
	}

}
