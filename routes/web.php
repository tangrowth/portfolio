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

Route::get('/', 'PostController@index');

Route::get('/memberpage/{user}/edit', 'UserController@edit');
Route::get('/memberpage/{user}', 'UserController@index');
Route::put('/memberpage/{user}', 'UserController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/department', 'DepartmentController@store');
Route::get('/department/create', 'DepartmentController@create');
Route::get('/department/{department}', 'DepartmentController@index');

Route::post('/performance','PerformanceController@store');
Route::get('/performance/create', 'PerformanceController@create');

Route::get('/performance/{performance}/edit', 'PerformanceController@edit');
Route::put('/performance/{performance}', 'PerformanceController@update');

Route::get('/performance/{performance}', 'PerformanceController@index');

Route::get('/posts/{post}/reply', 'ReplyController@reply');
Route::post('/posts/{post}', 'ReplyController@store');

Route::post('/posts', 'PostController@store');
Route::get('/posts/create', 'PostController@create');
Route::get('/posts/{post}', 'PostController@show');
Route::delete('/posts/{post}','PostController@delete');

Route::get('/posts/{post}/edit', 'PostController@edit');
Route::put('/posts/{post}', 'PostController@update');

Route::get('/performance/{performance}/department/{department}', 'DepartmentController@relatedPerfomanceIndex');

Route::get('/photo', 'PhotoController@add');
Route::post('/photo', 'PhotoController@create');