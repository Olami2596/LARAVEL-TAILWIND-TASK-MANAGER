<!DOCTYPE html>
<html>

<head>
  <title>Task Manager App</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="//unpkg.com/alpinejs" defer></script>
  {{-- <link rel="stylesheet" href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css"/> --}}
  {{-- blade-formatter-disable --}}
  <style type="text/tailwindcss">
  .btn {
    @apply rounded-md px-3 py-2 text-center font-medium bg-blue-600 text-slate-200 shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50 hover:text-blue-600
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
    <h1 class="mb-4 text-3xl underline font">@yield('title')</h1>
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
{{-- <div class="font-regular relative block w-full max-w-screen-md rounded-lg bg-green-500 px-4 py-4 text-base text-white" data-dismissible="alert"
>
  <div class="absolute top-4 left-4">
    <svg
      xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 24 24"
      fill="currentColor"
      aria-hidden="true"
      class="mt-px h-6 w-6"
    >
      <path
        fill-rule="evenodd"
        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
        clip-rule="evenodd"
      ></path>
    </svg>
  </div>
  <div class="ml-8 mr-12">
    <h5 class="block font-sans text-xl font-semibold leading-snug tracking-normal text-white antialiased">
      Success
    </h5>
    <p class="mt-2 block font-sans text-base font-normal leading-relaxed text-white antialiased">
      I don't know what that word means. I'm happy. But success, that goes
      back to what in somebody's eyes success means. For me, success is inner
      peace. That's a good day for me.
    </p>
  </div>
  <div
    data-dismissible-target="alert"
    data-ripple-dark="true"
    class="absolute top-3 right-3 w-max rounded-lg transition-all hover:bg-white hover:bg-opacity-20"
  >
    <div role="button" class="w-max rounded-lg p-1">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        class="h-6 w-6"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
        stroke-width="2"
      >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M6 18L18 6M6 6l12 12"
        ></path>
      </svg>
    </div>
  </div>
</div> --}}