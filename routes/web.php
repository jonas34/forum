<?php

Auth::routes();

Route::get('/', function(){
  return redirect('/threads');
});

Route::get('/threads', 'ThreadsController@index');

Route::post('/threads', 'ThreadsController@store');

Route::get('/threads/create', 'ThreadsController@create')->middleware('auth');

Route::get('/threads/{id}', 'ThreadsController@show');

Route::get('/profile', 'ProfileController@index');

Route::get('/comment', 'CommentController@index');
Route::get('/comment/3', 'CommentController@show')->middleware('auth');
Route::post('/comment', 'CommentController@store')->middleware('auth');
