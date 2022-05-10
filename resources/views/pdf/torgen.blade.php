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
    <div class="flex justify-center">
        <div style="margin-top: 30px;">
            <img src="/img/cdsga.png" alt="" style="height: 100px; width: 100px;">
        </div>

        <table class="justify-center mt-4" style="width: 400px; border-color:transparent;">
            <td class="justify-center" style="margin:auto;">
                <p style="font-size: small;">Republic of the Philippines</p>
                <h1 style="font-size: 25px;">Colegio De San Gabriel Arcangel</h1>
                <p style="font-size: small;">OFFICE OF THE COLLEGE REGISTRAR</p>
                <p style="font-size: small;">City of San Jose Del Monte Bulacan</p>
                <p class="bg-gray-200 border-4" style="border-color: black;"> <strong>OFFICIAL TRANSCRIPT OF RECORDS</strong> </p>
            </td>
        </table>

        <div style="margin-top: 30px;">
            <img src="/img/pacucoalogo.png" alt="" style="height: 100px; width: 100px;">
        </div>
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
    </div>

    <div style="text-align: center;" class="mt-4 py-4">
        
        <table class="center ">
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

            <tr>
                <td></td>
                <td>
                    <p style="font-size: medium;"><strong>Graduate of {{$details->degree}} <br> in COLEGIO DE SAN <br> GABRIEL ARCANGEL</strong></p> </br>
                    <p style="font-size: small;"><strong>Records from COLEGIO DE SAN GABRIEL ARCANGEL</strong></p> </br>
                  
                    
                </td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><strong>GRADING SYSTEM:</strong></td>
                <td colspan = "4"><strong>1.0</strong> = 95-100%; <strong>1.25</strong> = 93-94%; <strong>1.5</strong> = 90-92%; <strong>1.75</strong> = 87-89%; <strong>2.0</strong> = 85-86%; <strong>2.25</strong> = 83-84%
                    <strong>2.5</strong> = 80-82%; <strong>2.75</strong> = 77-79%; <strong>3.0</strong> = 75-76%; Below <strong>3.0</strong> = Failure; <strong>INC</strong> = Incomplete;
                    <strong>AW</strong> = Authorized Withdrawal; <strong>UW</strong> = Unauthorized Withdrawal
                </td>
            </tr>

            <tr>
                <td><strong>CREDITS:</strong></td>
                <td colspan = "4"><i>One college unit is at least seventeen (17) full hours of instruction in academic or professional subject within a semester.</i></td>
            </tr>

            <tr>
                <td><strong>REMARKS:</strong></td>
                <td colspan = "4" style="text-align: left; font-size: 20px;"><strong>FOR PERSONAL COPY ONLY</strong></td>
            </tr>
          
        </tbody>
        </table>
        <div class="px-5">
            <p>NOT VALID WITHOUT THE COLLEGE OFFICIAL SCHOOL SEAL</p>
            <table class="center" style="width: 1080px;">
                <td style="text-align: left; width: 200px;"><strong>S.O No.:</strong></td>
                <td style="text-align: left;"><strong>(NOT APPLICABLE)</strong></td>
            </table>
        </div>
    </div>
{{-- 
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
     --}}
</body>
</html>