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
        return view('home');
    })->name('panel');


    Route::group(['middleware' => 'auth'],function(){

        Route::get('/peso_bruto',function(){
            return view('actions.ingreso.peso_bruto');
        })->name('peso_bruto');

    });



});