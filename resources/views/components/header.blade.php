@php
    $isCreatePage = request()->routeIs('tasks.create');
    $isEditPage = request()->routeIs('tasks.edit');
@endphp

<header class="bg-teal-700 text-white sticky top-0 z-10">
    <section class=" container max-w-xl mx-auto py-4 flex justify-between items-center">
    <h1 class="text-3xl font-medium">
        <a href="{{ route('tasks.index') }}">Home</a>
    </h1>
    @if ($isCreatePage | $isEditPage)

        <button class="text-3xl font-medium" onclick="window.history.back()">Back</button>
    @else
        <h1 class="text-3xl font-medium">
            <a href="{{ route('tasks.create') }}">Add Task!</a>
        </h1>
    @endif
    </section>
</header>