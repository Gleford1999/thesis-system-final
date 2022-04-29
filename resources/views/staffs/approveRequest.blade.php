@extends('layouts.layout')

@section('content')

    <form action=" {{ route ('staffs.approveRequest') }} " method="post">
        @csrf
     <!-- Wrapper div with a height greater than the contents -->
        <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <!-- Card or contents that should be centered vertically -->
        <div class="max-w-md px-10 py-4 bg-white rounded-lg shadow-lg">
            <h2 class="text-gray-900 text-2xl font-bold leading-snug flex items-center justify-center">
            <strong>Respond to Request</strong>
            </h2>
            <div class="mt-4 px-4">
                <label class="block">Request Id: </label> 
                <input type="text" name="id" value="{{ $requests->id }}" >
            </div>
            <div class="mt-4 px-4">
                <label class="block">Request Status</label> 
                <select name="status">
                    <option value="Approved" selected>Approve Request</option>
                    <option value="Rejected: Re-upload receipt">Reject Request</option>
                </select>
            </div>
            <div class="mt-4 px-4">
                <label class="block">Claim Schedule</label> 
                <input type="date" name="schedule">
            </div>
            <div class="items-center flex justify-center mt-4 py-2">
                <button type="submit" class="bg-maroon-100 text-white px-3 py-1">Submit</button>
            </div>
            
        </div>
        </div>
    </form>
    
@endsection