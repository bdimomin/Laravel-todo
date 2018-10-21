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

Route::get('/todos','TodosController@home')->name('todos');
Route::post('/save/todo','TodosController@saveTodo')->name('saveTodo');
Route::get('/delete/todo/{id}','TodosController@deleteTodo')->name('deleteTodo');
Route::get('/completed/todo/{id}','TodosController@completedTodo')->name('completedTodo');
Route::get('/update/todo/{id}','TodosController@updateTodo')->name('updateTodo');
Route::post('/update/save','TodosController@saveUpdateTodo')->name('saveUpdateTodo');
