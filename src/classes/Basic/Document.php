<?php namespace Documentor\Basic;

use Documentor\Contract\DocumentInterface;
use Documentor\Contract\OutputRendererInterface;


class Document implements DocumentInterface {

	/**
	 * The title
	 * @var string
	 */
	public $title = 'Title.';

	/**
	 * The author
	 * @var string
	 */
	public $author = 'Jeremy Christmas';

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

	/**
	 * @inheritdoc
	 */
	public function getContent( OutputRendererInterface $renderer )
	{
		$output = '';

		foreach ($this->chapters as $chapter)
		{
			$output .= $renderer->renderChapter( $chapter->getContent( $renderer ) );
		}

		return $output;
	}

}
