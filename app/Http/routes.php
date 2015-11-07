<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

function delete_form($routeParams, $label = 'Delete')
{
    $form = Form::open(['method' => 'DELETE', 'route' => $routeParams]);
    $form .= Form::submit($label, ['class' => 'btn btn-danger pull-right']);
    return $form .= Form::close();
}

Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');

//Route::get('clubs', 'ClubsController@index');

Route::get('classifiers', 'ClassifiersController@index');

Route::get('clubs/{club}/coach', 'CoachesController@create');
Route::post('coaches/{club}', 'CoachesController@store');

//Route::get('/gymnasts', 'GymnastsController@index');
Route::get('clubs/{club}/gymnast', 'GymnastsController@create');
Route::post('gymnasts', 'GymnastsController@store');


Route::get('clubs/{club}/judge', 'JudgesController@create');
Route::post('judges/{club}', 'JudgesController@store');

Route::get('competitions/{competitionId}/teams/create', 'TeamsController@create');
Route::post('competitions/{competitionId}/teams', 'TeamsController@store');
Route::get('competitions/{competitionId}/stats', 'CompetitionsController@stats');
Route::get('teams/{teamId}', 'TeamsController@show');
Route::get('teams/{teamId}/edit', 'TeamsController@edit');
Route::patch('teams/{teamId}', 'TeamsController@update');
Route::get('teams/{teamId}/status/{status}', 'TeamsController@updateStatus');


Route::resource('clubs', 'ClubsController');
Route::resource('age-groups', 'AgeGroupsController');
Route::resource('coaches', 'CoachesController');
Route::resource('gymnasts', 'GymnastsController');//vse routy odnoi zapisju
Route::resource('judges', 'JudgesController');
Route::resource('competitions', 'CompetitionsController');
//Route::resource('teams', 'TeamsController');
Route::get('tariff-forms/pdf', 'TariffFormsController@pdf');
Route::resource('tariff-forms', 'TariffFormsController');
Route::get('tariff-forms/create/{discipline}/{team}', 'TariffFormsController@create');
//Route::post('tariff-forms', 'TariffFormsController@store');
//Route::get('tariff-forms/{tariff}', 'TariffFormsController@show');

Route::get('elements/tumbling/{age}', 'ElementsController@tumbling');
Route::get('elements/floor/{age}', 'ElementsController@floor');
Route::get('elements/trampette/{age}', 'ElementsController@trampette');
Route::get('elements', 'ElementsController@index');

Route::get('api/gymnasts', 'ApiController@gymnasts');
Route::get('api/elements', 'ApiController@elements');
Route::get('api/age-groups', 'ApiController@ageGroups');
Route::get('api/check', 'ApiController@check');

//Route::get('age-groups', 'AgeGroupsController@index');
//Route::get('age-groups/create', 'AgeGroupsController@create');
//Route::get('age-groups/{id}/edit', 'AgeGroupsConstroller@edit');
//Route::post('age-groups', 'AgeGroupsController@store');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
