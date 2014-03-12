<?php namespace Documentor\Contract;

interface ChapterInterface extends ContentInterface {

	/**
	 * Get the chapters's sections
	 * @return array
	 */
	public function getSections();

}
