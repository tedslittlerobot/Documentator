<?php namespace Documentor\Contract;

use Documentor\Contract\DocumentInterface;
use Documentor\Contract\ChapterInterface;
use Documentor\Contract\SectionInterface;

interface OutputRendererInterface {

	/// RENDER ///

	/**
	 * Render the document
	 * @param  string $content
	 * @param  array  $options
	 * @return string
	 */
	public function renderDocument( DocumentInterface $content, $options = array() );

	/**
	 * Render the chapter
	 * @param  string $content
	 * @param  array  $options
	 * @return string
	 */
	public function renderChapter( ChapterInterface $content, $options = array() );

	/**
	 * Render the section
	 * @param  string $content
	 * @param  array  $options
	 * @return string
	 */
	public function renderSection( SectionInterface $content, $options = array() );


	///  OPTIONS  ///

	/**
	 * Get the render options for the document
	 * @param  Documentor\Contract\DocumentInterface  $document
	 * @return array
	 */
	public function getDocumentOptions( DocumentInterface $content );

	/**
	 * Get the render options for the chapter
	 * @param  Documentor\Contract\ChapterInterface  $chapter
	 * @return array
	 */
	public function getChapterOptions( ChapterInterface $content );

	/**
	 * Get the render options for the section
	 * @param  Documentor\Contract\SectionInterface  $section
	 * @return array
	 */
	public function getSectionOptions( SectionInterface $content );

}
