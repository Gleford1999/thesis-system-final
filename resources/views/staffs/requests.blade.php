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
                <a class="flex items-center  py-2 mt-2 text-gray-600 rounded-md bg-gray-200"  href="/staffs/requests">
                  <span class="mx-4 font-medium">List of Request</span>
                </a>
              </li>

              <li>
                <a class="flex items-center  py-2 mt-2 text-gray-600 rounded-md hover:bg-gray-200"  href="/staffs/approved-requests">
                  <span class="mx-4 font-medium">Approved Requests</span>
                </a>
              </li>
            </ul>

          </aside>
          
        </div>
      </div>
      <div class="w-full h-full p-4 m-8 overflow-y-auto">
        <div class="flex items-center justify-center ">
            <form action="{{ route ('staffs.requests') }}" method="get">
              @csrf
                <table>
                    <thead>
                        <tr>
                            <th class="border text-center px-8 py-4"> Transaction Number </th>
                            
                            <th class="border text-center px-8 py-4"> Name </th>
                            <th class="border text-center px-8 py-4"> Purpose </th>
                            <th class="border text-center px-8 py-4"> Transaction Mode </th>
                            <th class="border text-center px-8 py-4"> Receipt </th>
                            <th class="border text-center px-8 py-4"> Date Requested</th>
                            <th class="border text-center px-8 py-4"> Action </th>
                        </tr>

                        @foreach ($requests as $request)
                          <tr>
                            <td class="border text-center px-8 py-4"> {{$request->transaction_code}}  </td>
                            <td class="border text-center"> {{$request->firstName}} {{$request->lastName}}   </td>
                            <td class="border text-center px-8 py-4"> {{$request->purpose}}  </td>
                            <td class="border text-center px-8 py-4"> {{$request->transaction_mode}}  </td>
                            <td class="border text-center px-8 py-4"> {{$request->receipt}}  </td>
                            <td class="border text-center px-8 py-4"> {{$request->created_at}}  </td>
                            <td class="border text-center px-8 py-4"> 
                              <a href=" {{route ('staffs.approve', $request->id) }} " class=" btn bg-maroon-100 text-white"> Approve </a>
                              <a href="" class=" btn bg-maroon-100 text-white"> Reject </a>
                            </td>
                          </tr>
                        @endforeach
                        
                    </thead>
                </table>
                
            </form>
        </div>
      </div>

     

@endsection