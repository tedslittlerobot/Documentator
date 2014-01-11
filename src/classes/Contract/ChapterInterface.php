<?php namespace Documentor\Contract;

interface ChapterInterface extends PrintableInterface {

	/**
	 * Get an array of SectionInterface's
	 * @return array
	 */
	public function getChapters();

}
