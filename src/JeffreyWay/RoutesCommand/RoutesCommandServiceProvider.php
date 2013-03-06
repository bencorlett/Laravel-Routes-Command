<?php namespace JeffreyWay\RoutesCommand;

use Illuminate\Support\ServiceProvider;

class RoutesCommandServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('jeffrey-way/routes-command');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['command.routes'] = $this->app->share(function($app)
		{
			return new RoutesCommand($app['router']->getRoutes()->all());
		});

		$this->commands('command.routes');
	}

}
