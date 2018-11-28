<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('contact', 'ContactController@send')->name('api.contact.send');

Route::get('posts', 'PostController@index')->name('api.post.index');
Route::get('post/{slug}', 'PostController@show')->name('api.post.show');
Route::post('post', 'PostController@store')->name('api.post.store');
Route::put('post/{id}', 'PostController@update')->name('api.post.update');
Route::delete('post/{id}', 'PostController@delete')->name('api.post.update');

Route::get('comments/{post_id}', 'CommentController@index')->name('api.comment.index');
Route::post('comment', 'CommentController@store')->name('api.comment.store');

Route::get('categories', 'CategoryController@index')->name('api.category.index');
Route::get('categories-list', 'CategoryController@list')->name('api.category.list');