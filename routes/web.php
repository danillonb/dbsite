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

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/', function () {return view('welcome');})->name('welcome');

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/contatos/total', 'ContatoController@contato_total')->name('contato_total')->middleware('auth');

Route::post('/novo_contato', 'ContatoController@novo')->name('novo_contato');