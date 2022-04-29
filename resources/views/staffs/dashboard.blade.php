@extends('layouts.layout')

@section('content')

<div class="flex" style="background-color: lightgray;">
      
  <div class="container flex"
      style="margin:auto; padding:auto;
        font-family: Century Gothic;
        justify-content: center;
        background-color:transparent;

        position: relative;
        width:1100px;
        height: 490px;
        align-items: center;
        flex-wrap: wrap;
        padding: 30px;
        margin-top: 10px;">

    <button class="card col flex rounded border-4 border-solid"
      style="width: 300px;
      height: 400px;
      position: relative;
      margin: 30px 15px;
      margin-top: 5px;
      padding: 30px 30px;
      border-radius: 10px;
      border-color: maroon;
      box-shadow: 10px 10px 15px rgba(0,0,0,0.5);">
      <div class="img" style="width:250px; text-align:center;">
        <a href="/staffs/requests">
          <img class="rounded mx-auto d-block"src="/img/dashboard/layers.png" alt="" style="margin-top: 10px;  margin-bottom: 50px; width: 75%;"><hr>
          <h1 style="color: black; font-size: 40px; margin-top: 5px;">List of Request</h1>
        </a>
      </div>
    </button>

    <button class="card col flex rounded border-4 border-solid"
      style="width: 300px;
      height: 400px;
      position: relative;
      margin: 30px 15px;
      margin-top: 5px;
      padding: 30px 30px;
      border-radius: 10px;
      border-color: maroon;
      box-shadow: 10px 10px 15px rgba(0,0,0,0.5);">
      <div class="img" style="width:250px; text-align:center;">
        <a href="/staffs/approved-requests">
          <img class="rounded mx-auto d-block"src="/img/dashboard/file-check-alt.png" alt="" style="margin-top: 10px;margin-bottom: 50px; width: 75%;"><hr>
          <h1 style="color: black; font-size: 40px; margin-top: 5px;">Approved Requests</h1>
        </a>
      </div>
    </button>

    <div>
      <button class="card col flex rounded border-4 border-solid"
      style="width: 300px;
      height: 185px;
      position: relative;
      margin: 30px 15px;
      margin-top: 5px;
      padding: 30px 30px;
      border-radius: 10px;
      border-color: maroon;
      box-shadow: 10px 10px 15px rgba(0,0,0,0.5);">
      <div style="width:250px; text-align:center;">
        <a href="/staffs/profile">
          <img class="rounded mx-auto d-block"src="/img/dashboard/user.png" alt="" style="margin-bottom: 10px; width: 30%;"><hr>
          <h1 style="color: black; font-size: 40px; margin-top: 5px;">Profile</h1>
        </a>
      </div>
      </button>

      <button class="card col flex rounded border-4 border-solid"
        style="width: 300px;
        height: 185px;
        position: relative;
        margin: 30px 15px;
        margin-top: 5px;
        padding: 30px 30px;
        border-radius: 10px;
        border-color: maroon;
        box-shadow: 10px 10px 15px rgba(0,0,0,0.5);">
      <div style="width:250px; text-align:center;">
        <a href="/staffs/about">
          <img class="rounded mx-auto d-block"src="/img/dashboard/info.png" alt="" style="margin-bottom: 10px; width: 30%;"><hr>
          <h1 style="color: black; font-size: 40px; margin-top: 5px;">About</h1>
        </a>
      </div>
      </button>

    </div>
    
  </div>

</div>

@endsection