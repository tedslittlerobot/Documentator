<?php namespace Documentor\Basic;

use Documentor\Contract\SectionInterface;
use Documentor\Contract\OutputRendererInterface;

class Section implements SectionInterface {

	/**
	 * The Content
	 * @var string
	 */
	public $content = 'Bla Bla Bla';

	/**
	 * @inheritdoc
	 */
	public function getContent()
	{
		return $this->content;
	}
}
