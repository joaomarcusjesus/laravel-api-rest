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

Route::group(array('prefix' => 'apirest'), function ()
{
    Route::get('/', function () {
        return response()->json([
            'status' => 'OK',
            'message' => 'Bem-vindo ao Laravel 5.2~*',
            'author' => 'JM~Heroku~'
        ], 200);
    });

    Route::post('/login', 'LoginController@login');
    Route::post('/create', 'UsersController@store');
});

Route::get('/', function () {
   return redirect('apirest');
});