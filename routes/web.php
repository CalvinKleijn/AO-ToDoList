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

Route::get('/', 'ListController@index')->name('lists.index');
Route::get('/lists/create', 'ListController@createList')->name('lists.create');
Route::post('/lists/storeList', 'ListController@storeList')->name('lists.store');
Route::get('/lists/edit/{id}', 'ListController@editList')->name('lists.edit');
Route::post('/lists/update/{id}', 'ListController@updateList')->name('lists.update');
Route::get('/lists/delete/{id}', 'ListController@deleteList')->name('lists.delete');


Route::get('/tasks/{ListId}', 'TaskController@index')->name('tasks.index');
Route::get('/tasks/{ListId}/create', 'TaskController@createTask')->name('tasks.create');
Route::post('/tasks/storeTask', 'TaskController@storeTask')->name('tasks.store');
