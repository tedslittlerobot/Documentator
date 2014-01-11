<?php namespace Documentor\Contract;

interface DocumentInterface extends ContentInterface {

	/**
	 * Get the document Title
	 * @return string
	 */
	public function getTitle();

	/**
	 * Get the document Author
	 * @return string
	 */
	public function getAuthor();

	/**
	 * Get the document's chapters
	 * @return string
	 */
	public function getChapters();

}
