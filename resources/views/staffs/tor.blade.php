<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOR Generator</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <form action=" {{ route ('staffs.saveTOR') }} " method="post">
        @csrf
        <div class="flex items-center justify-center py-4 ">
            <h1> Colegio De San Gabriel Arcangel </h1>
        </div>
        
        <div class="justify-center">
            <label> Student Name: </label>
            <input type="text" name="name" value="{{ $requests->firstName }} {{ $requests->middleName}} {{ $requests->lastName }}"> <br>
            
            <label> Home Address: </label> 
            <input type="text" name="address" value="{{ $requests->address }}" size="80"> <br>

            <label for="date" > Date of Admission: </label> 
            <input type="text" name="admission_date" required> 

            <label> Entrance Credentials: </label>
            <input disabled type="text" name="credentials" value="TOR">  <br>

            <label for="elementary"> Elementary School: </label> 
            <input type="text" name="elementary" value="{{ $requests->elementary_school }}"><br>

            <label for="elem-year"> Year Graduated: </label> 
            <input type="text" name="elem-year" value=" {{ $requests->elementary_yg }} " ><br>

            <label for="highschool" > High School: </label> 
            <input type="text" name="highschool" value="{{ $requests->high_school }}"><br>

            <label for="hs-year"> Year Graduated: </label> 
            <input type="text" name="hs-year" value="{{ $requests->highschool_yg }}" ><br>
            
            <label> Degree Earned: </label>
            <input type="text" name="degree" value="{{ $requests->course }}"> <br>

            <label> Major: </label> 
            <input type="text" name="major" ><br><br>
        </div>

        <div>
            
        </div>


        <div class="flex items-center justify-center">
            <h1>First Year</h1>
        </div>

        <div class="flex items-center justify-center">
            <div class="flex items-center">
                <div>
                    <label> School Year: </label>
                    <input type="text" name="school-year">
                    <label>Sem</label>
                    <select name="sem1[]">
                        <option value="1">1</option>
                        <option disabled value="2">2</option>
                        <option disabled value="3">Summer</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center mt-4">
            <div class="border-black-100 border-4">
                <table>
                    <thead>
                            <tr>
                                <th> </th>
                                <th class="border-r border-black-100"> S U B J E C T S </th> 
                                <th class="border-r border-black-100"> </th>
                                <th class="border-r border-black-100"> </th>
                                <th> </th>
                            </tr>

                            <tr>
                                <th class="border-t border-b border-l text-center border-black-100 px-8"> CODE </th>
                                <th class="border-t border-b border-r text-center border-black-100 px-12"> DESCRIPTIVE TITLE </th>
                                <th class="border-b border-r text-center border-black-100 px-8"> CREDITS </th>
                                <th class="border-b border-r text-center border-black-100 px-8"> GRADES </th>
                                <th class="border-b  text-center border-black-100 px-8"> REMARKS </th>
                            </tr>

                            <tr>
                            
                                <td class="px-4 border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="code1[]">
                                        <option> -- </option>
                                        @foreach($subjects as $subject)
                                            <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="px-6 border-r border-black-100 text-center"> 
                                    <span></span> </br>
                                    <select name="subject1[]">
                                        <option> -- </option>
                                        @foreach($subjects as $subject)
                                            <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="px-8 border-r border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="credits1[]">
                                        <option> -- </option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </td>
                                <td class="px-8 border-r border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="grades1[]">
                                        <option> -- </option>
                                        <option value="1.00">1.00</option>
                                        <option value="1.25">1.25</option>
                                        <option value="1.50">1.50</option>
                                        <option value="1.75">1.75</option>
                                        <option value="2.00">2.00</option>
                                        <option value="2.25">2.25</option>
                                        <option value="2.50">2.50</option>
                                        <option value="2.75">2.75</option>
                                        <option value="3.00">3.00</option>
                                        <option value="4.00">4.00</option>
                                        <option value="5.00">5.00</option>
                                        <option value="DR">DR</option>
                                        <option value="INC">INC</option>
                                        <option value="AW">AW</option>
                                        <option value="UW">UW</option>
                                    </select>
                                </td>
                                <td class="px-8 border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="remarks1[]">
                                        <option> </option>
                                        <option value="Passed">Passed</option>
                                        <option value="Failed">Failed</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code1[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject1[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits1[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades1[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks1[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code1[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject1[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits1[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades1[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks1[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                         <tr>
                            
                                <td class="px-4 border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="code1[]">
                                        <option> -- </option>
                                        @foreach($subjects as $subject)
                                            <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="px-6 border-r border-black-100 text-center"> 
                                    <span></span> </br>
                                    <select name="subject1[]">
                                        <option> -- </option>
                                        @foreach($subjects as $subject)
                                            <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="px-8 border-r border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="credits1[]">
                                        <option> -- </option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </td>
                                <td class="px-8 border-r border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="grades1[]">
                                        <option> -- </option>
                                        <option value="1.00">1.00</option>
                                        <option value="1.25">1.25</option>
                                        <option value="1.50">1.50</option>
                                        <option value="1.75">1.75</option>
                                        <option value="2.00">2.00</option>
                                        <option value="2.25">2.25</option>
                                        <option value="2.50">2.50</option>
                                        <option value="2.75">2.75</option>
                                        <option value="3.00">3.00</option>
                                        <option value="4.00">4.00</option>
                                        <option value="5.00">5.00</option>
                                        <option value="DR">DR</option>
                                        <option value="INC">INC</option>
                                        <option value="AW">AW</option>
                                        <option value="UW">UW</option>
                                    </select>
                                </td>
                                <td class="px-8 border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="remarks1[]">
                                        <option> </option>
                                        <option value="Passed">Passed</option>
                                        <option value="Failed">Failed</option>
                                    </select>
                                </td>
                            </tr>

                             <tr>
                            
                                <td class="px-4 border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="code1[]">
                                        <option> -- </option>
                                        @foreach($subjects as $subject)
                                            <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="px-6 border-r border-black-100 text-center"> 
                                    <span></span> </br>
                                    <select name="subject1[]">
                                        <option> -- </option>
                                        @foreach($subjects as $subject)
                                            <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="px-8 border-r border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="credits1[]">
                                        <option> -- </option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </td>
                                <td class="px-8 border-r border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="grades1[]">
                                        <option> -- </option>
                                        <option value="1.00">1.00</option>
                                        <option value="1.25">1.25</option>
                                        <option value="1.50">1.50</option>
                                        <option value="1.75">1.75</option>
                                        <option value="2.00">2.00</option>
                                        <option value="2.25">2.25</option>
                                        <option value="2.50">2.50</option>
                                        <option value="2.75">2.75</option>
                                        <option value="3.00">3.00</option>
                                        <option value="4.00">4.00</option>
                                        <option value="5.00">5.00</option>
                                        <option value="DR">DR</option>
                                        <option value="INC">INC</option>
                                        <option value="AW">AW</option>
                                        <option value="UW">UW</option>
                                    </select>
                                </td>
                                <td class="px-8 border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="remarks1[]">
                                        <option> </option>
                                        <option value="Passed">Passed</option>
                                        <option value="Failed">Failed</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code1[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject1[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits1[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades1[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks1[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code1[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject1[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits1[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades1[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks1[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code1[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject1[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits1[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades1[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks1[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                         <tr>
                            
                                <td class="px-4 border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="code1[]">
                                        <option> -- </option>
                                        @foreach($subjects as $subject)
                                            <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="px-6 border-r border-black-100 text-center"> 
                                    <span></span> </br>
                                    <select name="subject1[]">
                                        <option> -- </option>
                                        @foreach($subjects as $subject)
                                            <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="px-8 border-r border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="credits1[]">
                                        <option> -- </option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </td>
                                <td class="px-8 border-r border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="grades1[]">
                                        <option> -- </option>
                                        <option value="1.00">1.00</option>
                                        <option value="1.25">1.25</option>
                                        <option value="1.50">1.50</option>
                                        <option value="1.75">1.75</option>
                                        <option value="2.00">2.00</option>
                                        <option value="2.25">2.25</option>
                                        <option value="2.50">2.50</option>
                                        <option value="2.75">2.75</option>
                                        <option value="3.00">3.00</option>
                                        <option value="4.00">4.00</option>
                                        <option value="5.00">5.00</option>
                                        <option value="DR">DR</option>
                                        <option value="INC">INC</option>
                                        <option value="AW">AW</option>
                                        <option value="UW">UW</option>
                                    </select>
                                </td>
                                <td class="px-8 border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="remarks1[]">
                                        <option> </option>
                                        <option value="Passed">Passed</option>
                                        <option value="Failed">Failed</option>
                                    </select>
                                </td>
                            </tr>
                    </thead>
                </table>
            </div>
        </div>

        <!-- 2nd Table - First Year -->

        <div class="flex items-center justify-center mt-4">
            <div class="flex items-center">
                <div>
                    <label>Sem</label>
                    <select name="sem2[]">
                        <option disabled value="1">1</option>
                        <option value="2">2</option>
                        <option disabled value="3">Summer</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-center mt-4">
            <div class="border-black-100 border-4 text-center">
                <table>
                    <thead>
                        <tr>
                            <th> </th>
                            <th class="border-r border-black-100"> S U B J E C T S </th> 
                            <th class="border-r border-black-100"> </th>
                            <th class="border-r border-black-100"> </th>
                            <th> </th>
                        </tr>

                        <tr>
                            <th class="border-t border-b border-l text-center border-black-100 px-8"> CODE </th>
                            <th class="border-t border-b border-r text-center border-black-100 px-12"> DESCRIPTIVE TITLE </th>
                            <th class="border-b border-r text-center border-black-100 px-8"> CREDITS </th>
                            <th class="border-b border-r text-center border-black-100 px-8"> GRADES </th>
                            <th class="border-b  text-center border-black-100 px-8"> REMARKS </th>
                        </tr>

                        
                        <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code2[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject2[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits2[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades2[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks2[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code2[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject2[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits2[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades2[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks2[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code2[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject2[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits2[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades2[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks2[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                         <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code2[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject2[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits2[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades2[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks2[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                         <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code2[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject2[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits2[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades2[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks2[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                         <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code2[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject2[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits2[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades2[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks2[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                         <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code2[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject2[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits2[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades2[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks2[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code2[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject2[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits2[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades2[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks2[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code2[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject2[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits2[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades2[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks2[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                        
                    </thead>
                </table>
            </div>
        </div>

        <div class="flex items-center justify-center mt-4">
            <h1>Second Year</h1>
        </div>

        <div class="flex items-center justify-center">
            <div class="flex items-center">
                <div>
                    <label> School Year: </label>
                    <input type="text" name="school-year">
                    <label>Sem</label>
                    <select name="sem3[]">
                        <option value="1">1</option>
                        <option disabled value="2">2</option>
                        <option disabled value="3">Summer</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center mt-4">
            <div class="border-black-100 border-4">
                <table>
                    <thead>
                            <tr>
                                <th> </th>
                                <th class="border-r border-black-100"> S U B J E C T S </th> 
                                <th class="border-r border-black-100"> </th>
                                <th class="border-r border-black-100"> </th>
                                <th> </th>
                            </tr>

                            <tr>
                                <th class="border-t border-b border-l text-center border-black-100 px-8"> CODE </th>
                                <th class="border-t border-b border-r text-center border-black-100 px-12"> DESCRIPTIVE TITLE </th>
                                <th class="border-b border-r text-center border-black-100 px-8"> CREDITS </th>
                                <th class="border-b border-r text-center border-black-100 px-8"> GRADES </th>
                                <th class="border-b  text-center border-black-100 px-8"> REMARKS </th>
                            </tr>

                            <tr>
                            
                                <td class="px-4 border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="code3[]">
                                        <option> -- </option>
                                        @foreach($subjects as $subject)
                                            <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="px-6 border-r border-black-100 text-center"> 
                                    <span></span> </br>
                                    <select name="subject3[]">
                                        <option> -- </option>
                                        @foreach($subjects as $subject)
                                            <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="px-8 border-r border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="credits3[]">
                                        <option> -- </option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </td>
                                <td class="px-8 border-r border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="grades3[]">
                                        <option> -- </option>
                                        <option value="1.00">1.00</option>
                                        <option value="1.25">1.25</option>
                                        <option value="1.50">1.50</option>
                                        <option value="1.75">1.75</option>
                                        <option value="2.00">2.00</option>
                                        <option value="2.25">2.25</option>
                                        <option value="2.50">2.50</option>
                                        <option value="2.75">2.75</option>
                                        <option value="3.00">3.00</option>
                                        <option value="4.00">4.00</option>
                                        <option value="5.00">5.00</option>
                                        <option value="DR">DR</option>
                                        <option value="INC">INC</option>
                                        <option value="AW">AW</option>
                                        <option value="UW">UW</option>
                                    </select>
                                </td>
                                <td class="px-8 border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="remarks3[]">
                                        <option> </option>
                                        <option value="Passed">Passed</option>
                                        <option value="Failed">Failed</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code3[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject3[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits3[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades3[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks3[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code3[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject3[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits3[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades3[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks3[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                         <tr>
                            
                                <td class="px-4 border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="code3[]">
                                        <option> -- </option>
                                        @foreach($subjects as $subject)
                                            <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="px-6 border-r border-black-100 text-center"> 
                                    <span></span> </br>
                                    <select name="subject3[]">
                                        <option> -- </option>
                                        @foreach($subjects as $subject)
                                            <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="px-8 border-r border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="credits3[]">
                                        <option> -- </option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </td>
                                <td class="px-8 border-r border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="grades3[]">
                                        <option> -- </option>
                                        <option value="1.00">1.00</option>
                                        <option value="1.25">1.25</option>
                                        <option value="1.50">1.50</option>
                                        <option value="1.75">1.75</option>
                                        <option value="2.00">2.00</option>
                                        <option value="2.25">2.25</option>
                                        <option value="2.50">2.50</option>
                                        <option value="2.75">2.75</option>
                                        <option value="3.00">3.00</option>
                                        <option value="4.00">4.00</option>
                                        <option value="5.00">5.00</option>
                                        <option value="DR">DR</option>
                                        <option value="INC">INC</option>
                                        <option value="AW">AW</option>
                                        <option value="UW">UW</option>
                                    </select>
                                </td>
                                <td class="px-8 border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="remarks3[]">
                                        <option> </option>
                                        <option value="Passed">Passed</option>
                                        <option value="Failed">Failed</option>
                                    </select>
                                </td>
                            </tr>

                             <tr>
                            
                                <td class="px-4 border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="code3[]">
                                        <option> -- </option>
                                        @foreach($subjects as $subject)
                                            <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="px-6 border-r border-black-100 text-center"> 
                                    <span></span> </br>
                                    <select name="subject3[]">
                                        <option> -- </option>
                                        @foreach($subjects as $subject)
                                            <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="px-8 border-r border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="credits3[]">
                                        <option> -- </option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </td>
                                <td class="px-8 border-r border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="grades3[]">
                                        <option> -- </option>
                                        <option value="1.00">1.00</option>
                                        <option value="1.25">1.25</option>
                                        <option value="1.50">1.50</option>
                                        <option value="1.75">1.75</option>
                                        <option value="2.00">2.00</option>
                                        <option value="2.25">2.25</option>
                                        <option value="2.50">2.50</option>
                                        <option value="2.75">2.75</option>
                                        <option value="3.00">3.00</option>
                                        <option value="4.00">4.00</option>
                                        <option value="5.00">5.00</option>
                                        <option value="DR">DR</option>
                                        <option value="INC">INC</option>
                                        <option value="AW">AW</option>
                                        <option value="UW">UW</option>
                                    </select>
                                </td>
                                <td class="px-8 border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="remarks3[]">
                                        <option> </option>
                                        <option value="Passed">Passed</option>
                                        <option value="Failed">Failed</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code3[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject3[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits3[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades3[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks3[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code3[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject3[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits3[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades3[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks3[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code3[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject3[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits3[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades3[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks3[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                         <tr>
                            
                                <td class="px-4 border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="code3[]">
                                        <option> -- </option>
                                        @foreach($subjects as $subject)
                                            <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="px-6 border-r border-black-100 text-center"> 
                                    <span></span> </br>
                                    <select name="subject3[]">
                                        <option> -- </option>
                                        @foreach($subjects as $subject)
                                            <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="px-8 border-r border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="credits3[]">
                                        <option> -- </option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </td>
                                <td class="px-8 border-r border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="grades3[]">
                                        <option> -- </option>
                                        <option value="1.00">1.00</option>
                                        <option value="1.25">1.25</option>
                                        <option value="1.50">1.50</option>
                                        <option value="1.75">1.75</option>
                                        <option value="2.00">2.00</option>
                                        <option value="2.25">2.25</option>
                                        <option value="2.50">2.50</option>
                                        <option value="2.75">2.75</option>
                                        <option value="3.00">3.00</option>
                                        <option value="4.00">4.00</option>
                                        <option value="5.00">5.00</option>
                                        <option value="DR">DR</option>
                                        <option value="INC">INC</option>
                                        <option value="AW">AW</option>
                                        <option value="UW">UW</option>
                                    </select>
                                </td>
                                <td class="px-8 border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="remarks3[]">
                                        <option> </option>
                                        <option value="Passed">Passed</option>
                                        <option value="Failed">Failed</option>
                                    </select>
                                </td>
                            </tr>
                    </thead>
                </table>
            </div>
        </div>

        <!-- 2nd Table - Second Year -->

        <div class="flex items-center justify-center mt-4">
            <div class="flex items-center">
                <div>
                    <label>Sem</label>
                    <select name="sem4[]">
                        <option disabled value="1">1</option>
                        <option value="2">2</option>
                        <option disabled value="3">Summer</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-center mt-4">
            <div class="border-black-100 border-4 text-center">
                <table>
                    <thead>
                        <tr>
                            <th> </th>
                            <th class="border-r border-black-100"> S U B J E C T S </th> 
                            <th class="border-r border-black-100"> </th>
                            <th class="border-r border-black-100"> </th>
                            <th> </th>
                        </tr>

                        <tr>
                            <th class="border-t border-b border-l text-center border-black-100 px-8"> CODE </th>
                            <th class="border-t border-b border-r text-center border-black-100 px-12"> DESCRIPTIVE TITLE </th>
                            <th class="border-b border-r text-center border-black-100 px-8"> CREDITS </th>
                            <th class="border-b border-r text-center border-black-100 px-8"> GRADES </th>
                            <th class="border-b  text-center border-black-100 px-8"> REMARKS </th>
                        </tr>

                        
                        <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code4[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject4[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits4[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades4[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks4[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code4[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject4[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits4[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades4[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks4[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code4[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject4[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits4[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades4[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks4[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                         <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code4[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject4[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits4[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades4[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks4[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                         <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code4[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject4[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits4[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades4[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks4[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                         <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code4[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject4[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits4[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades4[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks4[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                         <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code4[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject4[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits4[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades4[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks4[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code4[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject4[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits4[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades4[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks4[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code4[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject4[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits4[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades4[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks4[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                        
                    </thead>
                </table>
            </div>
        </div>

        <div class="flex items-center justify-center mt-4">
            <h1>Third Year</h1>
        </div>

        <div class="flex items-center justify-center">
            <div class="flex items-center">
                <div>
                    <label> School Year: </label>
                    <input type="text" name="school-year">
                    <label>Sem</label>
                    <select name="sem5[]">
                        <option value="1">1</option>
                        <option disabled value="2">2</option>
                        <option disabled value="3">Summer</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center mt-4">
            <div class="border-black-100 border-4">
                <table>
                    <thead>
                            <tr>
                                <th> </th>
                                <th class="border-r border-black-100"> S U B J E C T S </th> 
                                <th class="border-r border-black-100"> </th>
                                <th class="border-r border-black-100"> </th>
                                <th> </th>
                            </tr>

                            <tr>
                                <th class="border-t border-b border-l text-center border-black-100 px-8"> CODE </th>
                                <th class="border-t border-b border-r text-center border-black-100 px-12"> DESCRIPTIVE TITLE </th>
                                <th class="border-b border-r text-center border-black-100 px-8"> CREDITS </th>
                                <th class="border-b border-r text-center border-black-100 px-8"> GRADES </th>
                                <th class="border-b  text-center border-black-100 px-8"> REMARKS </th>
                            </tr>

                            <tr>
                            
                                <td class="px-4 border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="code5[]">
                                        <option> -- </option>
                                        @foreach($subjects as $subject)
                                            <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="px-6 border-r border-black-100 text-center"> 
                                    <span></span> </br>
                                    <select name="subject5[]">
                                        <option> -- </option>
                                        @foreach($subjects as $subject)
                                            <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="px-8 border-r border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="credits5[]">
                                        <option> -- </option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </td>
                                <td class="px-8 border-r border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="grades5[]">
                                        <option> -- </option>
                                        <option value="1.00">1.00</option>
                                        <option value="1.25">1.25</option>
                                        <option value="1.50">1.50</option>
                                        <option value="1.75">1.75</option>
                                        <option value="2.00">2.00</option>
                                        <option value="2.25">2.25</option>
                                        <option value="2.50">2.50</option>
                                        <option value="2.75">2.75</option>
                                        <option value="3.00">3.00</option>
                                        <option value="4.00">4.00</option>
                                        <option value="5.00">5.00</option>
                                        <option value="DR">DR</option>
                                        <option value="INC">INC</option>
                                        <option value="AW">AW</option>
                                        <option value="UW">UW</option>
                                    </select>
                                </td>
                                <td class="px-8 border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="remarks5[]">
                                        <option> </option>
                                        <option value="Passed">Passed</option>
                                        <option value="Failed">Failed</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code5[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject5[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits5[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades5[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks5[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code5[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject5[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits5[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades5[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks5[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                         <tr>
                            
                                <td class="px-4 border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="code5[]">
                                        <option> -- </option>
                                        @foreach($subjects as $subject)
                                            <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="px-6 border-r border-black-100 text-center"> 
                                    <span></span> </br>
                                    <select name="subject5[]">
                                        <option> -- </option>
                                        @foreach($subjects as $subject)
                                            <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="px-8 border-r border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="credits5[]">
                                        <option> -- </option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </td>
                                <td class="px-8 border-r border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="grades5[]">
                                        <option> -- </option>
                                        <option value="1.00">1.00</option>
                                        <option value="1.25">1.25</option>
                                        <option value="1.50">1.50</option>
                                        <option value="1.75">1.75</option>
                                        <option value="2.00">2.00</option>
                                        <option value="2.25">2.25</option>
                                        <option value="2.50">2.50</option>
                                        <option value="2.75">2.75</option>
                                        <option value="3.00">3.00</option>
                                        <option value="4.00">4.00</option>
                                        <option value="5.00">5.00</option>
                                        <option value="DR">DR</option>
                                        <option value="INC">INC</option>
                                        <option value="AW">AW</option>
                                        <option value="UW">UW</option>
                                    </select>
                                </td>
                                <td class="px-8 border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="remarks5[]">
                                        <option> </option>
                                        <option value="Passed">Passed</option>
                                        <option value="Failed">Failed</option>
                                    </select>
                                </td>
                            </tr>

                             <tr>
                            
                                <td class="px-4 border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="code5[]">
                                        <option> -- </option>
                                        @foreach($subjects as $subject)
                                            <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="px-6 border-r border-black-100 text-center"> 
                                    <span></span> </br>
                                    <select name="subject5[]">
                                        <option> -- </option>
                                        @foreach($subjects as $subject)
                                            <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="px-8 border-r border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="credits5[]">
                                        <option> -- </option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </td>
                                <td class="px-8 border-r border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="grades5[]">
                                        <option> -- </option>
                                        <option value="1.00">1.00</option>
                                        <option value="1.25">1.25</option>
                                        <option value="1.50">1.50</option>
                                        <option value="1.75">1.75</option>
                                        <option value="2.00">2.00</option>
                                        <option value="2.25">2.25</option>
                                        <option value="2.50">2.50</option>
                                        <option value="2.75">2.75</option>
                                        <option value="3.00">3.00</option>
                                        <option value="4.00">4.00</option>
                                        <option value="5.00">5.00</option>
                                        <option value="DR">DR</option>
                                        <option value="INC">INC</option>
                                        <option value="AW">AW</option>
                                        <option value="UW">UW</option>
                                    </select>
                                </td>
                                <td class="px-8 border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="remarks5[]">
                                        <option> </option>
                                        <option value="Passed">Passed</option>
                                        <option value="Failed">Failed</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code5[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject5[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits5[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades5[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks5[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code5[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject5[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits5[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades5[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks5[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code5[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject5[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits5[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades5[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks5[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                         <tr>
                            
                                <td class="px-4 border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="code5[]">
                                        <option> -- </option>
                                        @foreach($subjects as $subject)
                                            <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="px-6 border-r border-black-100 text-center"> 
                                    <span></span> </br>
                                    <select name="subject5[]">
                                        <option> -- </option>
                                        @foreach($subjects as $subject)
                                            <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="px-8 border-r border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="credits5[]">
                                        <option> -- </option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </td>
                                <td class="px-8 border-r border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="grades5[]">
                                        <option> -- </option>
                                        <option value="1.00">1.00</option>
                                        <option value="1.25">1.25</option>
                                        <option value="1.50">1.50</option>
                                        <option value="1.75">1.75</option>
                                        <option value="2.00">2.00</option>
                                        <option value="2.25">2.25</option>
                                        <option value="2.50">2.50</option>
                                        <option value="2.75">2.75</option>
                                        <option value="3.00">3.00</option>
                                        <option value="4.00">4.00</option>
                                        <option value="5.00">5.00</option>
                                        <option value="DR">DR</option>
                                        <option value="INC">INC</option>
                                        <option value="AW">AW</option>
                                        <option value="UW">UW</option>
                                    </select>
                                </td>
                                <td class="px-8 border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="remarks5[]">
                                        <option> </option>
                                        <option value="Passed">Passed</option>
                                        <option value="Failed">Failed</option>
                                    </select>
                                </td>
                            </tr>
                    </thead>
                </table>
            </div>
        </div>

        <!-- 2nd Table - Third Year -->

        <div class="flex items-center justify-center mt-4">
            <div class="flex items-center">
                <div>
                    <label>Sem</label>
                    <select name="sem6[]">
                        <option disabled value="1">1</option>
                        <option value="2">2</option>
                        <option disabled value="3">Summer</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center mt-4">
            <div class="border-black-100 border-4 text-center">
                <table>
                    <thead>
                        <tr>
                            <th> </th>
                            <th class="border-r border-black-100"> S U B J E C T S </th> 
                            <th class="border-r border-black-100"> </th>
                            <th class="border-r border-black-100"> </th>
                            <th> </th>
                        </tr>

                        <tr>
                            <th class="border-t border-b border-l text-center border-black-100 px-8"> CODE </th>
                            <th class="border-t border-b border-r text-center border-black-100 px-12"> DESCRIPTIVE TITLE </th>
                            <th class="border-b border-r text-center border-black-100 px-8"> CREDITS </th>
                            <th class="border-b border-r text-center border-black-100 px-8"> GRADES </th>
                            <th class="border-b  text-center border-black-100 px-8"> REMARKS </th>
                        </tr>

                        
                        <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code6[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject6[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits6[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades6[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks6[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code6[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject6[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits6[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades6[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks6[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code6[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject6[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits6[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades6[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks6[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                         <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code6[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject6[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits6[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades6[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks6[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                         <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code6[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject6[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits6[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades6[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks6[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                         <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code6[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject6[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits6[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades6[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks6[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                         <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code6[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject6[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits6[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades6[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks6[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code6[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject6[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits6[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades6[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks6[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code6[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject6[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits6[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades6[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks6[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                        
                    </thead>
                </table>
            </div>
        </div>

          <!-- 3rd Table of Third Year -->
        <div class="flex items-center justify-center mt-4">
            <div class="flex items-center">
                <div>
                    <label>Sem</label>
                    <select name="sem7[]">
                        <option disabled value="1">1</option>
                        <option disabled value="2">2</option>
                        <option value="Summer">Summer</option>
                    </select>
                </div>
            </div>
        </div>
      
        <div class="flex items-center justify-center mt-4">
            <div class="border-black-100 border-4 text-center">
                <table>
                    <thead>
                        <tr>
                            <th> </th>
                            <th class="border-r border-black-100"> S U B J E C T S </th> 
                            <th class="border-r border-black-100"> </th>
                            <th class="border-r border-black-100"> </th>
                            <th> </th>
                        </tr>

                        <tr>
                            <th class="border-t border-b border-l text-center border-black-100 px-8"> CODE </th>
                            <th class="border-t border-b border-r text-center border-black-100 px-12"> DESCRIPTIVE TITLE </th>
                            <th class="border-b border-r text-center border-black-100 px-8"> CREDITS </th>
                            <th class="border-b border-r text-center border-black-100 px-8"> GRADES </th>
                            <th class="border-b  text-center border-black-100 px-8"> REMARKS </th>
                        </tr>

                        
                        <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code7[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject7[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits7[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades7[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks7[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code7[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject7[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits7[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades7[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks7[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code7[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject7[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits7[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades7[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks7[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                         <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code7[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject7[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits7[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades7[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks7[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                         <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code7[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject7[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits7[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades7[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks7[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                         <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code7[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject7[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits7[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades7[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks7[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                         <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code7[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject7[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits7[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades7[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks7[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code7[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject7[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits7[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades7[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks7[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code7[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject7[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits7[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades7[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks7[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                        
                    </thead>
                </table>
            </div>
        </div>

        <div class="flex items-center justify-center mt-4">
            <h1>Fourth Year</h1>
        </div>

        <div class="flex items-center justify-center">
            <div class="flex items-center">
                <div>
                    <label> School Year: </label>
                    <input type="text" name="school-year">
                    <label>Sem</label>
                    <select name="sem8[]">
                        <option value="1">1</option>
                        <option disabled value="2">2</option>
                        <option disabled value="3">Summer</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center mt-4">
            <div class="border-black-100 border-4">
                <table>
                    <thead>
                            <tr>
                                <th> </th>
                                <th class="border-r border-black-100"> S U B J E C T S </th> 
                                <th class="border-r border-black-100"> </th>
                                <th class="border-r border-black-100"> </th>
                                <th> </th>
                            </tr>

                            <tr>
                                <th class="border-t border-b border-l text-center border-black-100 px-8"> CODE </th>
                                <th class="border-t border-b border-r text-center border-black-100 px-12"> DESCRIPTIVE TITLE </th>
                                <th class="border-b border-r text-center border-black-100 px-8"> CREDITS </th>
                                <th class="border-b border-r text-center border-black-100 px-8"> GRADES </th>
                                <th class="border-b  text-center border-black-100 px-8"> REMARKS </th>
                            </tr>

                            <tr>
                            
                                <td class="px-4 border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="code8[]">
                                        <option> -- </option>
                                        @foreach($subjects as $subject)
                                            <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="px-6 border-r border-black-100 text-center"> 
                                    <span></span> </br>
                                    <select name="subject8[]">
                                        <option> -- </option>
                                        @foreach($subjects as $subject)
                                            <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="px-8 border-r border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="credits8[]">
                                        <option> -- </option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </td>
                                <td class="px-8 border-r border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="grades8[]">
                                        <option> -- </option>
                                        <option value="1.00">1.00</option>
                                        <option value="1.25">1.25</option>
                                        <option value="1.50">1.50</option>
                                        <option value="1.75">1.75</option>
                                        <option value="2.00">2.00</option>
                                        <option value="2.25">2.25</option>
                                        <option value="2.50">2.50</option>
                                        <option value="2.75">2.75</option>
                                        <option value="3.00">3.00</option>
                                        <option value="4.00">4.00</option>
                                        <option value="5.00">5.00</option>
                                        <option value="DR">DR</option>
                                        <option value="INC">INC</option>
                                        <option value="AW">AW</option>
                                        <option value="UW">UW</option>
                                    </select>
                                </td>
                                <td class="px-8 border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="remarks8[]">
                                        <option> </option>
                                        <option value="Passed">Passed</option>
                                        <option value="Failed">Failed</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code8[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject8[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits8[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades8[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks8[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code8[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject8[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits8[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades8[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks8[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                         <tr>
                            
                                <td class="px-4 border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="code8[]">
                                        <option> -- </option>
                                        @foreach($subjects as $subject)
                                            <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="px-6 border-r border-black-100 text-center"> 
                                    <span></span> </br>
                                    <select name="subject8[]">
                                        <option> -- </option>
                                        @foreach($subjects as $subject)
                                            <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="px-8 border-r border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="credits8[]">
                                        <option> -- </option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </td>
                                <td class="px-8 border-r border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="grades8[]">
                                        <option> -- </option>
                                        <option value="1.00">1.00</option>
                                        <option value="1.25">1.25</option>
                                        <option value="1.50">1.50</option>
                                        <option value="1.75">1.75</option>
                                        <option value="2.00">2.00</option>
                                        <option value="2.25">2.25</option>
                                        <option value="2.50">2.50</option>
                                        <option value="2.75">2.75</option>
                                        <option value="3.00">3.00</option>
                                        <option value="4.00">4.00</option>
                                        <option value="5.00">5.00</option>
                                        <option value="DR">DR</option>
                                        <option value="INC">INC</option>
                                        <option value="AW">AW</option>
                                        <option value="UW">UW</option>
                                    </select>
                                </td>
                                <td class="px-8 border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="remarks8[]">
                                        <option> </option>
                                        <option value="Passed">Passed</option>
                                        <option value="Failed">Failed</option>
                                    </select>
                                </td>
                            </tr>

                             <tr>
                            
                                <td class="px-4 border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="code8[]">
                                        <option> -- </option>
                                        @foreach($subjects as $subject)
                                            <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="px-6 border-r border-black-100 text-center"> 
                                    <span></span> </br>
                                    <select name="subject8[]">
                                        <option> -- </option>
                                        @foreach($subjects as $subject)
                                            <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="px-8 border-r border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="credits8[]">
                                        <option> -- </option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </td>
                                <td class="px-8 border-r border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="grades8[]">
                                        <option> -- </option>
                                        <option value="1.00">1.00</option>
                                        <option value="1.25">1.25</option>
                                        <option value="1.50">1.50</option>
                                        <option value="1.75">1.75</option>
                                        <option value="2.00">2.00</option>
                                        <option value="2.25">2.25</option>
                                        <option value="2.50">2.50</option>
                                        <option value="2.75">2.75</option>
                                        <option value="3.00">3.00</option>
                                        <option value="4.00">4.00</option>
                                        <option value="5.00">5.00</option>
                                        <option value="DR">DR</option>
                                        <option value="INC">INC</option>
                                        <option value="AW">AW</option>
                                        <option value="UW">UW</option>
                                    </select>
                                </td>
                                <td class="px-8 border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="remarks8[]">
                                        <option> </option>
                                        <option value="Passed">Passed</option>
                                        <option value="Failed">Failed</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code8[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject8[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits8[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades8[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks8[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code8[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject8[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits8[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades8[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks8[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code8[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject8[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits8[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades8[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks8[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                         <tr>
                            
                                <td class="px-4 border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="code8[]">
                                        <option> -- </option>
                                        @foreach($subjects as $subject)
                                            <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="px-6 border-r border-black-100 text-center"> 
                                    <span></span> </br>
                                    <select name="subject8[]">
                                        <option> -- </option>
                                        @foreach($subjects as $subject)
                                            <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="px-8 border-r border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="credits8[]">
                                        <option> -- </option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </td>
                                <td class="px-8 border-r border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="grades8[]">
                                        <option> -- </option>
                                        <option value="1.00">1.00</option>
                                        <option value="1.25">1.25</option>
                                        <option value="1.50">1.50</option>
                                        <option value="1.75">1.75</option>
                                        <option value="2.00">2.00</option>
                                        <option value="2.25">2.25</option>
                                        <option value="2.50">2.50</option>
                                        <option value="2.75">2.75</option>
                                        <option value="3.00">3.00</option>
                                        <option value="4.00">4.00</option>
                                        <option value="5.00">5.00</option>
                                        <option value="DR">DR</option>
                                        <option value="INC">INC</option>
                                        <option value="AW">AW</option>
                                        <option value="UW">UW</option>
                                    </select>
                                </td>
                                <td class="px-8 border-black-100 text-center">
                                    <span></span> </br>
                                    <select name="remarks8[]">
                                        <option> </option>
                                        <option value="Passed">Passed</option>
                                        <option value="Failed">Failed</option>
                                    </select>
                                </td>
                            </tr>
                    </thead>
                </table>
            </div>
        </div>

        <!-- 2nd Table - Fourth Year -->

        <div class="flex items-center justify-center mt-4">
            <div class="flex items-center">
                <div>
                    <label>Sem</label>
                    <select name="sem9[]">
                        <option disabled value="1">1</option>
                        <option value="2">2</option>
                        <option disabled value="3">Summer</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-center mt-4">
            <div class="border-black-100 border-4 text-center">
                <table>
                    <thead>
                        <tr>
                            <th> </th>
                            <th class="border-r border-black-100"> S U B J E C T S </th> 
                            <th class="border-r border-black-100"> </th>
                            <th class="border-r border-black-100"> </th>
                            <th> </th>
                        </tr>

                        <tr>
                            <th class="border-t border-b border-l text-center border-black-100 px-8"> CODE </th>
                            <th class="border-t border-b border-r text-center border-black-100 px-12"> DESCRIPTIVE TITLE </th>
                            <th class="border-b border-r text-center border-black-100 px-8"> CREDITS </th>
                            <th class="border-b border-r text-center border-black-100 px-8"> GRADES </th>
                            <th class="border-b  text-center border-black-100 px-8"> REMARKS </th>
                        </tr>

                        
                        <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code9[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject9[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits9[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades9[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks9[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code9[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject9[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits9[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades9[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks9[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code9[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject9[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits9[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades9[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks9[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                         <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code9[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject9[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits9[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades9[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks9[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                         <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code9[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject9[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits9[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades9[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks9[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                         <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code9[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject9[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits9[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades9[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks9[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                         <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code9[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject9[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits9[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades9[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks9[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code9[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject9[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits9[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades9[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks9[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            
                            <td class="px-4 border-black-100 text-center">
                                <span></span> </br>
                                <select name="code9[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 border-r border-black-100 text-center"> 
                                <span></span> </br>
                                <select name="subject9[]">
                                    <option> -- </option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}"> {{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="credits9[]">
                                    <option> -- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td class="px-8 border-r border-black-100 text-center">
                                <span></span> </br>
                                <select name="grades9[]">
                                    <option> -- </option>
                                    <option value="1.00">1.00</option>
                                    <option value="1.25">1.25</option>
                                    <option value="1.50">1.50</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2.00">2.00</option>
                                    <option value="2.25">2.25</option>
                                    <option value="2.50">2.50</option>
                                    <option value="2.75">2.75</option>
                                    <option value="3.00">3.00</option>
                                    <option value="4.00">4.00</option>
                                    <option value="5.00">5.00</option>
                                    <option value="DR">DR</option>
                                    <option value="INC">INC</option>
                                    <option value="AW">AW</option>
                                    <option value="UW">UW</option>
                                </select>
                            </td>
                            <td class="px-8 border-black-100 text-center">
                                <span></span> </br>
                                <select name="remarks9[]">
                                    <option> </option>
                                    <option value="Passed">Passed</option>
                                    <option value="Failed">Failed</option>
                                </select>
                            </td>
                        </tr>

                        
                    </thead>
                </table>
            </div>
        </div>


        <div class="flex items-center justify-center mt-4">
            <button type="submit" class="bg-maroon-100 text-white px-3"> Save </button>
        </div>
    </form>
    

</body>
</html>