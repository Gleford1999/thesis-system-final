@extends('layouts.layout')

@section('content')

<div class="flex" style="background-color: lightgray;">

    <div class="col flex rounded border-4 border-solid justify-center" 
        style="
            font-family: Century Gothic;
            
            width: 1200px;
            height: 475px;
            position: relative;
            margin: 15px 90px;
            padding: 15px;
            border-radius: 10px;
            border-color: maroon;
            box-shadow: 10px 10px 15px rgba(0,0,0,0.5);">

        <div>
            <form action=" {{ route ('student.update') }} " method="post">
                @csrf
                <div class="flex items-center">
                    <div>
                        <input type="hidden" name="id" value=" {{ $user->id }} ">
                        <input type="hidden" name="id" value=" {{ $user->student->id }} ">

                    </div>
                </div>

                <div class="flex items-center">
                    <div class="mt-4 px-4">
                        <label class="block" for="firstName">First Name</label>
                        <input class="bg-gray-100 py-1.5 rounded" type="text" name="firstName" value="{{$user->firstName}}" required autofocus>
                    </div>
 
                    <div class="mt-4 px-4">
                        <label class="block" for="middleName">Middle Name </label>
                        <input class="bg-gray-100 py-1.5 rounded" type="text" name="middleName" value="{{$user->middleName}}" required>
                    </div>
           
                    <div class="mt-4 px-4">
                        <label class="block" for="lastName">Last Name</label>
                        <input class="bg-gray-100 py-1.5 rounded" type="text" name="lastName" value="{{$user->lastName}}" required>
                    </div>
                </div>
                
                <div class="flex items-center">
                    <div class="mt-4 px-4">
                        <label for="student_id" class="block">Student ID</label>
                        <input type="text" class="bg-gray-100 py-1.5 rounded" name="student_id" value="{{ $user->student->student_id }}" required>
                    </div>

                    <div class="mt-4 px-4">
                        <label for="course" class="block">Course</label>
                        <input type="text" class="bg-gray-100 py-1.5 rounded" name="course" value="{{ $user->student->course }}" style="width: 430px;" required>
                    </div>

            
                </div>
             
                <div class="flex items-center ">
                    <div class="flex items-center justify-center">
                        <div class="mt-4 px-4">
                            <label for="complete_address" class="block">Complete Address</label>
                            <input type="text" name="address" class="bg-gray-100 py-1.5 border border-1.5 rounded" size="78" value="{{ $user->address }}" required >
                        </div>
                    </div>
                </div>

                <div class="flex items-center">
                    <div class="flex items-center justify-center">
                        <div class="mt-4 px-4 ">
                            <label for="birthday" class="block"> Birthday</label>
                            <input type="text" class="bg-gray-100 py-1.5 rounded" disabled value="{{ $user->birthday }}" required>
                        </div>
                        <div class="mt-4 px-4">
                            <label for="gender" class="block ">Gender</label>
                            <input type="text" class="bg-gray-100 py-1.5 rounded" disabled value="{{ $user->gender }}" required>
                        </div>
                        <div class="mt-4 px-4">
                            <label for="civil_status" class="block">Civil Status</label>
                            <input type="text" class="bg-gray-100 py-1.5 rounded" name="status" value="{{ $user->civil_status }}" required>
                        </div>
                    </div>
                </div>

                <div class="flex items-center" 
                            style="padding: 5px 0px;
                            margin: 0px 0px">
                        <div class="mt-4 px-4 rounded" >
                            <label for="email"> Elementary: </label>
                            <input class="rounded bg-gray-100" size="30" type="text" name="elementary_school" value="{{ $user->student->elementary_school }}">
                        </div>

                        <div class="mt-4 px-4 rounded">
                            <label for="elementary_yg"> Year Graduated: </label>
                            <input class="rounded bg-gray-100" size="10" type="text" name="elementary_yg" value="{{ $user->student->elementary_yg }}">
                        </div>
                    </div>

                    <div class="flex">
                        <div class="mt-4 px-4 rounded">
                            <label> High School: </label>
                            <input class="rounded bg-gray-100" size="30" type="text" name="high_school" value="{{ $user->student->high_school }}">
                        </div>

                        <div class="mt-4 px-3">
                            <label> Year Graduated: </label>
                            <input class="rounded bg-gray-100 bg-gray-100" size="10" type="text" name="highschool_yg" value="{{ $user->student->highschool_yg }}">
                        </div>
                    </div>
                </div>

                <div>
                    <img class="border-4 border-solid rounded" src="/img/dashboard/user.png" alt="" style="margin-left: 50px; width: 90%; height: 80%; border-color:maroon;">

                    <div class=" mt-4 px-3 flex">
                        <button type="submit" class="mt-4 px-3 flex bg-maroon-100 justify-center text-white rounded" style="width: 100px; height: 30px; margin-right:50px; margin-left: 95px;">
                            Update
                        </button>
                        <a class=" mt-4 px-3 flex bg-maroon-100 justify-center text-white rounded" style="width: 100px; height: 30px; margin-right: 50px; margin-left: 50px;" href=" /students/dashboard ">
                            Back
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>   
    </div>
</div>

</div>
@endsection