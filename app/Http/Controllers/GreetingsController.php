<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingsController extends Controller
{
    public function show(){
      return view('messages.greeting', ['name' => 'Jonas']);
    }
}
