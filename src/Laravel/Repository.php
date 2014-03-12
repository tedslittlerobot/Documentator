<?php namespace Documentor\Laravel;

use Illuminate\Support\Facades\App;

class Repository extends \Documentor\Repository {

	/**
	 * @inhericdoc
	 */
	public function make( $class )
	{
		return App::make( $class );
	}

}
