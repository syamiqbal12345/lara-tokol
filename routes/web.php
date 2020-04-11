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

Route::get('/login','SecurityController@login')->name('login');
Route::post('/login','SecurityController@prosesLogin')->name('login.proses');

Route::get('/registrasi', function () { return view('/users/create'); });

Route::get('/logout', 'SecurityController@logout')->name('login');
Route::get('/logout', 'SecurityController@logout');


Route::get("/users", 'UserController@index')->name("users.index");

Route::get("/users/create", 'UserController@create')->name("users.create");

Route::post("/users", 'UserController@store')->name("users.store");

Route::get("/users/{id}/edit", 'UserController@edit')->name("users.edit");

Route::post("/users/{id}", 'UserController@update')->name("users.update");

Route::get("/users/{id}/delete", 'UserController@delete')->name("users.delete");


Route::get("/toko", 'TokoController@index')->name("toko.index");

Route::get("/toko/create", 'TokoController@create')->name("toko.create");

Route::post("/toko", 'TokoController@store')->name("toko.store");

Route::get("/toko/{id}/edit", 'TokoController@edit')->name("toko.edit");

Route::post("/toko/{id}", 'TokoController@update')->name("toko.update");

Route::get("/toko/{id}/delete", 'TokoController@delete')->name("toko.delete");
