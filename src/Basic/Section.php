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
	 * Render Options
	 * @var string
	 */
	public $options = array();

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
