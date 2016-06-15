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



Route::group(['middleware'=>['web']], function(){

    Route::get('/', function () {
        return view('layouts.master');
    })->name('panel');



    Route::get('/login', [
        'uses' => 'UsuarioController@getLogin',
        'as' => 'login'
    ]);

    Route::post('/login', [
        'uses' => 'UsuarioController@postLogin',
        'as' => 'login'
    ]);



    Route::group(['middleware' => 'auth'],function(){

        Route::get('/peso_bruto',[
            'uses' => 'IngresoController@getPesoBruto',
            'as' => 'PesoBruto'
        ]);

    });

});

//Route::auth();
//Route::get('/home', 'HomeController@index');
