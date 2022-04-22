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
    <form action=" " method="get">
        <div class="flex items-center justify-center py-4 ">
            <h1> Colegio De San Gabriel Arcangel </h1>
        </div>
        
        <div class="justify-center">
            <label> Student Name: {{ $requests->firstName }} {{ $requests->middleName}} {{ $requests->lastName }} </label> <br>
            <label> Home Address: {{ $requests->address }} </label> <br>
            <label for="date" > Date of Admission: </label> 
            <input type="text" name="date"> 
            <label> Entrance Credentials: </label>
            <input disabled type="text" name="credentials" value="TOR">  <br>

            <label for="elementary"> Elementary School: </label> 
            <input type="text" name="elementary" ><br>

            <label for="elem-year"> Year Graduated: </label> 
            <input type="text" name="elem-year" ><br>

            <label for="highschool" > High School: </label> 
            <input type="text" name="highschool" ><br>

            <label for="hs-year"> Year Graduated: </label> 
            <input type="text" name="hs-year" ><br>
            
            <label> Degree Earned: </label> <br>
            <label> Major: </label> <br>
        </div>

        <div class="flex justify-center">
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
                            <td class="px-8 border-r border-black-100 text-center"> </td>
                            <td class="px-12 border-r border-black-100 text-center"> </td>
                            <td class="px-8 border-r border-black-100 text-center"> </td>
                            <td class="px-8 border-r border-black-100 text-center"> </td>
                            <td > </td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </form>
    

</body>
</html>