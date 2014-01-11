<?php namespace Documentor\Contract;

use Documentor\Contract\OutputRendererInterface;

interface PrintableInterface {

	/**
	 * Get the content
	 * @return string
	 */
	public function getContent();

}
