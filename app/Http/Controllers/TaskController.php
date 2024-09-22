<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

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
}
