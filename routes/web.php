<?php

use App\Http\Controllers\SimpleTodoController;
use Illuminate\Support\Facades\Route;
use App\Models\simple_todo;

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

Route::get('/','App\Http\Controllers\SimpleTodoController@index' );

Route::get('create','App\Http\Controllers\SimpleTodoController@create' );

Route::get('save_new_list','App\Http\Controllers\SimpleTodoController@store' );

Route::get('delete/{id}','App\Http\Controllers\SimpleTodoController@destroy' );

Route::get('edit/{id}','App\Http\Controllers\SimpleTodoController@edit' );

Route::get('update_list/{id}','App\Http\Controllers\SimpleTodoController@update' );