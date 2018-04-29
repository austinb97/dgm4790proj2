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

// Route::get('elements', function () {
//     return view('elements');
// });

// Route::get('generic', function () {
//     return view('generic');
// });

Route::get('/', 'FormController@welcome');
Route::get('/generic', 'FormController@generic');
Route::get('/elements', 'FormController@elements');

Route::post('/forms', 'FormController@store');

// Route::get('test/cars', 'carsController@index');
// Route::get('test/cars/{car}', 'carsController@show');

// GET /posts
// GET /posts/create
// POST /posts
// GET /posts/{id}/edit
// GET /posts/{id}
// PATCH /posts/{id}
// DELETE /posts/{id}


//Route::get('/', 'PostsController@index');
// MVC LAYOUT & COMMANDS
//1.controller-> php artisan make:controller PostsController
//2.Eloquent model-> php artisan make:model Post
//3.migration-> php artisan make:migration create_posts_table--create=posts
//OR all 3 -> php artisan make:model Post -mc