@extends('layouts.app')

<x-header />

@section('title', 'The list of tasks')

@section('content') 

    <form method="GET" action="{{ route('tasks.index') }}">   
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input type="text" name="title" value="{{ request('title') }}" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search by title" required />
            <input type="hidden" name="filter" value="{{ request('filter') }}" />
            <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" style="right: 110px;">Search</button>
            <button class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" style="right: 20px; margin-right: 10px;"><a href="{{ route('tasks.index') }}" class="">Clear</a></button>
        </div>
    </form>

    <div class="filter-container mb-4 flex">
        @php
        $filters = [
            '' => 'Latest',
            'completed' => 'Completed',
            'not_completed' => 'Not Completed',
        ];
        @endphp

        @foreach ($filters as $key => $label)
        <a href="{{ route('tasks.index', [...request()->query(), 'filter' => $key]) }}"
            class="{{ request('filter') === $key || (request('filter') === null && $key === '') ? 'filter-item-active' : 'filter-item' }}">
            {{ $label }}
        </a>
        @endforeach
    </div>

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

