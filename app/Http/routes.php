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
        return View::make("welcome")->with('rotas', array(
            '\login' => 'LoginController method post@login => Acessar a rota de login com os paraments email e password.',
            '\create' => 'UsersController method post@store => Cria um novo User com os paraments email, password e name'
        ));
    });

    Route::post('/login', 'LoginController@login');
    Route::post('/create', 'UsersController@store');
});

Route::get('/', function () {
    return redirect('apirest');
});