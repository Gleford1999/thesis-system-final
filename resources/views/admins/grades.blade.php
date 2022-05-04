@extends('layouts.layout')

@section('content')

    <form action=" {{ route ('admin.grades') }}" method="post">
        @csrf
        <div class="flex items-center justify-center">
            <div class="mt-4 px-4">
                <label for="grades">Grade: </label>
                <input type="text" name="grades" required>
            </div>
            <div class="mt-4 px-4">
                <label for="remarks">Remarks: </label>
                <input type="text" name="remarks" required>
            </div>
            <div class="mt-4 px-4">
                <button type="submit" class="bg-maroon-100 text-white rounded px-3 py-2">Submit</button>
            </div>
    
        </div>
    </form>
    
@endsection