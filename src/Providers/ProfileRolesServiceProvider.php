<?php namespace RamonChristopherMorales\ProfileRoles\Providers;

use Illuminate\Support\ServiceProvider;

class ProfileRolesServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->loadViewsFrom(__DIR__.'/../views', 'profileRoles');

		$this->loadTranslationsFrom(__DIR__.'/../lang', 'profileRoles');

		$this->publishes([
			__DIR__.'/../config.php' => config_path('profileRoles.php'),
		], 'config');

		$this->publishes([
			__DIR__.'/../database/migrations' => base_path('database/migrations'),
		], 'views');

//		$this->publishes([
//			__DIR__.'/../views' => base_path('resources/views/ramonchristophermorales/profileRoles'),
//		], 'views');

//		$this->publishes([
//			__DIR__.'/../assets' => public_path('ramonchristophermorales/profileRoles'),
//		], 'assets');

	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->make('RamonChristopherMorales\ProfileRoles\Controllers\ProfileRolesController');

		/**
		 * binding UM facades
		 */
		$this->app->bind('PR', function()
		{
			return new \RamonChristopherMorales\ProfileRoles\PR();
		});
	}

}
