<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register any application services.
	 *
	 * This service provider is a great spot to register your various container
	 * bindings with the application. As you can see, we are registering our
	 * "Registrar" implementation here. You can add your own bindings too!
	 *
	 * @return void
	 */
	public function register()
	{
		$this->registerBindings();
        $this->registerViewComposers();
	}

    /**
     * Binds to the application
     */
    public function registerBindings(){
        $this->app->bind(
            'Illuminate\Contracts\Auth\Registrar',
            'App\Services\Registrar'
        );
    }

    /**
     * View Composers
     */
    public function registerViewComposers(){
        $view = $this->app->make('view');

        $view->composer("app", 'App\ViewComposers\NgServicesAndControllersComposer');
    }
}
