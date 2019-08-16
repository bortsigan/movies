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

Route::get('/', 'MovieController@index')->name('all');
Route::get('/movies/all', 'MovieController@index')->name('all');
Route::get('/movie/detail/{movieID}', 'MovieController@detail')
	->name('detail')
	->where(['id' => '[0-9]+']);
