<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Todo;
class TodoController extends Controller
{
  public function index(Request $request){
    $todos = Todo::when($request->tag, function ($query, $tag) {
        $query->where('tag', $tag);
    })->orderBy('id', 'ASC')->get();
    return view('todos.index', ['todos' => $todos]);
    }
    public function store(Request $request) {
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

 

