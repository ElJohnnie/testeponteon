<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => ['auth']], function (){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::group(['middleware' => ['empresario.existe']], function (){
        Route::post('/create', 'EmpresariosController@create')->name('criar');
    });
    Route::get('/rede/{id}', 'EmpresariosController@rede')->name('rede');
});

Auth::routes();


