@extends('layouts.layout')

@section('content')

<div class="flex ">
      <div class="flex flex-col w-64 h-screen px-4 py-8 overflow-y-auto border-r">
        


        <div class="flex flex-col justify-between mt-6">
          <aside>
            <ul>
              <li>
                <a class="flex items-center  py-2 mt-2 text-gray-600 rounded-md bg-gray-200"  href="/staffs/dashboard">
                  <span class="mx-4 font-medium">Dashboard</span></span>
                </a>
              </li>

              <li>
                <a class="flex items-center  py-2 mt-2 text-gray-600 rounded-md hover:bg-gray-200"  href="/staffs/requests">
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
            
        </div>
      </div>

     

@endsection