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
