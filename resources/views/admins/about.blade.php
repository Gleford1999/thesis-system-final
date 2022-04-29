@extends('layouts.layout')

@section('content')

    <div class="flex justify-center" style="font-family: Century Gothic; background-color: lightgray; height: 500px;">
        <div class="flex rounded border-4 border-solid" 
        style="
            height: 470px;
            width: 700px;
            margin:20px 10px;
            padding: 10px 10px;

            border-radius: 10px;
            border-color: maroon;
            box-shadow: 10px 10px 15px rgba(0,0,0,0.5);">
            <div>
                <img class="rounded" src="/img/bg.jpg" alt="" size="100%"style="width: 800px; height: 58%;">
                <p class="justify-center" style="margin-left: 20px; margin-top: 10px;">
                This website was created and developed by Gleford Abuan, Ma. Luisa Francisco,
                Joselito Balmaceda Jr. and Cyrus Niel de la Cruz on September 2021. A Web Application for generating transcript of record and grade profiling of students. 
                Waiting for a day or weeks before you can get your TOR? 
                We come out with the idea on making the process of grade profiling and generating TOR faster than the normal process of the school. This system only focusses on the curriculum of BS Computer Science.
                </p>
            </div>
        </div>
    </div>

@endsection