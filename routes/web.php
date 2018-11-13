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

Route::get('/portfolio', ['as' => 'portfolio', 'uses' => 'NewsController@portfolio']);

Route::get('/blog', ['as' => 'blog', 'uses' => 'NewsController@blog']);

Route::post('blog', ['as' => 'blog', 'uses' => 'NewsController@search']);

Route::get('/category/{category}', ['as' => 'category', 'uses' => 'NewsController@blog']);

Route::get('/contacts', ['as' => 'contacts', 'uses' => 'ContactController@index']);

Route::post('/contacts', ['as' => 'contacts', 'uses' => 'ContactController@validateMessage']);


Route::get('/post/{id}', ['as' => 'post', 'uses' => 'NewsController@showSinglePost']);

Route::post('/comment', [
    'uses' => 'CommentController@addComment',
    'middleware' => ['web', 'auth']]);

Auth::routes();

Route::get('/login', ['as' => 'login', 'uses' => 'Auth\MyAuthController@showLoginForm']);
Route::post('/login', ['as' => 'login', 'uses' => 'Auth\MyAuthController@authenticate']);

Route::group([
    'prefix'     => 'admin',
    'middleware' => [
        'web',
        'auth',
        'admin',
    ],
], function() {

    Route::get('/', 'Admin\AdminNewsController@index');
    Route::resource('/news', 'Admin\AdminNewsController');
    Route::resource('/comments', 'Admin\AdminCommentsController');

});

