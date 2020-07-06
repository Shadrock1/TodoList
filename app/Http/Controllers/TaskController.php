<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index()
    {
        $tasks = Task::orderBy('created_at', 'asc')->get();
        return view('welcome', compact('tasks'));
    }


    public function create()
    {

    }


    public function store(Request $request)
    {
        $validator =  $this->validate($request, [
            'name' => 'required|max:255',
        ]);



        $task = new Task($validator);
        $task->save();

        return redirect('/');
    }


    public function show(Task $task)
    {
        //
    }


    public function edit(Task $task)
    {
        //
    }


    public function update(Request $request, Task $task)
    {
        //
    }


    public function destroy($id)
    {
        Task::destroy($id);
        return redirect('/');
    }
}
