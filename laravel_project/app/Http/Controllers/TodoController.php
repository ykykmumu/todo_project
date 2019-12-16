<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;


class TodoController extends Controller
{
    public function index() {

      $todos = Todo::all(); 
           return view('todos.index', ["todos" => $todos]);   
    }


    public function create(Request $request) {

      $todos = new Todo;
      $todos->comment = $request->comment;
      $todos->save();
      return redirect()->route('todos.index');

    }


    public function update(Request $request, $id){
      $todos = Todo::find($id);
      $todos->tag = $request->tag;
      if ($request->tag === '作業中') {
        $todos->tag = '完了';
      }elseif ($request->tag === '完了'){
        $todos->tag = '作業中';}
      $todos->save();
      return redirect()->route('todos.index');
    }


    

    public function delete(Request $request, $id){
      $todos = Todo::find($id);
      $todos->delete();
      return redirect()->route('todos.index');
    }


}


// $todos = Todo::find($id);
//       $todos->tag = $request->tag;
//       $todos->save();


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

  //   public function destroy(Request $request)
  // {
  //   $todos = Todo::find($request->id);
  //   $todos->delete();
  //   return redirect()->route('todos.index');
  // }


// public function delete(Request $request){
// $todos = Todo::find($request->id);
// $todos->delete();
// return redirect()->route('todos.index');
// }



 

