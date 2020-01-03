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
    return view('todos.welcome');
});


Route::get('todos', 'todosController@todos');

route::get('todos/show/{todo}', 'todosController@show');

// Create The todo
Route::get('create', 'todosController@create');
Route::post('store', 'todosController@store');

// Edit The todo
route::get('todos/edit/{todo}', 'todosController@edit');
route::post('todos/update/{todo}', 'todosController@update');

// Delete The todo
Route::get('/todos/delete/{todo}', 'todosController@delete');
