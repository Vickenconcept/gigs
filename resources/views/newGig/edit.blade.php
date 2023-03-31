@extends('newGig.layout.layout')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="bg-red-100 p-2 font-xs body-font text-gray-400">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
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
        <!-- <h2>Edit</h2> -->
        <!-- form -->
        <div class="w-full max-w-md mx-auto col-span-9">
        <form class=" shadow-md bg-white rounded-xl px-8 pt-6 pb-8 mb-4 " method="POST" action="{{ route('newGig.update', $newGig->id) }}">
        @csrf
         @method('PUT')
          <div class="mb-4 flex flex-wrap">
            <div class="w-full md:w-1/2 md:pr-2 mb-4 md:mb-0">
              <label class="block text-gray-400 font-normal mb-2" for="Role">
                Role
              </label>
              <input
                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="Role"
                name="role"
                type="text"
                value="{{ $newGig->role }}"
                placeholder="Role"
              />
            </div>
            <div class="w-full md:w-1/2 md:pl-2">
              <label class="block text-gray-400 font-normal mb-2" for="Company">
                Company
              </label>
              <input
                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="Company"
                name="company"
                type="text"
                value="{{ $newGig->company }}"
                placeholder="Company"
              />
            </div>
          </div>
          <div class="mb-4 flex flex-wrap">
        <div class="w-full md:w-1/2 md:pr-2 mb-4 md:mb-0">
          <label class="block text-gray-400 font-normal mb-2" for="location">
            Location
          </label>
          <select
            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            name="country"
            value="{{ $newGig->country }}"
            id="country"
          >
          <option value="" selected disabled class=" text-gray-700">Country</option>
            <option value="new_york">New York</option>
            <option value="los_angeles">Los Angeles</option>
            <option value="chicago">Chicago</option>
          </select>
        </div>
        <div class="w-full md:w-1/2 md:pl-2">
          <label class="block text-gray-400 font-normal mb-2" for="state/region">
            state/region
          </label>
          <select
            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            name="state_region"
            value="{{ $newGig->state_region }}"
            id="state_region"
          >
          <option value="" selected disabled class=" text-gray-700">State/Region</option>
            <option value="us_number">US Number</option>
            <option value="international_number">International Number</option>
          </select>
        </div>
      </div>

          <div class="mb-4">
            <label class="block text-gray-400 font-normal mb-2" for="address">
              Address
            </label>
            <input
              class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
              name="address"
              id="address"
              type="text"
              value="{{ $newGig->address }}"
              placeholder="Enter Address"
            />
          </div>
          <div class="mb-4">
            <label class="block text-gray-400 font-normal mb-2" for="message">
              Add tags
            </label>
            <input
              class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
              name="tag"
              id="tag"
              type="text"
              value="{{ $newGig->tags }}"
              placeholder="Add tags"
            />
          </div>
          <div class=" flex row">
          <div class="w-1/2 md:pr-2 mb-4 md:mb-0">
              <label class="block text-gray-400 font-normal mb-2" for="Mininum">
              Salary
              </label>
              <input
                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="Mininum"
                type="text"
                value="{{ $newGig->minimum }}"
                placeholder="mininum"
              />
            </div>
            <div class="w-1/2 md:pl-2">
              <label class="block text-gray-400 font-normal mb-2" for="maximunm">
                .
              </label>
              <input
                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="maximunm"
                type="text"
                value="{{ $newGig->maximum }}"
                placeholder="maximunm"
              />
            </div>
          </div>
          <div class="bg-blue-900 border-transparent text-xs  rounded-md px-3 py-2 w-1/2 mt-2">
              <input
                class=" border rounded w-full py-2 px-3 text-white"
                id="submit"
                type="submit"
                value="update"
              />
            </div>
            <!-- <a href="" class="bg-blue-900 border-transparent text-xs  rounded-md px-3 py-2 text-white focus:outline-none focus:shadow-outline"
              type="button">
              Continue
            </a> -->
          </form>
      </div>
    </div>

  </section>
@endsection



