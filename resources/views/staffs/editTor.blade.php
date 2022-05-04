@extends('layouts.layout')

@section('content')
    
<div class="flex ">
    <div class="flex flex-col w-64 h-screen px-4 py-8 overflow-y-auto border-r">
      


      <div class="flex flex-col justify-between mt-6">
        <aside>
          <ul>
            <li>
              <a class="flex items-center  py-2 mt-2 text-gray-600 rounded-md hover:bg-gray-200"  href="/staffs/dashboard">
                <span class="mx-4 font-medium">Dashboard</span></span>
              </a>
            </li>

            <li>
              <a class="flex items-center  py-2 mt-2 text-gray-600 rounded-md hover:bg-gray-200"  href="/staffs/requests">
                <span class="mx-4 font-medium">List of Request</span>
              </a>
            </li>

            <li>
              <a class="flex items-center  py-2 mt-2 text-gray-600 rounded-md hover:bg-gray-200"  href="{{ route ('staffs.approvedList')}}">
                <span class="mx-4 font-medium">Approved Requests</span>
              </a>
            </li>

            <li>
              <a class="flex items-center  py-2 mt-2 text-gray-600 rounded-md bg-gray-200"  href="{{ route ('staffs.records')}}">
                <span class="mx-4 font-medium">TOR Records</span>
              </a>
            </li>
          </ul>

        </aside>
        
      </div>
    </div>
    <div class="w-full h-full p-4 m-8 overflow-y-auto">

      <div class="flex items-center justify-center bg-maroon-100 text-white text-lg font-bold">
          <h1 class=" font-bold"> Edit Subject and Grades </h1>
      </div>

      <div class="flex items-center justify-center">
      <div class="mt-4">
              <table class="auto">
                  <thead>
                      <tr>
                          <th class="border text-center px-8 py-4">Code</th>
                          <th class="border text-center px-8 py-4">Subject</th>
                          <th class="border text-center px-8 py-4">Grades</th>
                          <th class="border text-center px-8 py-4">Remarks</th>
                          <th class="border text-center px-8 py-4">Action</th>
                      </tr>

                    @foreach ($torDetails as $torDetail)
                   {{ $torDetail->to_r[1]->code }}
                    {{-- <tr>
                        <td class="border text-center px-8 py-4"> {{ $torDetail->to_r->code }} </td>
                        <td class="border text-center px-8 py-4">  </td>
                        <td class="border text-center px-8 py-4">  </td>
                        <td class="border text-center px-8 py-4">  </td>
                        <td class="border text-center px-8 py-4">  
                          <a href="" class="bg-maroon-100 text-white px-2 py-3 rounded-md">Edit</a>
                        </td>
                    </tr> --}}
                    @endforeach                      
                      
                
                  </thead>
              </table>
          </div>

      </div>
      <div class="flex items-center justify-center mt-4">
        <a href="{{ route ('staffs.records')}}" class="bg-maroon-100 text-white rounded-md">Back to Records</a>
    </div>
    </div>
    
    


@endsection