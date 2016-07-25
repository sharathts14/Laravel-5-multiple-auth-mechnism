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

Route::get('/', 'Login@view');
Route::get('Login', 'Login@view');

Route::get('auth/{auth_provider}', 'Login@redirectToProvider@$auth_provider');
Route::get('auth/callback/{auth_provider}', 'Login@handleProviderCallback@$auth_provider');

Route::get('Home', 'Home@view');