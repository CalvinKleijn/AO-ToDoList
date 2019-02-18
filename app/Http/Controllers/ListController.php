<?php

namespace App\Http\Controllers;

use App\Lists;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index(){
    	$lists = Lists::all();
    	return view('lists.index', ['lists' => $lists]);
    }

    public function createList(){
    	return view('lists.create');
    }

    public function storeList(Request $request){
    	$list = new Lists();
    	$list->name = $request->name;
    	$list->save();

    	return redirect('/');
    }

    public function editList($id){
    	$lists = Lists::find($id);
    	return view('lists.edit')->with('lists', $lists);
    }

    public function updateList(Request $request, $id){
    	$lists = Lists::find($id);
    	$lists->name = $request->name;
    	$lists->save();

    	return redirect('/');
    }

    public function deleteList($id){
    	$lists = Lists::find($id);
    	$lists->delete();
    	return redirect('/');
    }
}
