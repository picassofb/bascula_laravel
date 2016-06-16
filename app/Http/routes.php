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

    Route::group(['middleware' => 'auth'],function(){

        Route::get('/', function () {
            return view('layouts.master');
        })->name('panel');

        Route::get('/panel', function () {
            return view('layouts.master');
        })->name('panel');


        Route::get('/peso_bruto',[
            'uses' => 'IngresoController@getPesoBruto',
            'as' => 'PesoBruto'
        ]);

    });

});


Route::auth();
//Route::get('/home', 'HomeController@index');
