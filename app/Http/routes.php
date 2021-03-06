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

Route::get('/', 'WelcomeController@renderView');

Route::get('/buy', 'BuyController@renderView');

Route::get('/code-of-conduct', 'CodeOfConductController@renderView');

Route::get('/getting-here', 'GettingHereController@renderView');

Route::get('/manifesto', 'ManifestoController@renderView');

Route::get('/resources/{name?}', 'ResourcesController@renderView');

Route::get('/speakers', 'SpeakersController@renderView');

Route::get('/sponsors', 'SponsorsController@renderView');

Route::get('/thank-you', 'ConfirmationController@renderView');