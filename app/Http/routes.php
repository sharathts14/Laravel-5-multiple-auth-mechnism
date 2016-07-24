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

Route::get('auth/google', 'Login@redirectToProvider');
Route::get('auth/google/callback', 'Login@handleProviderCallback');
