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

Route::get('/', 'PostController@index') ;
Route::get('/home', 'PostController@index') ;
Route::get('/posts/index', 'PostController@index') ;

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::get('/posts/create', 'PostController@create') ;
    Route::post('/posts', 'PostController@store') ;
});