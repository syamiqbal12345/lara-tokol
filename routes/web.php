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

Route::get("/users", 'UserController@index')->name("users.index");

Route::get("/users/create", 'UserController@create')->name("users.create");

Route::post("/users", 'UserController@store')->name("users.store");

Route::get("/users/{id}/edit", 'UserController@edit')->name("users.edit");

Route::post("/users/{id}", 'UserController@update')->name("users.update");

Route::get("/users/{id}/delete", 'UserController@delete')->name("users.delete");
