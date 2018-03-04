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


Route::get('/', 'HomeController@index')->name('login');

Auth::routes();

Route::get('index', 'PostsController@index')->name('home');
Route::get('add_question', 'PostsController@create');
Route::post('store', 'PostsController@store');
Route::post('posts', 'PostsController@show');


Route::resource('posts', 'PostsController');
// Route::resource('tags', 'TagsController');
Route::resource('posts/{id}', 'PostsController');



