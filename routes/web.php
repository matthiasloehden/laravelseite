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

Route::get('/', function () {return view('welcome');});
Route::get('/test/{etwas}', 'newcontroller@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users', 'HomeController@show');
Route::post('/users', 'HomeController@search');

Route::get('/todo', 'todocontroller@index')->name("todo");
Route::post('/todo', 'todocontroller@store');
Route::get('/todo/edit/{todo}', 'todocontroller@edit')->name("todo.edit");
Route::put('/todo/edit/{todo}', 'todocontroller@update');
Route::get('/todo/delete/{todo}', 'todocontroller@destroy')->name("todo.delete");
//Route::post('/todo/delete/{todo}/delete', 'todocontroller@destroy');

Route::get("/serien", "SerienController@index")->name("serien");
Route::get("/serien/add", "SerienController@create")->name("serien.add")->middleware("auth");
Route::post("/serien/add", "SerienController@store");
Route::get("/serien/edit/{serien}", "SerienController@edit")->name("serien.edit");
Route::put("/serien/edit/{serien}", "SerienController@update");
Route::get("/serien/edit/{serien}/delete", "SerienController@destroy")->name("serien.delete");
Route::post("/serien/search", "SerienController@search");
Route::get("/serien/search", "SerienController@index")->name("serien.search");

Route::get("/filme", "FilmController@index");
Route::get("/filme/add", "FilmController@create");
Route::get("/filme/edit/{film}", "FilmController@edit");
Route::get("/filme/edit/{film}/delete", "FilmController@destroy");

Route::post("/filme/add", "FilmController@store");
Route::put("/filme/edit/{film}", "FilmController@update");


