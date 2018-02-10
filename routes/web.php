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

Route::get('/', 'HomeController@index')->name('home');

// Route::get('/', function () {
//     return view('auth/login');
// });

// Route::get('/register', function () {
//     return view('register');
// });

// Route::get('/index', function () {
//     return view('index');
// });

// Route::get('/add_question', function () {
//     return view('add_question');
// });

// Route::get('/tags', function () {
//     return view('tags');
// });

// Route::get('/profile', function () {
//     return view('profile');
// });

// Route::get('/post', function () {
//     return view('post');
// });

Route::get('add_question', 'PostsController@create');
Route::post('store', 'PostsController@store');
Route::post('posts', 'PostsController@show');


Route::resource('posts', 'PostsController');
// Route::resource('tags', 'TagsController');
 // Route::resource('posts/{id}', 'PostsController');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
