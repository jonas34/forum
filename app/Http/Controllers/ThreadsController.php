<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Thread;

class ThreadsController extends Controller
{
    public function index()
    {
      $threads = Thread::all();

      return view('threads.index', compact('threads'));
    }

    public function create()
    {
      return view('threads.create');
    }

    public function show($id)
    {
      $threads = DB::table('threads')->where('id', $id)->first();

      return view('threads.show', compact('threads'));
    }

    public function store()
    {
      dd('Store method');

    }
}
