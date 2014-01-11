<?php namespace Documentor;

use Documentor\Contract\DocumentInterface;
use Documentor\Contract\OutputRendererInterface;

class Documentor {

	/**
	 * The document
	 * @var Documentor\Contract\DocumentInterface
	 */
	protected $document;

	/**
	 * The output renderer
	 * @var Documentor\Contract\OutputRendererInterface
	 */
	protected $output;

	public function __construct() {}

	/**
	 * Set the output renderer
	 * @param  OutputRendererInterface $output
	 */
	public function setRenderer( OutputRendererInterface $output )
	{
		$this->output = $output;
		return $this;
	}

	/**
	 * Get the output renderer
	 * @return OutputRendererInterface
	 */
	public function getRenderer()
	{
		return $this->output;
	}

	/**
	 * Render the given document
	 * @param  DocumentInterface $document
	 * @return string
	 */
	public function render( DocumentInterface $document )
	{
		return $this->output->renderDocument( $document );
	}

}
