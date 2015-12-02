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

//Profiles
Route::get('profile/edit', 'ProfileController@edit');
Route::get('profile', 'ProfileController@index');
Route::get('user/{user}', 'ProfileController@viewUser');
Route::get('profile/password', 'ProfileController@password');
Route::post('profile/password', 'ProfileController@password');
Route::get('profile/quote', 'ProfileController@quote');
Route::post('profile/quote', 'ProfileController@editQuote');
Route::get('profile/avatar', 'ProfileController@avatar');
Route::post('profile/avatar', 'ProfileController@editAvatar');
Route::get('profile/name', 'ProfileController@name');
Route::post('profile/name', 'ProfileController@editName');
Route::get('profile/country', 'ProfileController@country');
Route::post('profile/country', 'ProfileController@editCountry');

//Index View
Route::get('/', 'PostsController@index');
Route::get('video', 'PostsController@video');
Route::get('gif', 'PostsController@gif');
Route::get('cosplay', 'PostsController@cosplay');
Route::get('nsfw', 'PostsController@nsfw');
Route::get('wtf', 'PostsController@wtf');
Route::get('technical', 'PostsController@technical');

//Upload Images
Route::post('upload', 'IndexController@upload');
Route::post('uploadProfile', 'ProfileController@editProfilePicture');

//Create Posts/Comments/ChildrenComment
Route::get('create', 'IndexController@create');
Route::get('posts/{id}', 'PostsController@show');
Route::post('posts/{id}', 'PostsController@comments');
Route::post('posts/reply/{id}', 'PostsController@commentsReply');

//Up/Down votes
Route::get('posts/{id}/islikedbyme', 'PostsController@isLikedByMe');
Route::get('posts/like/{id}', 'PostsController@like');
Route::get('posts/{id}/isdislikedbyme', 'PostsController@isDisLikedByMe');
Route::get('posts/dislike/{id}', 'PostsController@dislike');

//Authentication
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
