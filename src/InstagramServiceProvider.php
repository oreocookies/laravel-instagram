<?php namespace Oblagio\Instagram;

use Illuminate\Support\ServiceProvider;
use Oblagio\Instagram\Instagram;

class InstagramServiceProvider extends ServiceProvider

{
	public function boot()

	{
		$this->publishes([__DIR__.'/InstagramConfig.php' => config_path('InstagramConfig.php')]  , 'config');
	}	

	public function register()

	{

		// merge config

		$this->mergeConfigFrom(__DIR__.'/InstagramConfig.php', 'config');

		//

		$this->app->bind('register-instagram' , function(){

			return new Instagram;

		});

	}
}