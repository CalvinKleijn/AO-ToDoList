<?php

namespace App\Http\Controllers;

use App\Task;
use App\Lists;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index($id){
        $tasks = Lists::find($id)->tasks;
    	return view('tasks.index',compact('tasks'));
    }

    public function createTask($id){
    	$tasks = Lists::find($id)->tasks;
    	return view('tasks.create',compact('tasks'));
    }

    public function storeTask(Request $request, $id){
    	$tasks = Lists::find($id)->tasks;

    	$task = new Task();
    	$task->title = $request->title;
    	$task->body = $request->body;
    	$task->status = $request->status;
    	$task->duur = $request->duur;
    	$task->lists_id = $task->lists->id;
    	$task->save();

    	return redirect('tasks.index',compact('tasks'));
    }

}
