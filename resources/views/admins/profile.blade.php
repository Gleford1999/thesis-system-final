@extends('layouts.layout')

@section('content')

<div class="flex" style="background-color: lightgray;">

    <div class="col flex rounded border-4 border-solid justify-center" 
        style="
            font-family: Century Gothic;
            
            width: 900px;
            height: 475px;
            position: relative;
            margin: 15px 200px;
            padding: 15px;
            border-radius: 10px;
            border-color: maroon;
            box-shadow: 10px 10px 15px rgba(0,0,0,0.5);">

        <div>
            <form action=" {{ route ('staffs.profileUpdate') }} " method="post">
                @csrf
                <div class="flex items-center">
                    <div class="mt-4 px-4">
                        <label for="student_id" class="block">Edit Details</label>
                        <input type="hidden" name="id" value=" {{ $user->id }} ">
                    </div>
                </div>

                <div class="flex items-center">
                    <div class="mt-4 px-4">
                        <label class="block" for="firstName">First Name</label>
                        <input class="bg-gray-100 py-1.5 rounded" type="text" name="firstName" value=" {{$user->firstName}} " required autofocus>
                    </div>
 
                    <div class="mt-4 px-4">
                        <label class="block" for="middleName">Middle Name </label>
                        <input class="bg-gray-100 py-1.5 rounded" type="text" name="middleName" value="{{$user->middleName}} " required>
                    </div>
           
                    <div class="mt-4 px-4">
                        <label class="block" for="lastName">Last Name</label>
                        <input class="bg-gray-100 py-1.5 rounded" type="text" name="lastName" value="{{$user->lastName}} " required>
                    </div>
                </div>

                <div class="flex items-center">
                    <div class="flex items-center justify-center">
                        <div class="mt-4 px-4 ">
                            <label for="birthday" class="block"> Birthday</label>
                            <input type="text" class="bg-gray-100 py-1.5 rounded" name="birthday" value="{{$user->birthday}} " required>
                        </div>
                        <div class="mt-4 px-4">
                            <label for="gender" class="block ">Gender</label>
                            <input type="text" class="bg-gray-100 py-1.5 rounded" name="gender" value="{{$user->gender}} " required>
                        </div>
                        <div class="mt-4 px-4">
                            <label for="civil_status" class="block">Civil Status</label>
                            <input type="text" class="bg-gray-100 py-1.5 rounded" name="status" value="{{$user->civil_status}} " required>
                        </div>
                    </div>
                </div>

                <div class="flex items-center ">
                    <div class="flex items-center justify-center">
                        <div class="mt-4 px-4">
                            <label for="complete_address" class="block">Complete Address</label>
                            <input type="text" name="address" class="bg-gray-100 py-1.5 border border-1.5 rounded" size="78" value="{{$user->address}} " required >
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex items-center">
                        <button type="submit" class="mt-8 px-3 flex bg-maroon-100 justify-center text-white rounded block" style="width: 100px; height: 30px; margin-right:50px; margin-left: 30%;">
                            Update
                        </button>
                        <a class=" mt-8 px-3 flex bg-maroon-100 justify-center text-white rounded block" style="width: 100px; height: 30px; margin-right: 50px; margin-left: 50px;" href="{{ route ('admins.dashboard') }}">
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