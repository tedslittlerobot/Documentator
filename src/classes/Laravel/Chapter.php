<?php namespace Documentor\Laravel;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Documentor\Contract\ChapterInterface;

class Chapter extends Eloquent implements ChapterInterface {

	public function sections()
	{
		return $this->hasMany('Documentor\\Laravel\\Section');
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
	public function getSections()
	{
		return $this->sections;
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
