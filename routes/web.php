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
Route::get('/priority', 'PriorityController@index')->name('priority.index');
Route::post('/priority', 'PriorityController@store')->name('priority.store');
Route::get('/priority/{id}/edit', 'PriorityController@edit')->name('priority.edit');
Route::put('/priority/{id}', 'PriorityController@update')->name('priority.update');
Route::delete('/priority/{id}', 'PriorityController@destroy')->name ('priority.destroy');