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
    return controller('ToDoController.index');
});*/


Route::get('/', 'TodoController@index');
Route::get('/add', 'TodoController@add');
Route::post('/add', 'TodoController@save_todo');
Route::get('/edit/{id}', 'TodoController@edit');
Route::post('/update/{id}', 'TodoController@update_todo');
Route::get('/delete/{id}', 'TodoController@delete');