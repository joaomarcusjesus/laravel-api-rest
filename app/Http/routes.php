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
            '\create' => 'UsersController method post@store => Cria um novo User com os paraments email, password e name',
            '\inscritos' => 'InscritosController method get@index => Carregar o json de todos os inscritos do banco de dados',
            '\inscritos' => 'InscritosController method post@store => Cria um novo Inscritos com os paraments email e name',
            '\inscritos\{id show bla}' => 'InscritosController method get@show => Mostra um Inscrito pelo id',
            '\inscritos\{id update bla}' => 'InscritosController method put@update => Atualiza dados do inscrito passando o id',
            '\inscritos\{id delete bla}' => 'InscritosController method delete@delete => Deleta o inscrito passando o id'
        ));
    });

    Route::post('/login', 'LoginController@login');
    Route::post('/create', 'UsersController@store');

    Route::resource('inscritos', 'InscritosController');
});

Route::get('/', function () {
    return redirect('apirest');
});