<?php namespace Documentor\Contract;

interface ContentInterface {

	/**
	 * Get the content title
	 * @return string
	 */
	public function getTitle();

	/**
	 * Get the content
	 * @return string
	 */
	public function getContent();

	/**
	 * Get the content
	 * @return string
	 */
	public function getOptions();

	/**
	 * Get the prologue copy for the content
	 * @return string
	 */
	public function getPrologue();

	/**
	 * Get the prologue copy for the content
	 * @return string
	 */
	public function getEpilogue();

}
