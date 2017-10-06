<?php namespace Rubzat\Scaffolding;

use Illuminate\Support\ServiceProvider;
use Rubzat\Scaffolding\Commands\ScaffoldCommand;

class ScaffoldingServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{

	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->app['scaffolding.scaffold'] = $this->app->share(function($app)
        {
            return new ScaffoldCommand();
        });

        $this->commands('scaffolding.scaffold');
	}

}
