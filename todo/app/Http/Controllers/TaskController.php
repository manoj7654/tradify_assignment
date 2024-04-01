<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;
class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tasks=Tasks::all();
        return view("tasks.index",["tasks"=>$tasks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $title = $request->input('title');
        $description = $request->input('description');
        
        // $task_id = $request->input('task_id');
        $Tasks=new Tasks();
        $Tasks->title=$title;
        $Tasks->description=$description;
        
        // $Tasks->task_id=$task_id;
        // $Tasks->user_id=Auth::id();
        $Tasks->save();
        return redirect()->route('tasks.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tasks=Tasks::find($id);
        return view('tasks.show',['tasks'=>$tasks]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $task=Tasks::find($id);
        return view('tasks.edit',['task'=>$task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $task=Tasks::find($id);
        $title = $request->input('title');
        $description = $request->input('description');
       $task->title=$title;
       $task->description=$description;
       $task->save();
       return redirect()->route('tasks.show',['task'=>$task]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $task=Tasks::find($id);
        $task->delete();
        return redirect()->route('tasks.index');
    }
}
