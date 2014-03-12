<?php namespace Documentor\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Documentor\Laravel\Repository
 */
class Document extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'Documentor\Repository'; }

}
