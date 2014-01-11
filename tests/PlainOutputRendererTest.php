<?php

use Mockery as m;

class PlainOutputRendererTest extends \PHPUnit_Framework_TestCase {

	public function setUp()
	{
		$this->output = new Documentor\PlainOutputRenderer;
	}

	public function tearDown()
	{
		m::close();
	}

	public function testRenderDocument()
	{
		$document = m::mock('Documentor\Contract\DocumentInterface');
		$document->shouldReceive('getTitle')->once()->andReturn('The Title');
		$document->shouldReceive('getAuthor')->once()->andReturn('Jeremy Kyle');
		$document->shouldReceive('getChapters')->once()->andReturn(array());

		$this->assertEquals( 'The Title'.PHP_EOL.'By Jeremy Kyle'.PHP_EOL, $this->output->renderDocument( $document ) );
	}

	public function testRenderChapter()
	{
		$chapter = m::mock('Documentor\Contract\ChapterInterface');

		// $this->assertEquals( '', $this->output->renderChapter( $chapter ) );
	}

	public function testRenderSection()
	{
		$section = m::mock('Documentor\Contract\SectionInterface');

		// $this->assertEquals( '', $this->output->renderSection( $section ) );
	}


	protected function recursiveOptions( $sector, $content )
	{
		$override = array('three' => 'henry');
		$content->shouldReceive('getOptions')->andReturn($override);

		$method = 'get' . ucfirst($sector) . 'Options';

		$this->assertEquals( array_replace_recursive(array(), $override), $this->output->$method( $content ) );

		$one = array('one' => 1, 'two' => 2);
		$two = array('one' => 333, 'three' => 777);
		$three = array('woop' => 'forty', 'two' => 'peter');

			$this->output->setOptions(array( 'default' => $one ));
			$this->assertEquals( array_replace_recursive($one, $override), $this->output->$method( $content ) );

			$this->output->setOptions(array( 'default' => $one, $sector => $two ));
			$this->assertEquals( array_replace_recursive($one, $two, $override), $this->output->$method( $content ) );

			$this->output->setOptions(array( 'default' => $three, $sector => $one ));
			$this->assertEquals( array_replace_recursive($three, $one, $override), $this->output->$method( $content ) );
	}

	public function testGetDocumentOptions()
	{
		$content = m::mock('Documentor\Contract\DocumentInterface');

		$this->recursiveOptions( 'document', $content );
	}

	public function testGetChapterOptions()
	{
		$content = m::mock('Documentor\Contract\ChapterInterface');

		$this->recursiveOptions( 'chapter', $content );
	}

	public function testGetSectionOptions()
	{
		$content = m::mock('Documentor\Contract\SectionInterface');

		$this->recursiveOptions( 'section', $content );
	}

}
