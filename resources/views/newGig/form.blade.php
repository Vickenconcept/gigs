@extends('newGig.layout.layout')

@section('content')
<div class="text-gray-600 body-font">
            <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
              <h1 class="flex title-font font-bold text-xl text-gray-600 items-center mb-4 md:mb-0">
                  Gigs
              </h1>
              <div  class="md:ml-auto flex flex-wrap items-center justify-center">
                <!-- <a href="/gigs/create" class=" mr-5 bg-blue-900 border-transparent text-xs text-base rounded-md px-3 py-2 text-white ">New gig  +</a> -->
              </div>
          </div>
    </div>
  <div class="">
    <!-- main -->
    <section class="">
    <h1 class="text-gray-700 font-semibold px-5 py-4">New gig</h1>
      <div class=" grid grid-cols-12">
        <!-- card -->
        <div class=" px-5 col-span-3">
            <div class="bg-white rounded-md shadow-md p-8 flex flex-col">
                <a href="#" class="text-gray-400 hover:text-orange-500 hover:underline">&#9678; Basic data</a><br>
                <a href="#" class="text-gray-400 hover:text-orange-500 hover:underline">Renumeration</a>
            </div>
        </div>
        <!-- form -->
        <div class="w-full max-w-md mx-auto col-span-9">
        <!-- class=" shadow-md bg-white rounded-xl px-8 pt-6 pb-8 mb-4 "  -->
        <form method="POST" action="/submit-form">
        @csrf
          <div class="mb-4 flex flex-wrap">
            <div class="w-full md:w-1/2 md:pr-2 mb-4 md:mb-0">
              <label class="block text-gray-400 font-normal mb-2" for="first-name">
                name
              </label>
              <input
                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="username"
                type="text"
                name="username"
                placeholder="Enter First Name"
              />
            </div>
            <div class="w-full md:w-1/2 md:pl-2">
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
            <div class="w-full md:w-1/2 md:pr-2 mb-4 md:mb-0">
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
            <div class="w-full md:w-1/2 md:pl-2">
              <label class="block text-gray-400 font-normal mb-2" for="company">
                company
              </label>
              <input
                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="company"
                type="text"
                name="company"
                placeholder="company"
              />
            </div>
            <div class="w-full md:w-1/2 md:pl-2">
              <label class="block text-gray-400 font-normal mb-2" for="role">
                role
              </label>
              <input
                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="role"
                type="text"
                name="role"
                placeholder="role"
              />
            </div>
            <div class="w-full md:w-1/2 md:pl-2">
              <input
                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="submit"
                type="submit"
                value="submit"
              />
            </div>
          </form>
      </div>
    </div>
      </div>
  </section>
@endsection



