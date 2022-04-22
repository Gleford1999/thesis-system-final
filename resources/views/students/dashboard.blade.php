@extends('layouts.layout')

@section('content')

<div class="flex ">
      <div class="flex flex-col w-64 h-screen px-4 py-8 overflow-y-auto border-r">
        


        <div class="flex flex-col justify-between mt-6">
          <aside>
            <ul>
              <li>
                <a class="flex items-center px-4 py-2 justify-center text-gray-700 bg-gray-200  rounded-md " href="students/dashboard">
                  <span class="mx-4 font-medium">Dashboard</span>
                </a>
              </li>
              
              <li>
                <a class="flex items-center justify-center px-4 py-2 text-gray-700 hover:bg-gray-200  rounded-md " href=" /students/request ">Request TOR</a> 
              </li>
            
              <li>
                <a class="flex items-center px-4 py-2 text-gray-600 rounded-md hover:bg-gray-200"  href="/students/request-list">
    
                  <span class="mx-4 font-medium">List of Request</span>
                </a>
              </li>
            </ul>

          </aside>
          
        </div>
      </div>
      <div class="w-full h-full p-4 m-8 overflow-y-auto">
        <div class="flex items-center justify-center p-40 border-4 border-dotted">

        </div>
      </div>

@endsection