<?php namespace Documentor\Basic;

use Documentor\Contract\SectionInterface;
use Documentor\Contract\OutputRendererInterface;

class Section implements SectionInterface {

	/**
	 * The section title
	 * @var string
	 */
	public $title = 'Section Title';

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

	/**
	 * @inheritdoc
	 */
	public function getTitle()
	{
		return $this->title;
	}

}
