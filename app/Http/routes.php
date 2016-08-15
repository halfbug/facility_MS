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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('/register', 'Auth\AuthController@registerUser');
Route::post('auth/register', 'AuthController@postRegisterUser');


Route::controllers([
   'password' => 'Auth\PasswordController',
]);

Route::get('/facility', 'FacilityController@index');
Route::post('/facility', 'FacilityController@store');
Route::delete('/facility/{facility}', 'FacilityController@destroy');


Route::get('/user/approval/{newUser}', 'UserController@approval');
Route::post('/user/approved', 'UserController@approved');
Route::get('/user/decline/{newUser}', 'UserController@decline');

Route::get('/application', 'ApplicationController@index');
Route::get('/application/add', 'ApplicationController@form');
Route::get('/application/update/{formId}', 'ApplicationController@form');
Route::get('/application/export/{formId}', 'ApplicationController@export');
Route::post('/application/add', 'ApplicationController@store');
Route::delete('/application/{form}', 'ApplicationController@destroy');