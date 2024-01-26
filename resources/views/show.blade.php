@extends('layouts.app')

<x-header />

@section('title', $task->title)

@section('content')
  <p class="mb-4 text-slate-700 text-lg">{{ $task->description }}</p>

  @if ($task->long_description)
    <p class="mb-4 text-slate-700 text-lg">{{ $task->long_description }}</p>
  @endif

  <p class="mb-4 text-slate-400 text-xs">Created {{ $task->created_at->diffForHumans() }} • Updated {{ $task->updated_at->diffForHumans() }}</p>

  <p class="mb-4">
    @if ($task->completed)
      <span class="font-medium text-green-500">Completed</span>
    @else
      <span class="font-medium text-red-500">Not completed</span>
    @endif
  </p>

  <div class="flex justify-between">

    <a href="{{ route('tasks.edit', ['task' => $task]) }}">
      <button class="btn">
        Edit
      </button>
    </a>
    

    <form method="POST" action="{{ route('tasks.toggle-complete', ['task' => $task]) }}">
      @csrf
      @method('PUT')
      <button type="submit" class="btn">
        Mark as {{ $task->completed ? 'not completed' : 'completed' }}
      </button>
    </form>

    <form action="{{ route('tasks.destroy', ['task' => $task->id]) }}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit" class="rounded-md px-3 py-2 text-center font-medium bg-red-500 text-slate-200 shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50 hover:text-red-500">Delete</button>
    </form>

  </div>
@endsection