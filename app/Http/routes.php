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

Route::get('/buy', function () {
    return view('buy', ['title' => 'Buy Tickets', 'bodyClass' => 'buy']);
});

Route::get('/code-of-conduct', function () {
    return view('codeOfConduct', ['title' => 'Code of Conduct', 'bodyClass' => 'code-of-conduct']);
});

Route::get('/manifesto', 'ManifestoController@renderView');

Route::get('/programme', 'ProgrammeController@renderView');

Route::get('/resources/{name?}', 'ResourcesController@renderView');

Route::get('/sponsors', function () {
    return view('sponsors', ['title' => 'Sponsors', 'bodyClass' => 'sponsors']);
});