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

Route::get('/', array('uses' => 'NamesController@index', 'as' => 'index'));
Route::get('names/create', array('uses' => 'NamesController@create', 'as' => 'names.add'));
Route::post('/names', array('uses' => 'NamesController@store', 'as' => 'names.add'));
Route::get('/show', array('uses' => 'NamesController@show', 'as' => 'names.show'));