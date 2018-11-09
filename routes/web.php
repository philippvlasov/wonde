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

Route::get('/', ['as' => 'main', 'uses' => 'NewsController@index']);
Route::get('/about', ['as' => 'about', 'uses' => 'EmployeeController@index']);

Route::get('/post/{id}', ['as' => 'post', 'uses' => 'NewsController@showSinglePost']);

Route::post('/comment', [
    'uses' => 'CommentController@addComment',
    'middleware' => ['web', 'auth']]);

Auth::routes();

Route::get('/login', ['as' => 'login', 'uses' => 'Auth\MyAuthController@showLoginForm']);
Route::post('/login', ['as' => 'login', 'uses' => 'Auth\MyAuthController@authenticate']);

Route::get('/home', 'HomeController@index')->name('home');
