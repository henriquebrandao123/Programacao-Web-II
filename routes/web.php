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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/paciente/index','paciente\pacienteController@index')->name('paciente.index');

Route::get('/paciente/create','paciente\pacienteController@create')->name('paciente.create-edit');
Auth::routes();


