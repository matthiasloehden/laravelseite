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
Route::get('/test/{etwas}', 'newcontroller@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/todo', 'todocontroller@index')->name("todo");
Route::post('/todo', 'todocontroller@store');
Route::get('/todo/edit/{todo}', 'todocontroller@edit')->name("todo.edit");
Route::put('/todo/edit/{todo}', 'todocontroller@update');
Route::get('/todo/delete/{todo}', 'todocontroller@destroy')->name("todo.delete");
//Route::post('/todo/delete/{todo}/delete', 'todocontroller@destroy');



