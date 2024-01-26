@extends('layouts.app')

<x-header />

@section('title', 'The list of tasks')

@section('content') 

    @forelse ($tasks as $task)
        <div><a href="{{ route('tasks.show', ['task' => $task->id]) }}" @class(['my-5', 'text-green-400' => $task->completed])>{{ $task->title }}</a></div>
    @empty
        <div>There are no tasks</div>
    @endforelse

    @if ($tasks->count())
        <nav class="mt-6">
        {{ $tasks->links() }}
        </nav>
    @endif
@endsection

