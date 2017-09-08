<?php

Auth::routes();

Route::get('/threads', function(){
    return view('threads.index');
});

Route::get('/threads/create', function(){
    return view('threads.create');
});

Route::get('/messages/greeting', function(){
    return view('messages.greeting');
});

Route::get('/messages/hello', function(){
    $name = 'Jonas';
    return view('messages.hello', compact('name'));
});
