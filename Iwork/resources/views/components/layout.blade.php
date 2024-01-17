<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/main.css">
        <title>iWork | explore available jobs</title>
        {{-- @vite('resources/css/app.css') --}}


        <link rel="preconnect" href="https://fonts.googleapis.com">
        <script src="//unpkg.com/alpinejs" defer></script>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,100&display=swap" rel="stylesheet">


    </head>
    <body>
        <div class="header">
            
            <div class="logo">
           <img  src={{ asset('./img/logoog.jpeg') }}  alt="" width="70" height="70">
            </div>
            <div class="links">
            <a href="/">Home</a>
            <a href="/application/create">Find Job</a>
            <a href="#service">Services</a>
            <a href="#about">About Us</a>
            </div>

    {{-- flash message for success --}}
    
       <x-flash-msg/>

            @if (Route::has('login')) 
            <div class="btn">
                @auth

                <div style="display: flex; height:40px; gap:2rem">

                    
                    <button class="btn4"><a href="/jobs/create" >Post job</a></button> 
                    <section>
                        <div>
                            {{ Auth::user()->name }}
                         
    
                        </div>

                        {{-- logout dropdown codes --}}

                        <div class="dropdown-container">
                            <div style="width: 30px; height: 30px; margin-left:10px" id="dropdownToggle">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 
                                        10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010- 
                                        1.414z" clip-rule="evenodd"  />
                                </svg>
                            </div>
                            <nav class="dropdown-content" id="dropdownContent">
                                <a href="{{ route('profile.edit') }}" style="text-decoration: none; color:black;">Profile</a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-responsive-nav-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();" style="text-decoration: none; color:black">
                                {{ __('Log out') }}
                            </x-responsive-nav-link>
                                </form>
                            </nav>
                        </div>
                    
                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <script>
                            $(document).ready(function() {
                                $('#dropdownToggle').click(function(event) {
                                    event.stopPropagation(); // Prevent the click event from propagating to the document
                                    $('#dropdownContent').toggle();
                                });
                    
                                // Close the dropdown when clicking outside of it
                                $(document).on('click', function(event) {
                                    if (!$(event.target).closest('.dropdown-container').length) {
                                        $('#dropdownContent').hide();
                                    }
                                });
                            });
                            
                            $(document).ready(function() {
                           $('#dropdownContent').hide();
                           });
                        </script>
                    
                      

                    </section>

                </div>
              
             


                
                
                
                @else
                <button class="btn2" ><a href="{{ route('login') }}" >Log in</a></button> 
                
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
                    <img src={{ asset('./img/logoog.jpeg') }} alt="" width="70" height="70">
                </br></br>
                    <p>Dump Utils. ServiceStack.Text has extension
                   ServiceStack properties of any type into a human .</p>
                </div>
                <div class="footer2">
                    <h4>Company</h4></br></br>
                    <p>Our team</p></br>
                  <p> Terms and Conditions</p>
                </div>
                <div class="footer3">
                    <h4>About</h4></br></br>
                    <p><a href="{{ route('apply-job') }}" class="footer-links">Find job</a></p></br>
                    <p><a href="{{ route('create.job') }}" class="footer-links">Post job</a></p></br>
                    <p><a href="#service" class="footer-links">Services</a></p>
                </div>
                <div class="footer4">
                    <h4>Reach To Us</h4></br></br>
                    <p>iwork@gmail.com</p></br>
                    <p>+2507387857</p></br>
                    <p>UR-CST kigali</p></br>
                </div>
            </div>

     
         </body>
</html>




