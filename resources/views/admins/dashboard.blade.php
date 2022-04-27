@extends('layouts.layout')

@section('content')



<div class="flex ">
      <div class="flex flex-col w-64 h-screen px-4 py-8 overflow-y-auto border-r">
        


        <div class="flex flex-col justify-between mt-6">
          <aside>
            <ul>
              <li>
                <a class="flex items-center px-4 py-2 mt-2 text-gray-600 rounded-md bg-gray-200"  href="#">
                  <span class="mx-4 font-medium">Course and Subjects</span>
                </a>
              </li>
            </ul>

          </aside>
          
        </div>
      </div>
      <div class="w-full h-full p-4 m-8 overflow-y-auto">
        <div class="flex items-center justify-center"> Add Subjects and Course </div>
        
            <form action=" {{ route ('admins.store')}} " method="post">
              @csrf
            <div class="flex items-center justify-center border-4 ">
                <div class="flex items-center justify-center  py-4 ">
                    <label class="px-1" for="course_name">Course: </label>
                    <input type="text" name="course_name" size="50" placeholder="Bachelor of Science in ">
                </div>
            </div>
                <div class="mt-4">
                   
                </div>
                <div class="flex items-center justify-center border-4 py-4">
                  <div class=" border-4 py-4 px-4">
                    <table class="auto" id="dynamicAddRemove">
                    <thead>
                      <tr>
                        <th class="border text-center px-8 py-4">Subject Code</th>
                        <th class="border text-center px-8 py-4">Subject</th>
                        <th class="border text-center px-8 py-4">Units</th>
                        <th class="border text-center px-8 py-4"> Action </th>
                        <th> </th>
                        <th></th>
                        <th></th>
                      </tr>
                     
                      <tbody>
                      
                        <tr>
                            <td class="border text-center px-8 py-4"> <input type="text" name="code[]" > </td>
                            <td class="border text-center px-8 py-4"> <input type="text" name="subject_name[]" > </td>
                            <td class="border text-center px-8 py-4"> <input type="text" name="units[]" > </td>
                            <td class="border text-center px-8 py-4"> <input class = "bg-maroon-100 text-white px-1" name="add" id="dynamic-ar" type="button" value="Add"> </td>
                        </tr>
                    
                       
                      </tbody>
                      </thead>
                  </table>   
                    <div class="col-md-12 px-4 mt-4"> 
                      <button type="submit" class="bg-maroon-100 text-white px-4">Save</button>
                    </div>
                  </div>
               </div>
            </form>
      </div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript"> 
  $("#dynamic-ar").click(function() {
      $('#dynamicAddRemove').append(' <tr> <td class="border text-center px-8 py-4"> <input type="text" name="code[]" > </td> <td class="border text-center px-8 py-4"> <input type="text" name="subject_name[]" > </td>  <td class="border text-center px-8 py-4"> <input type="text" name="units[]" > </td>  <td class="border text-center px-8 py-4"> <button class="bg-maroon-100 text-white remove-input-field">Delete</button>  </td>  </tr>  ');
  });
  $(document).on('click', '.remove-input-field', function (){
    $(this).parents('tr').remove();
  });
</script>
@endsection