@extends('layouts.layout')

@section('content')
    <div class="flex ">
      <div class="flex flex-col w-64 h-screen px-4 py-8 overflow-y-auto border-r">
        


        <div class="flex flex-col justify-between mt-6">
          <aside>
            <ul>
              <li>
                <a class="flex items-center justify-center px-4 py-2 text-gray-700 hover:bg-gray-200  rounded-md " href="/students/dashboard">
                  <span class="mx-4 font-medium">Dashboard</span>
                </a>
              </li>
              
              <li>
                <a class="flex items-center justify-center px-4 py-2 text-gray-700 hover:bg-gray-200  rounded-md " href="/students/request">Request TOR</a>  
                </li>
              <li>
                <a class="flex items-center justify-center px-4 py-2 text-gray-600 bg-gray-200 rounded-md "  href="/students/request-list" >
                  <span class="mx-4 font-medium">List of Request</span>
                </a>
              </li>
            </ul>

          </aside>
          
        </div>
      </div>
      <div class="w-full h-full p-4 m-8 overflow-y-auto">
        <div class="mt-2 ml-2 flex items-center justify-center">
            <form action="{{ route ('students.request-list') }}" method="get">
                <table class="shadow-lg bg-white border-separate text-center">
                    <thead>
                        <tr>
                           
                            <th class="border text-left px-8 py-4"> Transaction Code</th>
                            <th class="border text-left px-8 py-4  "> Purpose </th>
                            <th class="border text-left px-8 py-4"> Status </th>
                            <th class="border text-left px-8 py-4"> Claim Schedule </th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach ($requests as $requests)
                      <tr>
                        <td class="border text-left px-8 py-4"> {{ $requests->transaction_code}} </td>
                        <td class="border text-left px-8 py-4"> {{ $requests->purpose}} </td>
                        <td class="border text-left px-8 py-4"> {{ $requests->status}} </td>
                        <td class="border text-left px-8 py-4"> {{ $requests->schedule}} </td>
                      </tr>
                     @endforeach
                            
                    </tbody>
                   
                </table>
            </form>
        </div>
      </div>


@endsection