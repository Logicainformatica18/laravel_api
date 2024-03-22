<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $task =Task::all();
     return $task;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $task = new Task;

        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->save();

        return response()->json([
            'message' => 'Task created successfully',
            'task' => $task
        ]);
    }
    public function count()
    {
        return Task::all()->count();
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Task::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $task = Task::findOrFail($id);
        
        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->save();

        return response()->json([
            'message' => 'Task created successfully',
            'task' => $task
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return 204;
    }
}
