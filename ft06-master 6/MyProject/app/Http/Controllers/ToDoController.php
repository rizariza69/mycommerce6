<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ToDoController extends Controller
{

    function GetToDo(){

        // $todoList = [
        //     [ "todo" => "To Do 1", "completed" => false ], 
        //     [ "todo" => "To Do 2", "completed" => true ], 
        //     [ "todo" => "To Do 3", "completed" => false ], 
        //     [ "todo" => "To Do 4", "completed" => true ], 
        // ];

        // $id = 1;
        // $list = DB::select('select * from todo where id = :thisId', ['thisId' => $id]);

        $list = DB::select('select * from todo ');

        return view('todo', [ "data" => $list] );
    }

    function AddToDo(Request $request){

        $this->validate(
            $request, [ 'mytodo' => 'required|max:256']
        );
        
        $newTodo = $request->mytodo;

        DB::insert('insert into todo (todo) values (?)', [$newTodo]);

        return redirect('/');
    }

    function DeleteToDo($id){
        //DB::delete('delete todo where id = ?', [$id]);
        DB::update('update todo set deleted = 1 where id = ?', [$id]);
        
        return redirect('/');
    }

}
