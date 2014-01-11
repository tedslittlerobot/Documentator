<?php namespace Documentor\Contract;

interface OutputRendererInterface {


	/// RENDER ///

	/**
	 * Render the document
	 * @param  string $content
	 * @param  array  $options
	 * @return string
	 */
	public function renderDocument( $content, $options = array() );

	/**
	 * Render the chapter
	 * @param  string $content
	 * @param  array  $options
	 * @return string
	 */
	public function renderChapter( $content, $options = array() );

	/**
	 * Render the section
	 * @param  string $content
	 * @param  array  $options
	 * @return string
	 */
	public function renderSection( $content, $options = array() );


	///  OPTIONS  ///

	/**
	 * Get the render options for the document
	 * @param  array  $options   optional overrides
	 * @return array
	 */
	public function getDocumentOptions( $options = array() );

	/**
	 * Get the render options for the chapter
	 * @param  array  $options   optional overrides
	 * @return array
	 */
	public function getChapterOptions( $options = array() );

	/**
	 * Get the render options for the section
	 * @param  array  $options   optional overrides
	 * @return array
	 */
	public function getSectionOptions( $options = array() );

}
