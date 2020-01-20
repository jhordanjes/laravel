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



Route::get('contact/create', 'ContactController@create')->name('create');
Route::get('/', 'ContactController@index')->name('home');
Route::get('/gerarpdf', 'PdfController@index')->name('pdf');

Route::resource('contacts','ContactController');



Route::get('/show', 'ContactController@show');