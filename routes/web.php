<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users', 'UserController@index')->name('users');

Route::get('/bicycles', 'BicycleController@index')->name('bicycles');

Route::get('/countries', 'CountryController@index')->name('countries');
// 1. Rota para mostrar o ecrã com o formulário e a lista conjunta
Route::get('/users/create', 'UserController@create')->name('users.create');

// 2. Rota para processar o envio do formulário (método POST) e guardar na BD
Route::post('/users', 'UserController@store')->name('users.store');


