<?php

namespace App\Http\Controllers;

use App\Task;
use App\Lists;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index($ListId){
        $tasks = Task::where('lists_id' ,$ListId)->get();
        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function createTask($ListId){
        $tasks = Task::where('lists_id' ,$ListId)->first();
        return view('tasks.create', ['tasks' => $tasks]);
    }

    public function storeTask(Request $request){
        $task = new Task();

        $task->title = $request->title;
        $task->body = $request->body;
        $task->status = $request->status;
        $task->duur = $request->duur;
        $task->lists_id = $request->lists_id;

        $task->save();

        return redirect()->back();
    }
}
