<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;


class TodoController extends Controller
{
    public function index() {
    $todos = Todo::all(); 
           return view('todos.index', ["todos" => $todos]);   
}


public function create(Request $request) {

    $comment = $request->input('comment');
    Todo::insert(["comment" => $comment]); 

    $todos = Todo::all(); 
    return view('todos.index', ["todos" => $todos]); 

    }



// public function create() {
//     return view('todos.index');
// }


// public function store(Request $request) {
//     $todos = new Todo;
//     $todos->comment = $request->comment;
//     $todos->save();

//     return view('todos.index');
// }


// public function destroy($id)
//     {
//     
//         $todos = User::find($id);
//         $todos->delete();
//         return redirect()->to('/todos');
//     }

    // public function destroy(Todos $todos)
    // {
    //     $todos->delete();
    //     return redirect('/todos');
    // }


}

