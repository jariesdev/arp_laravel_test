<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Todos;

class TodoController extends Controller
{
    
	function index (){
		$todo = Todos::all();
		// $todo = DB::table('todo')->get();
		return view('todo.list', ['todo' => $todo]);
	}

	function add(){
		return view('todo.add');
	}

	function save_todo(Request $request){

        $validator = Validator::make($request->all(), [
            'description' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            return redirect('/add')
                        ->withErrors($validator)
                        ->withInput();
        }else{
			Todos::insert_todo(
				$request->input('description'),
				$request->input('is_done') ?  1 : 0
			);
        }

		return view('todo.add', ['add_fails' => $validator->fails()]);
	}

	function edit($id){
		$todo = DB::table('todo')->where('id', $id)->first();

		return view('todo.edit', ['todo' => $todo]);
	}

	function update_todo(Request $request, $id){
		$validator = Validator::make($request->all(), [
            'description' => 'required|max:255'
        ]);

		$updated = false;

        if ($validator->fails()) {
            return redirect('/edit/'.$id)
                        ->withErrors($validator)
                        ->withInput();
        }else{
			$updated = Todos::update_todo(
				$id,
				$request->input('description'),
				$request->input('is_done') ?  1 : 0
			);
			return redirect('/');
        }

		
		//return view('todo.add', ['add_fails' => $validator->fails()]);
	}

	function delete($id){
		$d = Todos::delete_todo($id);
		$todo = Todos::all();
		return view('todo.list', ['todo' => $todo, 'deleted' => $d]);
	}

}
