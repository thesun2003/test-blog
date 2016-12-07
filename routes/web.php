<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Public part
Route::get('/', 'PublicPostController@index')->name('public.index');
Route::get('posts/{id}', 'PublicPostController@show')->name('public.show');

// Admin part
Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function() {
    Route::get('/', 'AdminController@index');
    Route::get('posts', 'AdminPostController@index')->name('admin.posts.index');
    Route::post('posts/{id?}', 'AdminPostController@update')->name('admin.posts.update');
    Route::get('posts/create', 'AdminPostController@edit')->name('admin.posts.create');
    Route::get('posts/{id}', 'AdminPostController@show')->name('admin.posts.show');
    Route::get('posts/{id}/edit', 'AdminPostController@edit')->name('admin.posts.edit');
    Route::get('posts/{id}/delete', 'AdminPostController@delete')->name('admin.posts.delete');
});

Auth::routes();
