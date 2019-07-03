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
Route::get('/post', 'PostController@post');
Route::get('/signup', 'PostController@signup');
Route::get('/login', 'PostController@login');
Route::get('/category/create', 'CategoryController@create');

//Route::post is when u will submit to database
Route::post('/category/create', 'CategoryController@store')->name('createcategory');
//Route::get is when u will show in page
Route::get('/post/create', 'PostController@create');
Route::post('/post/create', 'PostController@store')->name('createpost');
Route::get('/post/{id}', 'PostController@show')->name('showpost'); //this helps shows the routes to the readmore page

// coment route
// Route::get('/post/comment', 'CommentController@comment')->name('showcomment');
Route::post('/post/comment/{id}', 'CommentController@store')->name('createcomment');
