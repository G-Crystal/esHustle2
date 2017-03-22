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

// Route::get('/home', function () {
//     return view('home.view');
// });

Route::get('home', 'HomeController@view');

Route::get('profile', 'ProfileController@view');
Route::get('login', 'Auth\AuthController@login');
Route::post('login', 'Auth\AuthController@postlogin');
Route::get('register', 'Auth\AuthController@register');
Route::post('register', 'Auth\AuthController@create');

Route::get('mobile', 'MobileController@view');

Route::get('option', 'OptionController@view');

Route::get('support', 'SupportController@view');
