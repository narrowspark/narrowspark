<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Narrowspark the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function ($request, $response) {
    echo "string";
    //return View::make('plates', 'hello');
    return $response;
});
