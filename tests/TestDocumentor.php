<?php

use Mockery as m;

class TestDocumentor extends \PHPUnit_Framework_TestCase {

	public function setUp()
	{
		$this->documentor = new Documentor\Documentor;
		$this->document = m::mock('Documentor\Contract\DocumentInterface');
		$this->output = m::mock('Documentor\Contract\OutputRendererInterface');

		$this->documentor->setRenderer( $this->output );
	}

	public function tearDown()
	{
		m::close();
	}

	/**
	 * Assert that the renderer has been assigned properly
	 */
	public function testRendererAssignment()
	{
		$this->assertSame( $this->documentor->getRenderer(), $this->output );
	}

	/**
	 * Assert that the render methods are called
	 */
	public function testRender()
	{
		$this->document->shouldReceive('getContent')->once()->with( $this->output )->andReturn('foo');
		$this->output->shouldReceive('renderDocument')->once()->with('foo')->andReturn('woop');

		$this->assertEquals( 'woop', $this->documentor->render( $this->document ) );
	}

}