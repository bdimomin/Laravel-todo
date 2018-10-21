<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TodosController extends Controller
{
    public function home(){
        $todos = Todo::all();
        return view('app.todos',compact('todos'));
    }
    public function saveTodo(Request $request){
        Session::flush('message','Tasks Inserted Successfully');
        $todo = new Todo();
        $todo->todos= $request->todos;
        $todo->save();
        return redirect()->back();
    }
    public function deleteTodo($id){
        Session::flush('message','Tasks deleted Successfully');
        $todo=Todo::find($id);
        $todo->delete();
        return redirect()->back();
    }
    public function updateTodo($id){
        $todo=Todo::find($id);
       return view('app.updateTodo',compact('todo'));
    }
    public function saveUpdateTodo(Request $request){
        Session::flush('message','Tasks updated Successfully');
        $tod_id= $request->id;
        $todo= Todo::find($tod_id);
        $todo->todos=$request->todos;
        $todo->save();
        return redirect(route('todos'));
    }
    public function completedTodo($id){
        Session::flush('message','Tasks completed');
        $todo=Todo::find($id);
        $todo->status=1;
        $todo->save();
        return redirect()->back();
    }
}
