<?php

namespace App\Http\Controllers;

use App\Lists;
use App\Task;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index(){
    	$lists = Lists::orderBy('id', 'desc')->get();
    	return view('lists.index', ['lists' => $lists]);
    }

    public function createList(){
    	return view('lists.create');
    }

    public function storeList(Request $request){
    	$list = new Lists();
    	$list->name = $request->name;
    	$list->save();

    	return redirect()->route('lists.index');
    }

    public function editList($id){
    	$lists = Lists::find($id);
    	return view('lists.edit')->with('lists', $lists);
    }

    public function updateList(Request $request, $id){
    	$lists = Lists::find($id);
    	$lists->name = $request->name;
    	$lists->save();

    	return redirect()->route('lists.index');
    }

    public function deleteList($id){
    	$lists = Lists::find($id);
    	$lists->delete();
    	return redirect()->route('lists.index');
    }
}
