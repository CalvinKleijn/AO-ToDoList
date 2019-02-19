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

    public function createTask(){
    	return view('tasks.create');
    }

}
