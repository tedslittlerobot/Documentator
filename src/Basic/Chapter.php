<?php namespace Documentor\Basic;

use Documentor\Contract\ChapterInterface;
use Documentor\Contract\OutputRendererInterface;

class Chapter implements ChapterInterface {

	/**
	 * The Title
	 * @var string
	 */
	public $title = 'Title.';

	/**
	 * The Content
	 * @var string
	 */
	public $content = '  Intro';

	/**
	 * The Intro Text
	 * @var string
	 */
	public $prologue = '';

	/**
	 * The Outro Text
	 * @var string
	 */
	public $epilogue = '';

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

	/**
	 * @inheritdoc
	 */
	public function getPrologue()
	{
		return $this->prologue;
	}

	/**
	 * @inheritdoc
	 */
	public function getEpilogue()
	{
		return $this->epilogue;
	}

}
