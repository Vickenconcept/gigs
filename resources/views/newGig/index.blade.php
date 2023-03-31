

@extends('newGig.layout.layout')

@section('content')
<!-- @foreach($gigs as $gig)
<p>{{$gig->company}}</p>
<p>{{$gig->role}}</p>
<p>{{$gig->date}}</p>
<p>{{$gig->created_at}}</p><br>
@endforeach -->
<div class="container">
<div class="text-gray-600 body-font">
            <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
              <h1 class="flex title-font font-bold text-xl text-gray-600 items-center mb-4 md:mb-0">
                  Gigs
              </h1>
              <div  class="md:ml-auto flex flex-wrap items-center justify-center">
                <a href="/create" class=" mr-5 bg-blue-900 border-transparent text-xs rounded-md px-3 py-2 text-white ">New gig  +</a>
              </div>
          </div>
    </div>
      <div class="">
    <!-- main -->
    <section class="">
          <div class=" border-b ml-4 mr-10">
            <div class="body-font">
            <div class="container mx-auto flex flex-wrap pt-4 flex-col md:flex-row items-center">
              <div class="  flex title-font font-medium items-center text-gray-600 pb-3 pr-5 mb-4 md:mb-0 border-b-2 border-yellow-400  ">
                <p class="mr-2 ">All gigs</p>
                <span class="text-[9px] bg-yellow-400 border-transparent rounded-md px-2 py-1 text-white">30033</span>
              </div>
              <div class="md:ml-auto md:mr-auto flex flex-wrap title-font font-normal items-center text-gray-500 pb-3  text-base justify-center">
              <p class="mr-2 ">My gigs</p>
                <span class="text-[9px] text-yellow-400 border-transparent rounded-md px-2 bg-yellow-100 ">30033</span>
              </div>
              <div class="inline-flex title-font font-normal  items-center text-gray-500 pb-3 mt-4  md:mt-0">
              <p class="mr-2 ">Rejected gigs</p>
                <span class="text-[9px] text-yellow-400 border-transparent rounded-md px-2 py-1  bg-yellow-100 ">30033</span>
              </div>
            </div>
          </div>
        </div>
        <div class=" bg-red-500"></div>
      </section>
      <!-- ---- -->
      <section class="ml-4">
          <div class=" mr-10">
            <div class="body-font">
          <div class="grid grid-cols-6 gap-4 py-5">
          <div class="text-[12px] select-container">
            <select class="block w-full border border-gray-200 py-2 px-3 bg-transparent rounded-md" style="appearance:none; color:gray;">
            <option value="" selected disabled class=" text-gray-700">Freelance</option>
              <option>Option 1</option>
              <option>Option 2</option>
              <option>Option 3</option>
            </select>
          </div>
          <div class="text-[12px] select-container">
            <select class="block w-full border border-gray-200 py-2 px-3 bg-transparent rounded-md" style="appearance:none; color:gray;">
            <option value="" selected disabled class=" text-gray-700">Keywords</option>
              <option>Option 1</option>
              <option>Option 2</option>
              <option>Option 3</option>
            </select>
          </div>
          <div class="text-[12px] select-container">
            <select class="block w-full border border-gray-200 py-2 px-3 bg-transparent rounded-md" style="appearance:none; color:gray;">
            <option value="" selected disabled class=" text-gray-700">Location</option>
              <option>Option 1</option>
              <option>Option 2</option>
              <option>Option 3</option>
            </select>
          </div>
          <div class="text-[12px] select-container">
            <select class="block w-full border border-gray-200 py-2 px-3 bg-transparent rounded-md" style="appearance:none; color:gray;">
            <option value="" selected disabled class=" text-gray-700">Remote friendly</option>
              <option>Option 1</option>
              <option>Option 2</option>
              <option>Option 3</option>
            </select>
          </div>
          <div class="text-[12px] select-container">
            <select class="block w-full border border-yellow-400 py-2 px-3 bg-transparent rounded-md text-yellow-400" style="appearance:none;">
            <option value="" selected disabled class=" text-gray-700">Design</option>
              <option>Option 1</option>
              <option>Option 2</option>
              <option>Option 3</option>
            </select>
          </div>
          <div class="text-[12px] select-container">
            <select class="block w-full border border-gray-200 py-2 px-3 bg-transparent rounded-md" style="appearance:none; color:gray;">
            <option value="" selected disabled class=" text-gray-700">Contact</option>
              <option>Option 1</option>
              <option>Option 2</option>
              <option>Option 3</option>
            </select>
          </div>


          </div>

          </div>
        </div>
        <div class="pr-10">
            <table class="min-w-full divide-y divide-gray-200 table-auto border-separate border-spacing-y-2 ">
          <thead>
            <tr class="">
              <th scope="col" class="px-6 py-0 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
              <th scope="col" class="px-6 py-0 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
              <th scope="col" class="px-6 py-0 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Company</th>
              <th scope="col" class="px-6 py-0 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
              <th scope="col" class="px-6 py-0 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Salary</th>
              <th scope="col" class="px-6 py-0 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y my-3 divide-gray-200">
          @if(count($gigs) == 0)
    <tr class="">
        <td class="px-6 py-0 whitespace-nowrap text-xs font-bold text-gray-700  tracking-wider col-span-6">no data</td>
    </tr>
          @else
          @foreach($gigs as $gig)
  <tr class="  rounded-full ">
    <td class="px-6 py-4 whitespace-nowrap">
      <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 border-gray-50 transition duration-150 ease-in-out" />
    </td>
    <!-- <td class="px-6 py-0 whitespace-nowrap text-xs font-bold text-gray-700  tracking-wider">{{url('/dashboard/'.$gig->id)}}</td> -->
    <td class="px-6 py-0 whitespace-nowrap text-xs font-bold text-gray-700  tracking-wider">{{$gig->role}}</td>
    <td class="px-6 py-0 whitespace-nowrap text-xs font-medium text-gray-500  tracking-wider">{{$gig->company}}</td>
    <td class="px-6 py-0 whitespace-nowrap text-xs font-medium text-gray-500  tracking-wider">{{$gig->created_at}}</td>
    <td class="px-6 py-0 whitespace-nowrap text-xs font-medium text-gray-500  tracking-wider">{{$gig->minimum}} - {{$gig->maximum}}</td>
    <td class="px-6 py-0 whitespace-nowrap">
    <form method="POST" action="/dashboard/{{$gig->id}}">
    @csrf
    @method('DELETE')
    <button class="text-yellow-400 bg-yellow-50 rounded-md  font-normal py-1 px-5" name="submit" value="submit" type="submit">
        Delete
    </button>
    <span class="text-xs text-gray-300 underline font-normal "><a href="{{ url('edit', $gig->id,) }}">Edit</a></span>
    <!-- <span class="text-xs text-gray-300 underline font-normal "><a href="{{ url('edit', $gig->id, 'edit') }}">Edit</a></span> -->
</form>
    </td>
  </tr>
  @endforeach
  @endif
</tbody>

        </table>

        </div>
      </section>
  </div>
<!-- </div> -->
@endsection



