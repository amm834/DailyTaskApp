<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;


class Taskcontroller extends Controller
{
  public function index(){
    $tasks = Task::all();
      return view('tasks',compact('tasks'));

  }
  
  public function store(Request $request) {

    $this->validate($request, [
      'task' => 'required|max:100|min:2',
    ]);
    // Create via Eloquent Model
    Task::create($request->only('task'));

    return back();
  }

  public function UpdateTaskAsCompleted($id) {

    $task = Task::find($id)->update([
      'is_completed'=>1
      ]);
    return back();
  }



  public function UpdateTaskAsNotCompleted($id) {

    $task = Task::find($id)->update([
      'is_completed'=>0
      ]);
    return redirect()->back();

  }
  public function DeleteTask($id) {

    $task = Task::Find($id)->delete();
    return back();
  }

  public function UpdateTaskView($id) {

    $taskdata = Task::Find($id);

    return view('updatetask',compact('taskdata'));

  }
  public function updatetask(Request $request,$id) {

  $task = Task::find($id);
  $task->update($request->only('task'));
    return redirect('/tasks');
  }

}