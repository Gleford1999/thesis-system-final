<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate TOR</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        .center {
            margin-left: auto;
            margin-right: auto;
            border-collapse: collapse;
        }
        
        table {
            width: 80%;
            border-collapse: collapse;
            border: 3px solid black;
        }
        th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
    </style>
    @include('layouts.navigation')
</head>
<body>
    <div class="flex items-center justify-center mt-4">
        <!-- <img class=" px-1 mt-4" src="/img/logo (2).png" alt="" style="width: 5%;"> -->
        <h1 style="font-size: large" class="px-2 mt-4">Colegio De San Gabriel Arcangel</h1> 
    </div>
    
    <div class="flex items-center justify-center">
        <p style="font-size: small;">OFFICE OF THE COLLEGE REGISTRAR</p>
    </div>

    <div class="flex items-center justify-center">
        <p style="font-size: small;">City of San Jose Del Monte Bulacan</p>
    </div>

    <div class=" bg-gray-200 " style="text-align: center;">
       <p> <strong>OFFICIAL TRANSCRIPT OF RECORDS</strong>  </p> 
    </div>

    <div class=" px-4 mt-4">
        <label> Student Name : <strong>{{$details->name}}</strong></label> </br>
        <label> Home Address : {{$details->address}}</label> </br>
        <label> Date of Admission : {{$details->admission_date}}</label> </br>
        <label> Elementary School : {{$details->elementary}}</label> </br>
        <label> Year Graduated : {{$details->elem_year}}</label> </br>
        <label> High School : {{$details->highschool}}</label> </br>
        <label> Year Graduated : {{$details->hs_year}}</label> </br>
        <label> Degree Earned : <strong>{{$details->degree}}</strong> </label> </br>
        <label> Major : <strong>{{$details->major}}</strong></label> </br>
    </div>

    <div style="text-align: center;" class="mt-4">
        
        <table class="center">
        <tr>
            <th colspan="2">Subjects</th>
            <th rowspan="2">Credits</th>
            <th rowspan="2">Grades</th>
            <th rowspan="2">Remarks</th>

        </tr>

        <tr>
            <td>Code</td>
            <td>Descriptive Title</td>
        </tr>

        <tbody>
            <tr>
                <td></td>
                <td>
                    <p style="font-size: medium;"><strong>Graduate of {{$details->degree}} <br> in COLEGIO DE SAN <br> GABRIEL ARCANGEL</strong></p> </br>
                    <p style="font-size: small;"><strong>Records from COLEGIO DE SAN GABRIEL ARCANGEL</strong></p> </br>
                    <p style="font-size: small;"><strong>2018-2019, FIRST SEMESTER</strong></p> </br>
                    
                </td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
           

            @foreach($tor as $tor)
             <tr>
                <td>{{$tor->code}}</td>
                <td>{{$tor->subject}}</td>
                <td>{{$tor->credits}}</td>
                <td>{{$tor->grades}}</td>
                <td>{{$tor->remarks}}</td>
            </tr>
            @endforeach

            <tr>
                <td></td>
                <td>
                    <p style="font-size: small;"><strong>2018-2019, SECOND SEMESTER</strong></p> </br>
                </td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            @foreach($tor1 as $tor)
             <tr>
                <td>{{$tor->code}}</td>
                <td>{{$tor->subject}}</td>
                <td>{{$tor->credits}}</td>
                <td>{{$tor->grades}}</td>
                <td>{{$tor->remarks}}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
        
    </div>

    <div style="text-align: center;" class="mt-4">
        
        <table class="center">
        <tr>
            <th colspan="2">Subjects</th>
            <th rowspan="2">Credits</th>
            <th rowspan="2">Grades</th>
            <th rowspan="2">Remarks</th>

        </tr>

        <tr>
            <td>Code</td>
            <td>Descriptive Title</td>
        </tr>

        <tbody>
            <tr>
                <td></td>
                <td>
                    <p style="font-size: small;"><strong>2019-2020, FIRST SEMESTER</strong></p> </br>
                </td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            @foreach($tor2 as $tor)
             <tr>
                <td>{{$tor->code}}</td>
                <td>{{$tor->subject}}</td>
                <td>{{$tor->credits}}</td>
                <td>{{$tor->grades}}</td>
                <td>{{$tor->remarks}}</td>
            </tr>
            @endforeach

            <tr>
                <td></td>
                <td>
                    <p style="font-size: small;"><strong>2019-2020, SECOND SEMESTER</strong></p> </br>
                </td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            @foreach($tor3 as $tor)
             <tr>
                <td>{{$tor->code}}</td>
                <td>{{$tor->subject}}</td>
                <td>{{$tor->credits}}</td>
                <td>{{$tor->grades}}</td>
                <td>{{$tor->remarks}}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
        
    </div>

    <div style="text-align: center;" class="mt-4">
        
        <table class="center">
        <tr>
            <th colspan="2">Subjects</th>
            <th rowspan="2">Credits</th>
            <th rowspan="2">Grades</th>
            <th rowspan="2">Remarks</th>

        </tr>

        <tr>
            <td>Code</td>
            <td>Descriptive Title</td>
        </tr>

        <tbody>
            <tr>
                <td></td>
                <td>
                    <p style="font-size: small;"><strong>2020-2021, FIRST SEMESTER</strong></p> </br>
                </td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            @foreach($tor4 as $tor)
             <tr>
                <td>{{$tor->code}}</td>
                <td>{{$tor->subject}}</td>
                <td>{{$tor->credits}}</td>
                <td>{{$tor->grades}}</td>
                <td>{{$tor->remarks}}</td>
            </tr>
            @endforeach

            <tr>
                <td></td>
                <td>
                    <p style="font-size: small;"><strong>2020-2021, SECOND SEMESTER</strong></p> </br>
                </td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            @foreach($tor5 as $tor)
             <tr>
                <td>{{$tor->code}}</td>
                <td>{{$tor->subject}}</td>
                <td>{{$tor->credits}}</td>
                <td>{{$tor->grades}}</td>
                <td>{{$tor->remarks}}</td>
            </tr>
            @endforeach

            <tr>
                <td></td>
                <td>
                    <p style="font-size: small;"><strong>2020-2021, SUMMER</strong></p> </br>
                </td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            @foreach($tor6 as $tor)
             <tr>
                <td>{{$tor->code}}</td>
                <td>{{$tor->subject}}</td>
                <td>{{$tor->credits}}</td>
                <td>{{$tor->grades}}</td>
                <td>{{$tor->remarks}}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
        
    </div>

    <div style="text-align: center;" class="mt-4">
        
        <table class="center">
        <tr>
            <th colspan="2">Subjects</th>
            <th rowspan="2">Credits</th>
            <th rowspan="2">Grades</th>
            <th rowspan="2">Remarks</th>

        </tr>

        <tr>
            <td>Code</td>
            <td>Descriptive Title</td>
        </tr>

        <tbody>
            <tr>
                <td></td>
                <td>
                    <p style="font-size: small;"><strong>2021-2022, FIRST SEMESTER</strong></p> </br>
                </td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            @foreach($tor7 as $tor)
             <tr>
                <td>{{$tor->code}}</td>
                <td>{{$tor->subject}}</td>
                <td>{{$tor->credits}}</td>
                <td>{{$tor->grades}}</td>
                <td>{{$tor->remarks}}</td>
            </tr>
            @endforeach

            <tr>
                <td></td>
                <td>
                    <p style="font-size: small;"><strong>2021-2022, SECOND SEMESTER</strong></p> </br>
                </td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            @foreach($tor8 as $tor)
             <tr>
                <td>{{$tor->code}}</td>
                <td>{{$tor->subject}}</td>
                <td>{{$tor->credits}}</td>
                <td>{{$tor->grades}}</td>
                <td>{{$tor->remarks}}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
        
    </div>
    
</body>
</html>