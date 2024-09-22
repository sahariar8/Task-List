<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

use function Laravel\Prompts\text;

class TaskController extends Controller
{
    public function allTask(){
        $allTask = Task::latest()->get();
        return view('home',compact('allTask'));
    }
    public function Task($id){
        $singleTask = Task::findOrFail($id);
        return view('details',compact('singleTask'));
    }
    public function viewForm(){
        return view('taskAddForm');
    }

    public function newTask(Request $request){
        // dd($request->all());
        $validatedData = $request->validate([
            'title'=>'required',
            "short_description"=>'required|min:5|max:50',
            "long_description"=>'required|min:10|max:100'
        ]);

        $data = Task::create($validatedData);
        return redirect()->route('all-task')->with('message','Task Added Successfully');
    }

    public function editTask($id){
        $task = Task::findOrFail($id);
        return view('editTaskForm',compact('task'));
    }

    public function taskUpdate(Request $request,$id){

        $validatedData = $request->validate([
            'title'=>'required',
            "short_description"=>'required|min:5|max:50',
            "long_description"=>'required|min:10|max:100'
        ]);

        $task = Task::findOrFail($id);
        $task->update($validatedData);
        return redirect()->route('all-task')->with('message','Task Updated Successfully');


    }
}
