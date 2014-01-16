<?php namespace Documentor\Laravel;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Documentor\Contract\DocumentInterface;

class Document extends Eloquent implements DocumentInterface {

	public function chapters()
	{
		return $this->hasMany('Documentor\\Laravel\\Chapter');
	}

	/// DocumentInterface ///

	/**
	 * @inheritdoc
	 */
	public function getAuthor()
	{
		return '';
	}

	/**
	 * @inheritdoc
	 */
	public function getChapters()
	{
		return $this->chapters;
	}

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
