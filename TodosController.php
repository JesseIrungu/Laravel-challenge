<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todos;
use Session;
use Hash;
use Validator;
use Auth;
use DB;

class TodosController extends Controller
{
    public function todos()
    {
        
        return view('todos');
    }

    public function addTask(Request $request)
    {
     todos::create([
         'taskname'=> $request ->taskname,
         'completed'=> $request ->completed,
     ]);
     return back()->with('success','Task added successfully');
}

public function listTasks()
{
    $todos = DB::table('todos') ->get();
    return view ('readtasks', compact ('todos'));
}

public function updateTask($id)
{
    $todos = DB::table('todos') ->where('id', $id) ->first();
    return view('updatetask', compact('todos'));
}

public function editTask(Request $request)
{
    DB::table('todos') -> where('id', $request->id) ->update([
        'taskname' => $request ->taskname,
        'completed' => $request ->completed,
        
    ]);
    return back()->with('task_update','Updated Successfully');
}

public function deleteTask($id)
{
    DB::table('todos') -> where('id', $id) ->delete();
    return back()->with('task_delete','Deleted Successfully');
}

}
