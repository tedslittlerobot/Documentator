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

	public function getChapters()
	{
		return $this->chapters;
	}

	public function getContent()
	{
		return $this->intro;
	}

}
