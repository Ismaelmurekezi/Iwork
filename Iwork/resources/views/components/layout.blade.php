<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/main.css">
        <title>iWork | explore available jobs</title>
        {{-- @vite('resources/css/app.css') --}}


        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,100&display=swap" rel="stylesheet">


    </head>
    <body>
        <div class="header">
            <div class="logo">
                <h1>iWork</h1>
            </div>
            <div class="links">
            <a href="/">Home</a>
            <a href="/">Find Job</a>
            <a href="/jobs/create">Post Job</a>
            {{-- <a href="/jobpost/create">Post Job</a> --}}
            <a href="#service">Services</a>
            <a href="#about">About Us</a>
            </div>
            @if (Route::has('login')) 
            <div class="btn">
                <button class="btn4"><a href="/jobpost/create" >Post job</a></button> 
                @auth
                <button class="btn1"><a href="{{ url('/dashboard') }}" >Dashboard</a></button>  
                @else
                <button class="btn2"><a href="{{ route('login') }}" >Log in</a></button> 
                
                @if (Route::has('register'))
                <button class="btn3"><a href="{{ route('register') }}" >Register</a></button>  
                   @endif
                @endauth
            </div>
        @endif
     
            </div>

         
              {{-- @yield('content') --}}

              {{ $slot }}



            <div class="footer">
                <div class="footer1">
                    <h2>iWork</h2></br></br>
                    <p>Dump Utils. ServiceStack.Text has extension
                   ServiceStack properties of any type into a human .</p>
                </div>
                <div class="footer2">
                    <h4>Company</h4></br></br>
                    <p>- Our team</p></br>
                  <p>- Terms and Conditions</p>
                </div>
                <div class="footer3">
                    <h4>About</h4></br></br>
                    <p href="/alljobs">Find job</p></br>
                    <p>Post job</p></br>
                    <p>Services</p>
                </div>
                <div class="footer4">
                    <h4>Reach To Us</h4></br></br>
                    <p>iwork@gmail.com</p></br>
                    <p>+2507387857</p></br>
                    <p>UR-CST kigali</p></br>
                </div>
            </div>

            <x-flash-msg/>
         </body>
</html>