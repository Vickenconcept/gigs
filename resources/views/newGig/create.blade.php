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
        <!-- form -->
        <div class="w-full max-w-md mx-auto col-span-9">
        <form class=" shadow-md bg-white rounded-xl px-8 pt-6 pb-8 mb-4 " method="POST" action="{{url('/submit-form')}}">
        @csrf
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
            id="country"
          >
          <option value="" selected disabled class=" text-gray-700">Country</option>
            <option value="new_york">New York</option>
            <option value="los_angeles">Los Angeles</option>
            <option value="chicago">Chicago</option>
            <option value="Bedfordshire">Bedfordshire</option>
            <option value="Berkshire">Berkshire</option>
            <option value="Bristol">Bristol</option>
            <option value="Buckinghamshire">Buckinghamshire</option>
            <option value="Cambridgeshire">Cambridgeshire</option>
            <option value="Cheshire">Cheshire</option>
            <option value="Cornwall">Cornwall</option>
            <option value="Cumbria">Cumbria</option>
            <option value="Derbyshire">Derbyshire</option>
            <option value="Devon">Devon</option>
            <option value="Dorset">Dorset</option>
            <option value="Durham">Durham</option>
            <option value="East Sussex">East Sussex</option>
            <option value="Essex">Essex</option>
            <option value="Gloucestershire">Gloucestershire</option>
            <option value="Greater London">Greater London</option>
            <option value="Greater Manchester">Greater Manchester</option>
            <option value="Hampshire">Hampshire</option>
            <option value="Herefordshire">Herefordshire</option>
            <option value="Hertfordshire">Hertfordshire</option>
            <option value="Isle of Wight">Isle of Wight</option>
            <option value="Kent">Kent</option>
            <option value="Lancashire">Lancashire</option>
            <option value="Leicestershire">Leicestershire</option>
            <option value="Lincolnshire">Lincolnshire</option>
            <option value="Merseyside">Merseyside</option>
          </select>
        </div>
        <div class="w-full md:w-1/2 md:pl-2">
          <label class="block text-gray-400 font-normal mb-2" for="state/region">
            state/region
          </label>
          <select
            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            name="state_region"
            id="state_region"
          >
          <option value="" selected disabled class=" text-gray-700">State/Region</option>
          <option value="AL">Alabama</option>
    <option value="AK">Alaska</option>
    <option value="AZ">Arizona</option>
    <option value="AR">Arkansas</option>
    <option value="CA">California</option>
    <option value="CO">Colorado</option>
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="HI">Hawaii</option>
    <option value="ID">Idaho</option>
    <option value="IL">Illinois</option>
    <option value="IN">Indiana</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="MT">Montana</option>
    <option value="NE">Nebraska</option>
    <option value="NV">Nevada</option>
    <option value="NH">New Hampshire</option>
    <option value="NJ">New Jersey</option>
    <option value="NM">New Mexico</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="ND">North Dakota</option>
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
              placeholder="Add tags"
            />
          </div>
          <div class="flex row ">
            <div class="border-transparent text-xs  rounded-md px-3 py-2 text-white focus:outline-none focus:shadow-outline  w-1/2">
            <label class="block text-gray-400 font-normal mb-2" for="Mininum">
                Salary
                </label>
                <input
                  class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                  id="Mininum"
                  type="text"
                  name="minimum"
                  placeholder="mininum"
                />
              </div>
              <div class="border-transparent text-xs  rounded-md px-3 py-2 text-white focus:outline-none focus:shadow-outline  w-1/2">
            <label class="block text-gray-400 font-normal mb-2" for="Mininum">
                .
                </label>
                <input
                  class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                  id="maximum"
                  type="text"
                  name="maximum"
                  placeholder="maximum"
                />
              </div>
          </div>
            <div class="bg-blue-900 border-transparent text-xs w-1/2 rounded-md px-3 py-2">
              <input
                class=" border rounded w-full py-2 px-3 text-white"
                id="submit"
                type="submit"
                value="submit"
              />
            </div>
          </form>
        </div>
      </div>
      <!-- <a href="" class="bg-blue-900 border-transparent text-xs  rounded-md px-3 py-2 text-white focus:outline-none focus:shadow-outline"
        type="button">
        Continue
      </a> -->
    <!-- <div class="w-full max-w-md mx-auto col-span-9">
    <form class=" shadow-md bg-white rounded-xl px-8 pt-6 pb-8 mb-4 ">
          <div class="mb-4 flex flex-wrap">
            <div class="w-full md:w-1/2 md:pr-2 mb-4 md:mb-0">
              <label class="block text-gray-400 font-normal mb-2" for="Mininum">
              Salary
              </label>
              <input
                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="Mininum"
                type="text"
                placeholder="mininum"
              />
            </div>
            <div class="w-full md:w-1/2 md:pl-2">
              <label class="block text-gray-400 font-normal mb-2" for="maximunm">
                .
              </label>
              <input
                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="maximunm"
                type="text"
                placeholder="maximunm"
              />
            </div>
          </div>
          <div class="flex items-center justify-end">

            <a href="/create" class="mr-5 bg-white border-transparent text-xs  rounded-md px-3 py-2 text-gray-800 hover:text-white font-semibold hover:bg-blue-900 focus:outline-none focus:shadow-outline"
              type="button">
              Back
            </a>
            <a href="#" class="bg-blue-900 border-transparent text-xs  rounded-md px-3 py-2 text-white focus:outline-none focus:shadow-outline"
              type="button">
              Add gig
            </a>
          </form>
      </div> -->
  </section>
@endsection



