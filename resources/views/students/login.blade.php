@extends('layouts.manualcss')

    @section('content')
    <div class="logo">
    <img src="/img/TOR.png" alt="system-logo">
    </div>

    <div class="right">
        <h2 >
            <img src="/img/id-card.png" alt="staff-logo">
            <div>Login</div>
        </h2>
        <form method="post" action="{{ route('user.login') }}">
        @csrf
            <div class="txt_field">
            <input type="email" name="email" required :value="old('email')" autofocus>
            <span></span>
            <label>Email</label>
            </div>
            <div class="txt_field">
            <input id="password" type="password" name="password" required autocomplete="current-password">
            <span></span>
           
            <label>Password</label>
            </div>
            @if (Route::has('password.request'))
            <div class="pass" ><a href="{{ route('password.request') }}">Forgot Password?</a> </div>
            @endif
            <input type="submit" value="Login">
            <div class="signup_link">
            No Account yet? <a href="/students/registration">Signup Here!</a>
            </div>

            
            @if($errors->any)
            @foreach ($errors->all() as $error)
                    <li class="error">{{$error}}</li>
            @endforeach
             @endif
        </form>
        </div>
@endsection