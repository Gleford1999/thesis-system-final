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
                <a class="flex items-center  py-2 mt-2 text-gray-600 rounded-md "  href="/staffs/approved-requests">
                  <span class="mx-4 font-medium"> Approved Requests</span>
                </a>
              </li>

              <li>
                <a class="flex items-center py-2 text-gray-600 rounded-md hover:bg-gray-200"  href="/staffs/approved-requests">
                  <span class=" px-4 ml-4 font-medium"> - Normal </span>
                </a>
              </li>

              <li>
                <a class="flex items-center py-2 text-gray-600 rounded-md bg-gray-200"  href="/staffs/approved-requests-rush">
                  <span class=" px-4 ml-4 font-medium"> - Rush </span>
                </a>
              </li>

              <li>
                <a class="flex items-center  py-2 mt-2 text-gray-600 rounded-md hover:bg-gray-200"  href="{{ route ('staffs.records')}}">
                  <span class="mx-4 font-medium">TOR Records</span>
                </a>
              </li>
            </ul>

          </aside>
          
        </div>
      </div>
      <div class="w-full h-full p-4 m-8 overflow-y-auto">

        <div class="flex items-center justify-center bg-maroon-100 text-white text-lg font-bold">
            <h1 class=" font-bold"> Approved TOR </h1>
        </div>

        <div class="flex items-center justify-center mt-4 ">
            <form action="{{ route ('staffs.approvedList') }}" method="get">
              @csrf
              <table class="bg-white">
                    <thead>
                        <tr>
                            <th class="border text-center px-8 py-4"> Transaction Number </th>
                            <th class="border text-center px-8 py-4"> Name </th>
                            <th class="border text-center px-8 py-4"> Purpose </th>
                            <th class="border text-center px-8 py-4"> Transaction Mode </th>
                            <th class="border text-center px-8 py-4"> Action </th>
                        </tr>

                        @foreach ($requests as $request)
                          <tr>
                            <td class="border text-center px-8 py-4"> {{$request->transaction_code}}  </td>
                            <td class="border text-center"> {{$request->firstName}} {{$request->lastName}}   </td>
                            <td class="border text-center px-8 py-4"> {{$request->purpose}}  </td>
                            <td class="border text-center px-8 py-4"> {{$request->transaction_mode}}  </td>
                            <td class="border text-center px-8 py-4"> 
                              <a href=" {{ route ('staffs.tor', $request->id) }} " class=" btn bg-maroon-100 text-white rounded"> Process TOR </a>
                            </td>
                          </tr>
                        @endforeach
                        
                    </thead>
                </table>
            </form>
        </div>
      </div>

     

@endsection