<?php namespace Documentor\Contract;

interface DocumentInterface {

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

}
