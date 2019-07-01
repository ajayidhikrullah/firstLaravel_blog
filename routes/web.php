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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/post', function(){
//     return view('post');
// } );

// Route::get('/home', function(){
//     return view('partials.content');
// });


Route::get('/', 'PostController@index');
Route::get('/post', 'Postcontroller@post');
Route::get('/signup', 'Postcontroller@signup');
Route::get('/login', 'Postcontroller@login');
Route::get('/category/create', 'CategoryController@create');

Route::post('/category/create', 'CategoryController@store')->name('createcategory');

Route::get('/post/create', 'PostController@create');