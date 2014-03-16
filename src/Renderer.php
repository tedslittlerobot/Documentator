<?php namespace Documentor;

use Documentor\Contract\OutputRendererInterface;

use Documentor\Contract\ContentInterface;
use Documentor\Contract\DocumentInterface;
use Documentor\Contract\ChapterInterface;
use Documentor\Contract\SectionInterface;

abstract class Renderer implements OutputRendererInterface {

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
	 * [getDocumentOptions description]
	 * @param  DocumentInterface $content
	 * @return mixed
	 */
	public function getDocumentOptions( DocumentInterface $content )
	{
		return array_replace_recursive( $this->defaultOptions, $this->documentOptions, $content->getOptions() );
	}

	/**
	 * [getDocumentOptions description]
	 * @param  DocumentInterface $content
	 * @return mixed
	 */
	public function getChapterOptions( ChapterInterface $content )
	{
		return array_replace_recursive( $this->defaultOptions, $this->chapterOptions, $content->getOptions() );
	}

	/**
	 * [getDocumentOptions description]
	 * @param  DocumentInterface $content
	 * @return mixed
	 */
	public function getSectionOptions( SectionInterface $content )
	{
		return array_replace_recursive( $this->defaultOptions, $this->sectionOptions, $content->getOptions() );
	}

	/**
	 * @inheritdoc
	 */
	public function render( ContentInterface $content)
	{
		if ( $content instanceof DocumentInterface )
		{
			return $this->renderDocument($content);
		}
		if ( $content instanceof ChapterInterface )
		{
			return $this->renderChapter($content);
		}
		if ( $content instanceof SectionInterface )
		{
			return $this->renderSection($content);
		}
	}

}
