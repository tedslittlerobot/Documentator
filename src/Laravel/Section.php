<?php namespace Documentor\Laravel;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Documentor\Contract\SectionInterface;

class Section extends Eloquent implements SectionInterface {

	/// ContentInterface ///

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
	public function getContent()
	{
		return '';
	}

}
