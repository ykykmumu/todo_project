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


Route::get('/todos', 'TodoController@index')->name('todos.index');
Route::post('/todos', 'TodoController@create')->name('todos.create');
Route::delete('/delete/{id}','TodoController@delete')->name('todos.delete'); 




//Route::post('/delete/{id}','TodoController@delete')->name('todos.delete');
//Route::get('/delete','TodoController@delete')->name('todos.delete');
//Route::match(['get','post'], ‘/delete/{id}’,’TodoController@delete’)->name(‘todos.delete’);