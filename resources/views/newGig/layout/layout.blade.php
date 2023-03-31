<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>VickenConcept</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- <script src="{{ mix('js/app.js') }}"></script> -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" /> -->
        <script src="https://kit.fontawesome.com/e7876e48e2.js" crossorigin="anonymous"></script>
        <!-- @vite('resources/css/app.css') -->
    </head>
    <body class="antialiased bg-gray-50">
<div class="w-full grid grid-cols-12">
  <div class="col-span-3 ">
  <!-- <span
      class="absolute text-white text-4xl top-5 left-4 cursor-pointer"
    >
      <i class="bi bi-filter-left px-2 bg-gray-200 rounded-md"></i>
    </span> -->
    <div
      class="sidebar fixed top-0 bottom-0 lg:left-0 p-2 w-[300px] overflow-y-auto text-center bg-white"
    >
      <div class="text-gray-100 text-xl">
        <div class="p-2.5 mt-1 flex items-center">
          <i class="bi bi-app-indicator px-2 py-2 rounded-md bg-yellow-400"></i>
          <h1 class="font-bold text-gray-600 text-[20px] ml-3">test</h1>
          <!-- <i
            class="bi bi-x cursor-pointer ml-28 lg:hidden"
          ></i> -->
        </div>
        <div class="my-2 bg-gray-600 h-[1px]"></div>
      </div>
      <div
        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-yellow-100 text-gray-400"
      >
      <i class="bi bi-box-arrow-in-right fa-sharp fa-solid fa-house"></i>
        <span class="text-[12px] ml-4  font-semibold">Dashboard</span>
      </div>
      <div
        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-yellow-100 text-yellow-400"
      >
      <i class="fa-sharp fa-solid fa-arrow-right-to-city"></i>
        <span class="text-[12px] ml-4  font-semibold">Gigs</span>
      </div>
      <div
        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-yellow-100  text-gray-400 "
      >
      <i class="fa-sharp fa-solid fa-building"></i>
        <span class="text-[12px] ml-4 font-semibold">Company</span>
      </div>
      <div
        class="p-2.5 mt-3 flex items-center text-gray-400 rounded-md px-4 duration-300 cursor-pointer hover:bg-yellow-100 "
      >
        <i class=" fa-solid fa-user"></i>
        <span class="text-[12px] ml-4  font-semibold">Amount</span>
      </div>
      <div
        class="p-2.5 mt-3 flex items-center text-gray-400 rounded-md px-4 duration-300 cursor-pointer hover:bg-yellow-100 "
      >
        <!-- <i class=" fa-solid fa-user"></i> -->
        <a href="logout" class="text-[12px] ml-4  font-semibold">Logout</a>
      </div>
    </div>
  </div>
  <div class=" col-span-9">
    <!-- header -->
    <div class="">
    <div class="text-gray-600 body-font">
  <div class="container mx-auto flex flex-wrap px-5 py-3 flex-col md:flex-row items-center">
      <form class="flex text-sm font-normal w-[350px] items-center text-gray-500 mb-4 md:mb-0">
      <div class="relative w-full">
        <input type="search" id="search" name="search" placeholder="Search" class="w-full bg-transpaent rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 pl-10 leading-8 transition-colors duration-200 ease-in-out">
        <div class="absolute top-0 left-0 flex items-center h-full px-3">
          <svg class="w-6 h-6 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M22 22L15.5 15.5M17 10.5C17 13.5376 14.5376 16 11.5 16C8.46243 16 6 13.5376 6 10.5C6 7.46243 8.46243 5 11.5 5C14.5376 5 17 7.46243 17 10.5Z"></path></svg>
        </div>
      </div>
    </form>
    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
    @if( auth()->check() )
                    <a class="nav-link flex  font-medium text-xs text-gray-300 items-center mb-4 md:mb-0 mr-2 uppercase" href="#">welcome {{ auth()->user()->name }}</a>

            @endif
      <a href="#" class="mr-5 hover:text-gray-900"><i class="fa-regular fa-bell"></i></a>
      <a href="#" class="mr-5 hover:text-gray-900"><i class="fa-regular fa-envelope"></i></a>
      <a href="#" class="mr-5 hover:text-gray-900"><i class="fa-regular fa-star"></i></a>
      <a href="#" class="mr-5 hover:text-gray-900 "><img src="data:image/jpeg;base64,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" class="border cover rounded-xl w-8 h-8" alt="avater"></a>
    </nav>
  </div>
</div>
</div>
      @yield('content')
      </div>

    </div>
    </body>
</html>
