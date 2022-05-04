@extends('layouts.layout')

@section('content')

    <form action=" {{ route ('employee.register')}} " method="post">
        @csrf
        <h1 class="mt-4 flex items-center justify-center text-lg font-bold ">Registration</h1>

        <div class="flex items-center justify-center mt-4 text-lg font-bold bg-maroon-100 text-white">
            <h2 class="block">Personal Information</h2>
        </div>

        <div class="flex items-center justify-center ">
            <div class="mt-4 px-6">
                <label class="block" for="firstName">First Name</label> 
                <input class="bg-gray-100 py-1.5" type="text" name="firstName" value=" {{ old('firstName')}} " required autofocus>
            </div>

            <div class="mt-4 px-6"> 
                <label class="block" for="middleName">Middle Name </label> 
                <input class="bg-gray-100 py-1.5" type="text" name="middleName" value=" {{ old('middleName')}} " required>
            </div>
            
            <div class="mt-4 px-6">
                <label class="block" for="lastName">Last Name</label> 
                <input class="bg-gray-100 py-1.5" type="text" name="lastName" value=" {{ old('lastName')}} " required>
            </div> 
        </div>

            </div>

            <div class="flex items-center justify-center">
                <div class="mt-4 px-6">
                    <label for="complete_address" class="block"> Complete Address</label> 
                    <input type="text" name="address" class="bg-gray-100 py-1.5 border border-1.5" size="80" value=" {{ old('address')}} " required >
                </div>
            </div>

            <div class="flex items-center justify-center">
                <div class="mt-4 px-6 ">
                    <label for="birthday"> Birthday</label> 
                    <input type="date" name="birthday" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" value=" {{ old('birthday')}} " required>
                </div>
                <div class="mt-4 px-6">
                    <label for="gender" class="block ">Gender</label>
                    <select name="gender" class="py-1.5 border border-solid">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>

                <div class="mt-4 px-6">
                    <label for="civil_status" class="block">Civil Status</label>
                    <select name="civil_status" class="py-1.5 border border-solid">
                        <option value="single">Single</option>
                        <option value="married">Married</option>
                    </select>
                </div>

                <div class="mt-4 px-6 ">
                    <label for="role">Role</label>
                    <select name="role" class="bg-gray-100 border border-solid block ">
                        <option value="2">Staff</option>
                        <option value="3">Admin</option>
                    </select>
                </div>
            </div>

            <div class="flex items-center justify-center text-lg font-bold bg-maroon-100 text-white mt-4">
                <h2>Signup Credentials</h2>
            </div>

            <div class="flex items-center justify-center mt-4">
                
            <div class=" px-4">
                <label for="email">Email: </label>
                <input type="email" name="email" class="bg-gray-100 py-1.5 border border-solid" value=" {{ old('email')}} " required>
            </div>
            
            <div class="px-4">
                <label for="password">Password: </label>
                <input type="password" name="password" class="bg-gray-100 py-1.5 border border-solid" required>
            </div>
                
             
                <!-- Confirm Password -->
                <!-- <label for="password_confirmation">Confirm Password:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="bg-gray-100 py-1.5 border border-solid" required> -->
            </div>
        

            <div class="flex items-center justify-center">
                <div class="mt-4 px-4">
                    <button type="submit" class="bg-maroon-100 text-white py-1 px-6 rounded"> Submit</button>
                </div>
                <div class="mt-4 mb-4 py-4">
                    <a href="/employee/login" type="submit" class="bg-maroon-100 text-white py-1 px-6 rounded"> Cancel </a>
                </div>
            </div>

           @if($errors->any)
                @foreach ($errors->all() as $error)
                            <li class="text-red text-xs mt-1 px-4">{{$error}}</li>
                @endforeach
           @endif
            
           
    </form>
   
@endsection