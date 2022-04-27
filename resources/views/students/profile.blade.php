@extends ('layouts.layout')

@section('content')

    <form action="{{ route ('student.update') }}" method="post">
        @csrf
        @method('PUT')
        <h1 class="flex items-center justify-center">Account Information</h1>
            
            <div>
                <div>
                    <label for="student_id"> Student Id:</label>
                    <input type="text" name="student_id" value="{{ $student->student_id }}">
                </div>
        
                <div class="mt-4">
                    <label for="name">Name: </label>
                    <input type="text" name="firstName" value="{{ Auth::user()->firstName }}">
                    <input type="text" name="middleName" value="{{ Auth::user()->middleName }}">
                    <input type="text" name="lastName" value="{{ Auth::user()->lastName }}">
                </div>
        
                <div class="flex mt-4">
                    <div class=" mr-2">
                        <label for="course">Course: </label>
                        <input type="text" name="course" value="{{ $student->course }}">
                    </div>
                
                    <div>
                        <label for="major">Major: </label>
                        <input type="text" name="major">
                    </div>
                </div>
        
                <div class=" border-t border-black-100 mt-4">
                    <div class="mt-4">
                        <label for="email"> Email: </label>
                        <input type="text" name="email" value="{{ Auth::user()->email }}">

                        <label for="birthday">Birthday:</label>
                        <input type="text" name="birthday" value="{{Auth::user()->birthday}}">
                    </div>
        
                    <div class="mt-4">
                        <label for="address"> Address: </label>
                        <input type="text" name="address" size="80" value="{{ Auth::user()->address }}">
                    </div>
        
                    <div class="mt-4">
                        <p>School Attended</p>
        
                        <label for="email"> Elementary: </label>
                        <input type="text" name="elementary_school">
                        <label for="elementary_yg"> Year Graduated </label>
                        <input type="text" name="elementary_yg">
                    </div>
        
                    <div class="mt-4"></div>
                        <label> High School: </label>
                        <input type="text" name="high_school">
                        <label for="elementary_yg"> Year Graduated </label>
                        <input type="text" name="highschool_yg">
                    </div>
                </div>
                
                <div class="flex items-center justify-center mt-4">
                    <button type="submit" class="bg-maroon-100 text-white px-2">Update Profile</button>
                </div>
                
            </div>
    </form>

@endsection