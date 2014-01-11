<?php namespace Documentor\Laravel;

use Illuminate\Support\ServiceProvider;

use Documentor\Laravel\Repository;
use Documentor\PlainOutputRenderer;

class DocumentorServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('documentor/documentor');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('Documentor\Contract\OutputRendererInterface', new PlainOutputRenderer);
		$this->app->bindShared('Documentor\Repository', function()
		{
			return new Repository;
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
