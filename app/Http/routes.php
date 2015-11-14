<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('profile/edit', 'ProfileController@edit');
Route::get('profile', 'ProfileController@index');
Route::get('profile/password', 'ProfileController@password');
Route::get('/', 'PostsController@index');
Route::get('video', 'PostsController@video');
Route::get('gif', 'PostsController@gif');
Route::get('cosplay', 'PostsController@cosplay');
Route::get('nsfw', 'PostsController@nsfw');
Route::get('wtf', 'PostsController@wtf');
Route::get('technical', 'PostsController@technical');

Route::post('upload', 'IndexController@upload');

Route::get('create', 'IndexController@create');
Route::get('posts/{id}', 'PostsController@show');
Route::post('posts/{id}', 'PostsController@comments');

Route::get('posts/{id}/islikedbyme', 'PostsController@isLikedByMe');
Route::get('posts/like/{id}', 'PostsController@like');
Route::get('posts/{id}/isdislikedbyme', 'PostsController@isDisLikedByMe');
Route::get('posts/dislike/{id}', 'PostsController@dislike');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
