<?php namespace Documentor\Basic;

use Documentor\Contract\ChapterInterface;
use Documentor\Contract\OutputRendererInterface;

class Chapter implements ChapterInterface {

	/**
	 * The title
	 * @var string
	 */
	public $title = 'Title.';

	/**
	 * Sections
	 * @var array
	 */
	public $sections = array();

	/**
	 * @inheritdoc
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * @inheritdoc
	 */
	public function getContent( OutputRendererInterface $renderer )
	{
		$output = '';

		foreach ($this->sections as $section)
		{
			$output .= $renderer->renderSection( $section->getContent( $renderer ) );
		}

		return $output;
	}

}
