@extends('layouts.layout')

@section('content')

<div class="flex ">
      <div class="flex flex-col w-64 h-screen px-4 py-8 overflow-y-auto border-r">
        


        <div class="flex flex-col justify-between mt-6">
          <aside>
            <ul>
              <li>
                <a class="flex items-center justify-center px-4 py-2 text-gray-600 hover:bg-gray-200 rounded-md " href="/students/dashboard">
                  <span class="mx-4 font-medium">Dashboard</span>
                </a>
              </li>
              
              <li>
                <a class="flex items-center justify-center px-4 py-2 text-gray-600  bg-gray-200  rounded-md" href=" /students/request ">Request TOR</a> 
                </li>
             

              

              <li>
                <a class="flex items-center justify-center px-4 py-2 text-gray-600 rounded-md hover:bg-gray-200"  href="/students/request-list">
                  

                  <span class="mx-4 font-medium">List of Request</span>
                </a>
              </li>
            </ul>

          </aside>
          
        </div>
      </div>
      <div class="w-full h-full p-4 m-8 overflow-y-auto">
        
        <form action="{{ route ('students.request') }}" method="post">
            @csrf
            <div class="mt-1 ml-2 flex items-center justify-left  border-4 border-dotted">
                <h2 class="ml-8 text-lg">Request for Transcript of Record</h2>
            </div>

            <div class="mt-2 ml-2 flex items-center justify-center ">
                <table class=" shadow-lg bg-white border-separate ">
                    <thead class="m-8">
                        <tr>
                            <th class="border text-left px-8 py-4"> Student ID</th> <td  class="border px-8 py-4"> {{  $student->student_id }} </td>
                        </tr>
                        <tr>  
                            <th class="border text-left px-8 py-4">Full Name</th> <td  class="border px-8 py-4">{{Auth::user()->firstName}} {{Auth::user()->middleName}} {{Auth::user()->lastName}}</td>
                        </tr>
                        <tr>
                            <th class="border text-left px-8 py-4">Address</th> <td name="address" class="border px-8 py-4">{{Auth::user()->address}}</td>
                        </tr>
                        <tr>
                            <th class="border text-left px-8 py-4">Course</th> <td name="course" class="border px-8 py-4"> {{$student->course}} </td>
                        </tr>
                    </thead>
                </table>
            </div>

            <div class="flex items-center justify-center">

                    <div class="mt-4 ml-2 px-2">
                        <label  for="purpose">Purpose:</label>
                        <select class=" w-2/4" name="purpose" id="purpose">
                            <option value="Graduate Credential">Graduate Credential</option>
                            <option value="Mock board Requirement">Mock Board Requirement</option>
                            <option value="Transferee Requirement">Transferee Requirement</option>
                        </select>
                    </div>
                
                    <div class="mt-4 ml-2 px-2">
                            <label  for="mode">Mode of Transaction: </label>
                            <select  name="mode" id="mode">
                                <option value="normal">Normal</option>
                                <option value="rush">Rush</option>
                            
                            </select>
                    </div>
              </div>
                
              <div class="border-4 border-maroon mt-4">
                <div class="flex items-center justify-center mt-4">
                  <h1><strong> Receipt Information </strong></h1>
              </div>

              <div class="mt-4 flex items-center justify-center">
                  <div class="px-4">
                    <label for="receipt_num"> Receipt Number: </label>
                    <input type="text" name="receipt_num" required>

                    <label for="receipt_num"> Amount of Payment: </label>
                    <input type="text" name="payment_amount">
                  </div>
              </div>

              <div class=" py-4 flex items-center justify-center">
                <label for="receipt_num"> Date of Payment: </label>
                <input type="date" name="payment_date" required>
              </div>

              </div>

                <div class="mt-4 flex items-center justify-center">
                <button type="submit" class="bg-maroon-100 ml-4 px-4 py-2 rounded-md-1 text-white">Submit Request</button>
                </div>
        </form>
        
      </div>
@endsection