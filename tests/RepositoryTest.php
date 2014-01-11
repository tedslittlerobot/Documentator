<?php

use Mockery as m;

class RepositoryTest extends \PHPUnit_Framework_TestCase {

	public function setUp()
	{
		$this->repo = new Documentor\Repository;
	}

	public function tearDown()
	{
		m::close();
	}

	/**
	 * Assert that the renderer has been assigned properly
	 */
	public function testMake()
	{
		$this->assertInstanceOf( 'Documentor\PlainOutputRenderer', $this->repo->make('Documentor\PlainOutputRenderer') );
	}

	/**
	 * Assert that the renderer has been assigned properly
	 */
	public function testAddFail()
	{
		$this->setExpectedException('InvalidArgumentException');
		$this->assertInstanceOf( 'Documentor\PlainOutputRenderer', $this->repo->add('foo', 'Documentor\Repository', array()) );
	}

	public function testAdd()
	{
		$formatter = $this->repo->add('woop');

		$this->assertSame( $formatter, $this->repo->getFormatters()['woop'] );
	}

	public function testAccessorSet()
	{
		$formatter = $this->repo->format('woop');

		$this->assertSame( $formatter, $this->repo->getFormatters()['woop'] );
	}

	public function testAccessorGet()
	{
		$formatter = $this->repo->add( 'woop' );

		$this->assertSame( $formatter, $this->repo->format('woop') );
	}

	public function testConstructor()
	{
		$construction = array(
			'foo' => array(
				'class' => 'Documentor\PlainOutputRenderer',
				'options' => array()
			),
			'bar' => array(
				'class' => 'Documentor\PlainOutputRenderer',
				'options' => array()
			),
		);

		$this->repo = new Documentor\Repository( $construction );

		$this->assertEquals( 2, count( $this->repo->getFormatters() ) );

		foreach ($construction as $key => $value)
		{
			$this->assertInstanceOf( $value['class'], $this->repo->getFormatters()[$key] );
		}
	}

	public function testMagicCallGetter()
	{
		$formatter = $this->repo->format( 'woop' );

		$this->assertSame( $formatter, $this->repo->woop() );
	}

}
