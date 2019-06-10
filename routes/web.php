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

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function(){
	return view('index');
});

Route::view('feature', 'feature');

Route::get('course', 'CursoController@index')->name('course');

Route::get('/course/{id}', 'CursoController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/acerca', 'UserController@acerca')->name('acercade');
