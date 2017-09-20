<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ThreadsController extends Controller
{
    public function index()
    {
      $threads = DB::select('select * from threads');


      return view('threads.index', compact('threads'));
    }

    public function create()
    {
      $tasks = [
        ['title' => 'Vinna', 'complete' => false, 'anchor' => 'http://www.grindavik.is'],
        ['title' => 'Læra', 'complete' => true, 'anchor' => 'http://www.fss.is'],
        ['title' => 'Versla', 'complete' => false, 'anchor' => 'http://www.bonus.is'],
        ['title' => 'Sofa', 'complete' => true, 'anchor' => 'http://www.ikea.is'],
        ['title' => 'Chilla', 'complete' => false, 'anchor' => 'http://www.nba.com']
      ];

      return view('threads.create', compact('tasks'));
    }

    public function show($id)
    {
      $thread = DB::select('select * from threads where id=?', [$id]);

      return view('threads.show', compact('thread'));
    }
}
