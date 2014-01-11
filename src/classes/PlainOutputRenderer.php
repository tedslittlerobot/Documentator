<?php namespace Documentor;

use Documentor\Contract\OutputRendererInterface;

use Documentor\Contract\DocumentInterface;
use Documentor\Contract\ChapterInterface;
use Documentor\Contract\SectionInterface;

class PlainOutputRenderer implements OutputRendererInterface {

	/**
	 * The default Options
	 * @var array
	 */
	protected $defaultOptions = array();
	/**
	 * The document Options
	 * @var array
	 */
	protected $documentOptions = array();
	/**
	 * The chapter Options
	 * @var array
	 */
	protected $chapterOptions = array();
	/**
	 * The section Options
	 * @var array
	 */
	protected $sectionOptions = array();


	public function __construct( array $options = array() )
	{
		$this->setOptions($options);
	}

	public function setOptions( array $options )
	{
		$this->defaultOptions = array_get( $options, 'default', array() );

		$this->documentOptions = array_get( $options, 'document', array() );
		$this->chapterOptions = array_get( $options, 'chapter', array() );
		$this->sectionOptions = array_get( $options, 'section', array() );
	}

	/**
	 * @inheritdoc
	 */
	public function getDocumentOptions( DocumentInterface $content )
	{
		return array_replace_recursive($this->defaultOptions, $this->documentOptions, $content->getOptions());
	}

	/**
	 * @inheritdoc
	 */
	public function getChapterOptions( ChapterInterface $content )
	{
		return array_replace_recursive($this->defaultOptions, $this->chapterOptions, $content->getOptions());
	}

	/**
	 * @inheritdoc
	 */
	public function getSectionOptions( SectionInterface $content )
	{
		return array_replace_recursive($this->defaultOptions, $this->sectionOptions, $content->getOptions());
	}

	/**
	 * @inheritdoc
	 */
	public function renderDocument( DocumentInterface $document )
	{
		$output = '';

		$output .= $document->getTitle().PHP_EOL;
		$output .= "By {$document->getAuthor()}".PHP_EOL.PHP_EOL;
		$output .= $document->getContent().PHP_EOL.PHP_EOL.PHP_EOL;

		foreach ($document->getChapters() as $chapter)
		{
			$output .= $this->renderChapter( $chapter );
		}

		return $output;
	}

	/**
	 * @inheritdoc
	 */
	public function renderChapter( ChapterInterface $chapter, $options = array() )
	{
		$output = '';

		$output .= $chapter->getTitle().PHP_EOL.PHP_EOL;
		$output .= $chapter->getContent().PHP_EOL.PHP_EOL;

		foreach ($chapter->getSections() as $section)
		{
			$output .= $this->renderSection( $section );
		}

		return $output;
	}

	/**
	 * @inheritdoc
	 */
	public function renderSection( SectionInterface $section, $options = array() )
	{
		$output = '';

		$output .= $section->getContent();

		return $output;
	}

}
