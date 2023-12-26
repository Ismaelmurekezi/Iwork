
@extends('layout')

@section('content')
        <div >

            <div class="contents">
                <div class="content1">
                    <h2>LOOKING FOR JOB  ,YOU COME TO THE RIGHT PLACE</h2>
                    <p>Dump Utils. ServiceStack.Text has extension methods which </br>
                     recursively dumps all the public properties of any type into a human</br>
                    Dump Utils. ServiceStack.Text has extension methods which </br>
                     recursively dumps all the public properties of any type into a human  </p>
                     <form action="#" method="GET" class="search-form">
                    <input type="text" name="query" placeholder="Search for a job...">
                     <button type="submit" class="btn-search">Search</button>
                    </form>
                </div>
                <div class="content2">
                    <img src="/img/Rectangle2.png" alt="groupp">
                </div>
                
            </div>
            <div class="vision" id="about">
                <div class="vision1">
               {{-- <h2>About Us</h2>  --}}
                    <img src="/img/Group.png" alt="">
                </div>
                <div class="vision2">
                    <h2>History</h2>
                    <p>
                  recursively dumps all the public properties of any type into a human .
                      Dump Utils. ServiceStack.Text has extension methods which 
                       recursively dumps all the public properties of any type into a human .
                  </p><br>
                      <h2>Vision</h2>
                      <p>
                  recursively dumps all the public properties of any type into a human .
                  Dump Utils. ServiceStack.Text has extension methods which 
                        recursively dumps all the public properties of any type into a human .
                        </p><br><br>
                        <button class="btn2b">OBJECTIVE</button>
                </div>
            </div>

               {{-- Job listings --}}


            <div class="available">
                <div class="available1">
                    <h2>Available Jobs</h2>
                </div><br><br>


                @unless (count($jobs)==0)   
                @foreach ($jobs as $job)
                

                <div class="available2">
                    <div class="av1">
                        <h3  >   <a class=" text-darkBlue font-semibold  no-underline"  href="/jobs/{{ $job['id'] }}">{{ $job->title}}</a></h3>
                    </div>
                    <div class="av2">
                        <h4>{{ $job->location}}</h4>
                        <p>{{ $job->status}}</p>
                    </div>
                    <div class="av3">
                        <h4>Posted by</h4>
                    </div>
                    <div class="av4">
                        <img src="/img/ic.png" alt="">
                        <h4>{{ $job->company }}</h4>
                        <p>2 days ago</p>
                    </div>
                </div>
              
                @endforeach
                <a href="/alljobs"><button class="btn2b BEBE">VIEW MORE</button></a>
                @else
                
                <p >No jobs list found</p>
                    
                @endunless



         </div>
             </div>
           <div class="services">
              <div class="services1">
                <img src="/img/Group1.png" alt="">
                <img src="/img/Group2.png" alt="">
              </div>
              <div class="services2" id="service">
                 <h2>SERVICES WE PROVIDE</h2></br></br></br>
                 <p>Dump Utils. ServiceStack.Text has extension methods which 
                   recursively dumps all the public properties of any type into a human .
                   Dump Utils. ServiceStack.Text has extension methods which 
                   recursively dumps all the public properties of any type into a human .
                   Dump Utils. ServiceStack.Text has extension methods which 
                   recursively dumps all the public properties of any type into a human .
                   Dump Utils. ServiceStack.Text has extension methods which 
                   recursively dumps all the public properties of any type into a human .
                  </p>
                  </br></br>
                  <div class="serv">
                  <div class="serv1">
                    <h3>Recruiter connection</h3></br>
                    <p>Dump Utils. ServiceStack.Text has extension
                       ServiceStack</p>
                  </div></br></br>
                  <div class="serv1">
                    <h3>Skill Training</h3></br>
                    <p>Dump Utils. ServiceStack.Text has extension
                       ServiceStack</p>
                  </div></br></br>
                  <div class="serv1">
                    <h3>Test and Interview</h3></br>
                    <p>Dump Utils. ServiceStack.Text has extension
                       ServiceStack</p>
                  </div>
                  </div>
              </div>
            </div>
            <div class="tips">
                <h2>TIPS TO LAND BETTER JOB</h2>
                <div class="tip">
                    <div class="tips1">
                        <h4>STEP1</h4>
                        <img src="/img/step1.png" alt="">
                        <p>Register an account</p>
                    </div>
                    <div class="tips1">
                        <h4>STEP2</h4>
                        <img src="/img/step2.png" alt="">
                        <p>Find your Job</p>
                    </div>
                    <div class="tips1">
                        <h4>STEP3</h4>
                        <img src="/img/step3.png" alt="">
                        <p>Apply for it</p>
                    </div>
                </div>
            </div>
            
        </div>
   
   

        @endsection
   
