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
    return view('welcome', ['title' => 'Welcome', 'bodyClass' => 'welcome']);
});

Route::get('/code-of-conduct', function () {
    return view('codeOfConduct', ['title' => 'Code of Conduct', 'bodyClass' => 'code-of-conduct']);
});

Route::get('/programme', function () {
    return view('programme', ['title' => 'Programme', 'bodyClass' => 'programme']);
});

Route::get('/manifesto', function () {
    return view('manifesto', ['title' => 'Manifesto', 'bodyClass' => 'manifesto']);
});