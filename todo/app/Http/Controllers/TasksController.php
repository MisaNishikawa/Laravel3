<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use === このクラスを使います的な意味↓
use App\Task;

class TasksController extends Controller
{
    public function index()
    {
         //データの取得（は、モデル(Task)にお願いする。）
        $tasks = Task::all();
        // dd($tasks);

        //viewを返す
        return view('tasks.index', compact('tasks'));
    
    }
}
