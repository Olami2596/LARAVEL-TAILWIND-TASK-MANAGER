<!DOCTYPE html>
<html>

<head>
  <title>📒-Task Manager App</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="//unpkg.com/alpinejs" defer></script>
  {{-- blade-formatter-disable --}}
  <style type="text/tailwindcss">
  .btn {
    @apply rounded-md px-3 py-2 text-center font-medium bg-blue-600 text-slate-200 shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50 hover:text-blue-600
  }

  .filter-container {
    @apply mb-4 flex space-x-2 rounded-md bg-slate-100 p-2;
  }

  .filter-item {
    @apply flex w-full items-center justify-center rounded-md px-4 py-2 text-center text-sm font-medium text-slate-500;
  }

  .filter-item-active {
    @apply bg-white shadow-sm text-slate-800 flex w-full items-center justify-center rounded-md px-4 py-2 text-center text-sm font-medium;
  }
  
  label {
    @apply block uppercase text-slate-700 mb-2
  }

  input, 
  textarea {
    @apply shadow-sm appearance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none mb-3
  }

  .error {
    @apply text-red-500 text-sm
  }
  </style>
  {{-- blade-formatter-enable --}}
  @yield('styles')
</head>

<body>
  <div class="container mx-auto mt-10 mb-10 max-w-lg">
    <h1 class="mb-4 text-3xl text-blue-600">@yield('title')</h1>
    <div x-data="{ flash: true }">
      @if (session()->has('success'))
        <div x-show="flash"
          class="relative mb-10 rounded border border-green-400 bg-green-100 px-4 py-3 text-lg text-green-700" role="alert">
          <strong class="font-bold">Success!</strong>
          <div>{{ session('success') }}</div>

          <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
              stroke-width="1.5" @click="flash = false"
              stroke="currentColor" class="h-6 w-6 cursor-pointer">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </span>
        </div>
      @endif
      @yield('content')
    </div>  
  </div>
</body>

</html>
