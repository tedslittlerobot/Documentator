<?php namespace Documentor;

use Documentor\Contract\OutputRendererInterface;

class Repository {

	/**
	 * The cached formatters
	 * @var array
	 */
	protected $formatters = array();


	public function __construct( $options = array() )
	{
		foreach ($options as $key => $value)
		{
			$this->add( $key, $value['class'], $value['options'] );
		}
	}

	/**
	 * Get all formatters
	 * @return array
	 */
	public function getFormatters()
	{
		return $this->formatters;
	}

	/**
	 * Get the given formatter
	 * @param  string $name
	 * @param  string $class
	 * @param  array $options
	 * @return OutputRendererInterface
	 */
	public function format( $name, $class = null, $options = null )
	{
		if ( isset( $this->formatters[ $name ] ) )
		{
			return $this->formatters[ $name ];
		}

		return $this->add( $name, $class, $options );
	}

	/**
	 * Create a new formatter and pass add it to the cached array
	 * @param  string $name
	 * @param  string $class
	 * @param  array  $options
	 */
	public function add( $name, $class = null, $options = null )
	{
		$formatter = $this->make( $class ?: 'Documentor\\PlainOutputRenderer' );

		if ( ! $formatter instanceof OutputRendererInterface )
		{
			throw new \InvalidArgumentException('noooooo!');
		}

		$formatter->setOptions( $options ?: array() );

		return $this->formatters[$name] = $formatter;
	}

	/**
	 * Construct a new formatter
	 * @param  string $class
	 * @param  array $options
	 * @return OutputRendererInterface
	 */
	public function make( $class )
	{
		return new $class;
	}

	/**
	 * Attempt to get a formatter
	 * @param  string $name      the name
	 * @param  array $arguments  [ string, array ]
	 * @return OutputRendererInterface
	 */
	public function __call($name, $arguments)
	{
		return $this->format($name, array_get($arguments, 0), array_get($arguments, 1) );
	}

}
