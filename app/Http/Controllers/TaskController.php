<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $title = $request->input('title');
        $filter = $request->input('filter', '');

        $tasks = Task::when($title, fn ($query, $title) => $query->title($title));

        $tasks = match ($filter) {
            'completed' => $tasks->completed(),
            'not_completed' => $tasks->notCompleted(),
            default => $tasks->latest()
        };

        // Fetch paginated tasks
        $tasks = $tasks->paginate(10);

        return view('index', ['tasks' => $tasks]);
    }

    public function create()
    {
        return view('create');
    }

    public function edit(Task $task)
    {
        return view('edit', compact('task'));
    }

    public function show(Task $task)
    {
        return view('show', compact('task'));
    }

    public function store(TaskRequest $request)
    {
        $task = Task::create($request->validated());
        return redirect()->route('tasks.show', $task->id)->with('success', 'Task created successfully!');
    }

    public function update(Task $task, TaskRequest $request)
    {
        $task->update($request->validated());
        return redirect()->route('tasks.show', $task->id)->with('success', 'Task updated successfully!');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully!');
    }

    public function toggleComplete(Task $task)
    {
        $task->toggleComplete();
        return redirect()->back()->with('success', 'Task completed successfully!');
    }
}
