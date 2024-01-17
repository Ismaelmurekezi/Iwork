<x-app-layout>
    {{-- @vite('resources/css/app.css')  --}}
  
      <x-slot name="header">
      
      </x-slot>
  
              
      <div class="flex flex-col bg-white">
              
          <div class="w-56 h-[85vh] shadow-xl  flex flex-row ml-0 ">

              <aside class="w-64 px-7 mb-16   flex flex-col bg-white -mt-36 pt-8 ">
                <h2 class="text-3xl font-bold pb-6  pl-10 border-b-2 text-darkBlue "><a href="/">iWork</a></h2>
                <div class=" flex flex-row  text-xl ml-2 mt-7 gap-3  mb-3">
                  <img src="./img/dashboard.png" alt="" class="w-6  h-6 items-center mt-1">
                  <p class="font-medium   text-lightBlue  pl-2" ><a href="{{ url('/') }}">Dashboard</a></p>
                </div>
                <span class="flex flex-row text-xl ml-2 mt-3 gap-3 mb-3">
                  <img src="./img/users-icons.png" alt=""  class="w-6  h-6  items-center mt-1">
                  <p class="font-medium   pl-2  text-gray-600 "><a href="{{ url('/employers') }}">Employer</a></p>
                </span>
                <span class="flex flex-row text-xl ml-2 mt-3 gap-3 mb-3">
                  <img src="./img/users-icons.png" alt="" class="w-6  h-6  items-center mt-1">
                  <p class="font-medium   pl-2 text-gray-600"><a href="{{ url('/employees') }}">Employee</a></p>
                </span>
              
                <span class="flex flex-row text-xl ml-2 mt-3 gap-3 mb-3">
                  <img src="./img/application-icon.png" alt="" class="w-6  h-6  items-center mt-1">
                  <p class="font-medium    pl-2 text-gray-600 active:bg-lightBlue"><a href="/applications">Application</a></p>
                </span>
                <span class="flex flex-row text-xl ml-2 mt-3 gap-3 mb-3">
                  <img src="./img/schedule-icon.png" alt="" class="w-6  h-6  items-center mt-1">
                  <p class="font-medium    pl-2 text-gray-600 whitespace-nowrap "><a href="">Job Schedule</a></p>
                </span>
             <button class="w-32 h-11 bg-lightBlue mt-40 ml-10 text-white font-semibold rounded-2xl"> <img src="#" alt=""> Logout</button>
              </aside>

          
               
            
  
              <div class=" h-40 flex  gap-8  mx-20 px-20 justify-center items-center basis-56 border-2 shadow-md  rounded-3xl ">
                <img src="/img/computer.png" alt="computer" class="w-20 h-10 -mt-3">
                <div class="basis-80">
                    <p class="text-lightBlue text-xl font-bold   whitespace-nowrap ">Total Application</p>
                
                    <p class="font-bold text-3xl">application  </p>
        
                    <p>this month</p>
                </div>
              </div>
                  
  
              </div>
  
            
  
            
          </div>
  
          <div class=" -mt-[600px] ml-72  ">
            <div class="flex justify-between">
              <span class="">
                <p class="pl-6 font-medium text-lg text-darkBlue">List of Jobs</p>
                <p class="pl-6 pb-2 pt-5 font-medium">View details</p>
                
              </span>

              
              
              {{-- <button class="w-32 h-10 bg-lightBlue text-white font-bold text-lg mr-[600px] mt-5 rounded-lg"><a href="#" >Register</a></button>  --}}
  
            </div>

  
  
  
  <div class="relative mb-20 overflow-x-auto shadow-md sm:rounded-lg">
      <table class="w-full  text-sm text-left rtl:text-right border-slate-200 border-2 text-gray-500 dark:text-gray-400">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border-slate-200 border-2">
              <tr class="border-slate-200 border-2">
             
                  <th scope="col" class="px-6 py-3 border-slate-200 border-2">
                     Id
                  </th>
                
                  <th scope="col" class="px-6 py-3 border-slate-200 border-2">
                      Company
                  </th>
               
                  <th scope="col" class="px-6 py-3 border-slate-200 border-2">
                  email
                  </th>
      
                  <th scope="col" class="px-6 py-3 border-slate-200 border-2">
                      Action
                  </th>
              </tr>
          </thead>
          <tbody class="border-slate-200 border-2">
              <tr class="bg-white border-slate-200 border-2 dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
              
                  @unless($jobs->isEmpty())
                  @foreach($jobs as $job)
         
                  <th scope="row" class="px-6 py-4  font-medium text-gray-900 whitespace-nowrap dark:text-white border-slate-200 border-2">
                    
                      {{ $job->id  }}
                  </th>
               
                  <td class="px-6 py-4 border-slate-200 border-2">
                      {{ $job->company }}
                  </td>
                
                  <td class="px-6 py-4 border-slate-200 border-2">
                      {{ $job->email }}
                  </td>
   
                  <td class="flex px-6 py-4 border-slate-200 border-t-2">
                      <a href="/jobs/{{ $job->id }}/edit" class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">Edit</a>
                      <form method="POST" action="/jobs/{{$job->id}}">
                          @csrf
                          @method('DELETE')
                          <button class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-red-400 border border-red-400" ><i class="fa-solid fa-trash"></i> Delete</button>
                        </form>
                  </td>
                  
              </tr>
              
              @endforeach
                @else
                <tr class="border-gray-300">
                  <td class="px-4 border-t border-b border-gray-300 text-lg">
                    <p class="text-center">No Job Listings Found</p>
                  </td>
                </tr>
                @endunless
    
          </tbody>
      </table>
      <div class="mt-6 p-4">
          {{ $jobs->links() }}
       </div>
  </div>
         
          </div>
        </div>

  </x-app-layout>
  