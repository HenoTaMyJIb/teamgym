<?php namespace App\Providers;

use App\Models\AgeGroup;
use App\Models\Discipline;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
//        $ageGroupsMenu = AgeGroup::all();
//        $disciplinesMenu = Discipline::all();
//        $countries = json_decode(file_get_contents(base_path('public/countries.json')));
////        $action = Route::current()->getName();
////        $controller = class_basename($action['controller']);
//
//        View::share(compact('ageGroupsMenu', 'disciplinesMenu', 'countries'));
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
		$this->app->bind(
			'Illuminate\Contracts\Auth\Registrar',
			'App\Services\Registrar'
		);

        if ($this->app->environment() == 'local') {
            $this->app->register('Laracasts\Generators\GeneratorsServiceProvider');
        }
	}

}
