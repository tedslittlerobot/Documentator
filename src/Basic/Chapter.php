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
	 * Render Options
	 * @var string
	 */
	public $options = array();

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

	/**
	 * @inheritdoc
	 */
	public function getSections()
	{
		return array();
	}

	/**
	 * @inheritdoc
	 */
	public function getOptions()
	{
		return $this->options;
	}

}
