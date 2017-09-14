<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThreadsController extends Controller
{
    public function index()
    {
      return view('threads.index');
    }

    public function create()
    {
      return view('threads.create');
    }

    public function show($id)
    {
      return view('threads.show');
    }
}
