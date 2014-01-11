<?php namespace Documentor\Basic;

use Documentor\Contract\ChapterInterface;
use Documentor\Contract\OutputRendererInterface;

class Chapter implements ChapterInterface {

	/**
	 * The title
	 * @var string
	 */
	public $title = 'Title.';

	public $content = '  Intro';

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
	public function getContent()
	{
		return $this->content;
	}

}
