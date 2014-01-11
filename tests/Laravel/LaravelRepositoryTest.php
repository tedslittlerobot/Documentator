<?php

use Mockery as m;

use Illuminate\Support\Facades\App;

class LaravelRepositoryTest extends \PHPUnit_Framework_TestCase {

	public function setUp()
	{
		$this->repo = new Documentor\Laravel\Repository;
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
		App::shouldReceive('make')->with('foo')->andReturn('woop');

		$this->assertEquals( 'woop', $this->repo->make('foo') );
	}

}
