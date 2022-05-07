<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request)
    {
        // REFACTORED: used model to place validation rules instead
        // $validatedData = $request->validate(['title' => 'required']);

        $task = Task::create([
            'title' => $request->title,
            'project_id' => $request->project_id,
        ]);

        // NOTE: ProjectController response is different
        // return response()->json('Task created!');
        
        return $task->toJson();
    }
    public function markAsCompleted(Task $task)
    {
        $task->is_completed = true;
        $task->update();

        return response()->json('Project updated!');

    }
}
