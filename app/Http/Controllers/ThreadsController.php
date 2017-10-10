<?php

namespace App\Http\Controllers;

use Validator;
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
      $threads = Thread::find($id);

      return view('threads.show', compact('threads'));
    }

    public function store(Request $request)
    {
      // Validate
     
     $validator = Validator::make($request->all(), [
        'title' => 'required|max:40',
        'body' => 'required|min:20',
      ]);

      if ($validator->fails()) {
        return redirect('threads/create')
          ->withInput()
          ->withErrors($validator);
      }

      $thread = new Thread;
      $thread->title = $request->title;
      $thread->body = $request->body;
      $thread->user_id = 1;
      $thread->save();

      return redirect('/threads');
    }
}
