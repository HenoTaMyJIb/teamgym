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
    $form .= Form::submit($label, ['class' => 'btn btn-default']);
    return $form .= Form::close();
}

Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');

Route::get('clubs', 'ClubsController@index');

Route::get('classifiers', 'ClassifiersController@index');

Route::resource('age-groups', 'AgeGroupsController');
//Route::get('age-groups', 'AgeGroupsController@index');
//Route::get('age-groups/create', 'AgeGroupsController@create');
//Route::get('age-groups/{id}/edit', 'AgeGroupsConstroller@edit');
//Route::post('age-groups', 'AgeGroupsController@store');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
