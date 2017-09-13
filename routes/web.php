<?php

Auth::routes();

Route::get('/messages/greeting', 'GreetingsController@show');

Route::get('/threads', function(){
    return view('threads.index');
});

Route::get('/threads/create', function(){
    return view('threads.create');
});

/*
Route::get('/messages/greeting/{id}', function($id){
    $greetings = ['Bæ', 'Bye', 'Adios', 'Miasto', 'Hej Hej'];
    return view('messages.greeting', ['greetings' => $greetings[$id]]);
})->where(['id' => '[0-4]+']);
*/

Route::get('/messages/hello', function(){
    $name = 'Jonas';
    return view('messages.hello', compact('name'));
});
