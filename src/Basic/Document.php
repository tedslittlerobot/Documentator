<?php namespace Documentor\Basic;

use Documentor\Contract\DocumentInterface;
use Documentor\Contract\OutputRendererInterface;


class Document implements DocumentInterface {

	/**
	 * The title
	 * @var string
	 */
	public $title = 'Title';

	/**
	 * The author
	 * @var string
	 */
	public $author = 'Jeremy Christmas';

	/**
	 * The author
	 * @var string
	 */
	public $intro = 'A Document.';

	/**
	 * Chapters
	 * @var array
	 */
	public $chapters = array();

	/**
	 * Render Options
	 * @var string
	 */
	public $options = array();

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
	 * @inheritdoc
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * @inheritdoc
	 */
	public function getAuthor()
	{
		return $this->author;
	}

	/**
	 * @inheritdoc
	 */
	public function getChapters()
	{
		return $this->chapters;
	}

	/**
	 * @inheritdoc
	 */
	public function getContent()
	{
		return $this->intro;
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
