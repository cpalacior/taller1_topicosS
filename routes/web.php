<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");

//routes from the technique controler
Route::get("/technique", 'App\Http\Controllers\TechniqueController@index')->name("technique.index");
Route::get("/technique/create", 'App\Http\Controllers\TechniqueController@create')->name("technique.create");
Route::post('/technique/save', 'App\Http\Controllers\TechniqueController@save')->name("technique.save");
Route::get('/technique/delete/{id}', 'App\Http\Controllers\TechniqueController@delete')->name("technique.delete");
Route::get('/technique/{id}', 'App\Http\Controllers\TechniqueController@show')->name("technique.show");
