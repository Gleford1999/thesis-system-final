<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>TOR Generator</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/subjects.js') }}" defer></script>
</head>
<body>
    <form action=" {{ route ('staffs.saveTOR') }} " method="post">
        @csrf
        <div class="flex items-center justify-center py-4" style="font-size:25px; background-color: maroon; color: white;">
            <h1> Subject and Grade Profiling </h1>
        </div>
        
       <div class="justify-center border-4 border-solid rounded" style="margin: auto; margin-top: 20px; margin-bottom: 20px; border-radius: 10px; border-color: maroon; width: 900px; height: 570px;">
            
            <div class="flex">
                <div style="padding: 5px; margin:5px;">
                    <label> Student Name: </label>
                    <input type="text" name="name" value="{{ $requests->firstName }} {{ $requests->middleName}} {{ $requests->lastName }} " size="43" style="margin-left: 72px;"> <br>
                </div>
            </div>

            <div class="flex">
                <div style="padding:5px; margin:5px;">
                    <label> Home Address: </label> 
                    <input type="text" name="address" value="{{ $requests->address }}" size="76" style="margin-left: 70px;"> <br>
                </div>
            </div>

            <div class="flex">
                <div style="padding:5px;  margin:5px;">
                    <label for="date" > Date of Admission: </label>
                    <input type="text" name="admission_date" required size="43" style="margin-left: 45px;">
                </div>
            </div>

            <div class="flex">
                <div style="padding:5px; margin:5px;">
                    <label> Entrance Credentials: </label>
                    <input type="text" name="credentials" value="TOR" size="43" style="margin-left: 24px;">
                </div>
            </div>

            <div class="flex">
                <div style="padding:5px; margin:5px;">
                    <label for="elementary"> Elementary School: </label> 
                    <input type="text" name="elementary" value="{{ $requests->elementary_school }}" size="43" style="margin-left: 40px;"><br>
                </div>
            </div>

            <div class="flex">
                <div style="padding:5px; margin:5px;">
                    <label for="elem_year"> Year Graduated: </label> 
                    <input type="text" name="elem_year" value=" {{ $requests->elementary_yg }} " size="43" style="margin-left: 62px;"><br>
                </div>
            </div>

            <div class="flex">
                <div style="padding:5px; margin:5px;">
                    <label for="highschool" > High School: </label> 
                    <input type="text" name="highschool" value="{{ $requests->high_school }}" size="43" style="margin-left: 88px;"><br>
                </div>
            </div>

            <div class="flex">
                <div style="padding:5px; margin:5px;">
                    <label for="hs_year"> Year Graduated: </label> 
                    <input type="text" name="hs_year" value="{{ $requests->highschool_yg }}" size="43" style="margin-left: 62px;"><br>
                </div>
            </div>

            <div style="padding:5px; margin:5px;">
                <label> Degree Earned: </label>
                <input type="text" name="degree" id="course" value="{{ $requests->course }}" size="43" style="margin-left: 65px;"> <br>
            </div>

        </div>


        <div class="flex items-center justify-center" style="font-size:25px; background-color: maroon; color: white;">
            <h1>First Year</h1>
        </div>

        <div class="flex items-center justify-center mt-4" style="background-color: lightgray;">
            <div class="flex items-center">
                <div>
                    <label> School Year: </label>
                    <select name="school_year1" id="school_year1">
                        @foreach($school_years as $school_year)
                        <option value="{{ $school_year }}">{{ $school_year }}</option>
                        @endforeach
                    </select>
                    <label>Sem</label>
                    <select name="sem1" id="sem1">
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center mt-4">
            <div class="border-black-100 border-4">
                <table>
                    <thead id="thead1">
                            

                    </thead>
                </table>
            </div>
        </div>

        <!-- 2nd Table - First Year -->

        <div class="flex items-center justify-center mt-4" style="background-color: lightgray;">
            <div class="flex items-center">
                <div>
                    <label> School Year: </label>
                    <select name="school_year1" id="school_year2">
                        @foreach($school_years as $school_year)
                        <option value="{{ $school_year }}">{{ $school_year }}</option>
                        @endforeach
                    </select>
                    <label>Sem</label>
                    <select name="sem2" id="sem2">
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-center mt-4">
            <div class="border-black-100 border-4 text-center">
                <table>
                    <thead id="thead2">
                        
                    </thead>
                </table>
            </div>
        </div>

        

        <div class="flex items-center justify-center mt-4 mb-2">
            <button type="submit" class="bg-maroon-100 text-white px-5 rounded-md"> Save </button>
            <a href="{{ route('staffs.approvedList') }}" type="submit" class="bg-maroon-100 text-white px-5 rounded-md ml-1"> Back </a>
        </div>
    </form>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>



</html>