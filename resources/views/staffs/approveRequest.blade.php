@extends('layouts.layout')

@section('content')

    <form action=" {{ route ('staffs.approveRequest') }} " method="post">
        @csrf
        <div class="items-center justify-center" style="margin-top: 5px;">
            <div class="bg-white rounded-lg shadow-lg border-4" style=" margin-left: 380px; border-color: maroon; width: 600px;">
                <h1 class="text-gray-900 text-2xl font-bold leading-snug flex items-center justify-center" style="font-size: 30px;">
                    <strong>Receipt Information</strong>
                </h1>

                <div class=" flex" style="margin-top: 20px; margin-left: 76px;">
                    <label class="block" style="margin-top: 10px;">Reference Number: </label>
                    <input type="text" name="id" value="{{ $requests->receipt_num }}" disabled style="margin-left: 40px;" >
                </div>

                <div class="flex" style="margin-top: 20px; margin-left: 76px;">
                    <label class="block" style="margin-top: 10px;">Amount Paid:</label> 
                    <input type="text" name="id" value="{{ $requests->payment_amount }}" disabled style="margin-left: 85px;" >
                </div>

                <div class="flex" style="margin-top: 20px; margin-left: 76px; margin-bottom:10px;">
                    <label class="block" style="margin-top: 10px;">Date of Payment:</label> 
                    <input type="text" name="id" value="{{ $requests->payment_date }}" disabled style="margin-left: 58px;" >
                </div>
            </div>
        </div>


     <!-- Wrapper div with a height greater than the contents -->
        <div class="items-center justify-center" style="margin-top: 5px;">
        <!-- Card or contents that should be centered vertically -->
            <div class="bg-white rounded-lg shadow-lg border-4" style=" margin-left: 380px; border-color: maroon; width: 600px;">
                <h2 class="text-gray-900 text-2xl font-bold leading-snug flex items-center justify-center" style="font-size: 30px;">
                    <strong>Respond to Request</strong>
                </h2>

                <div class=" flex" style="margin-top: 20px; margin-left: 76px;">
                    <label class="block" style="margin-top: 10px;">Request Id: </label>
                    <input type="text" name="id" value="{{ $requests->id }}" style="margin-left: 100px;" >
                </div>

                <div class="flex" style="margin-top: 20px; margin-left: 76px;">
                    <label class="block" style="margin-top: 10px;">Request Status</label> 
                    <select name="status" style="margin-left: 73px; width: 220px;">
                        <option value="Approved" selected>Approve Request</option>
                        <option value="Rejected: Re-upload receipt">Reject Request</option>
                    </select>
                </div>

                <div class="flex" style="margin-top: 20px; margin-left: 76px;">
                    <label class="block" style="margin-top: 10px;">Claim Schedule</label> 
                    <input type="date" name="schedule" style="margin-left: 70px; width: 220px;">
                </div>

                <div class="items-center flex justify-center mt-4 py-2">
                    <button type="submit" class="bg-maroon-100 text-white px-3 py-1">Submit</button>
                </div>
                
            </div>
        </div>
    </form>
    
@endsection