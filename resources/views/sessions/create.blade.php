@extends('sessions.layout.layout')

@section('content')
<h2 class=" text-center text-gray-400 text-xl font-semibold my-8">Login</h2>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="style-none bg-red-100 px-3 py-5=">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif
<div class="max-w-md mx-auto my-5">
    <form method="POST" action="/login-user" class="shadow-md bg-white rounded-xl px-8 pt-6 pb-8 mb-4">
        @csrf
          <div class="mb-4 flex flex-wrap">
            <div class="w-full   mb-1">
              <label class="block text-gray-400 font-normal mb-2" for="email">
                email
              </label>
              <input
                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="email"
                type="email"
                name="email"
                placeholder="email"
              />
            </div>
            <div class="w-full   mb-1">
              <label class="block text-gray-400 font-normal mb-2" for="password">
                password
              </label>
              <input
                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="password"
                type="password"
                name="password"
                placeholder="password"
              />
            </div>
            <div class="w-full mb-5 mt-5">
        <div class="flex flex-wrap justify-between items-center">
          <div class="w-1/2 bg-blue-800">
            <input class="appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline" id="submit" type="submit" value="submit" />
          </div>
          <div class="relative b-0 r-0 text-right text-blue-700 text-xs">
            <p class=" inline">Don't have account? </p><a href="/" class="font-bold underline">signup</a>
          </div>
        </div>
      </div>
          </form>

@endsection



